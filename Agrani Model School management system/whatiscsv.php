<?php
error_reporting(0);//turning off error reporting
include("connect.php");
$sql="SELECT studentid FROM students where studentid LIKE '%CCA%'";
$records=mysqli_query($db,$sql);


?>
<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management system</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>
</head>
<body >
<!--end of heading section--> 
<ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >
  <?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['fname']))
        { 
        echo   "Current user: ".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
                echo "<script>
                    window.location = 'index.php'
                  </script>";
        }
        ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;View User</a></li>
      <li><a href="register_form.php"><i class="fa fa-users fa-lg"></i>&nbsp;Add New User</a></li>
      <li class="divider"></li>
      <li><a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a></li>
  </ul>
</div>
  </ul>
<!--************************************************-->
<div style="
    font-family:Nyala, Arial;
    text-align: left; 
    background-color: #526F35;
    padding: 20px; 
    color:white;
    width: 100%;
    height: 150px;">

    <!--this is the heading section-->   
    <h2>
            <?php
            $sql="SELECT * FROM companyinfo";
            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             while($row=mysqli_fetch_array($result, MYSQL_ASSOC))
                    {
                    echo '<image style="height:82px; width:82px;" src="data:image;base64,'. $row['clogo'].' "> ';
                    $cname = $row['cname'];
                     $cemail = $row['cemail'];
                      $ccontact = $row['ccontact'];
                       $clocation = $row['clocation'];
                    }?>
                    <?php 
                    echo $cname;
                    ?>

    <div style="float:right; font-size:20px;text-align:right;">
    
    <img src="assets/img/mail2.png">Email: <?php  echo $cemail; ?><br>
    <img src="assets/img/call1.png">Contact:<?php  echo $ccontact; ?><br>
    <img src="assets/img/location.png">Location: <?php  echo $clocation; ?>
    
    </div> 
   </h2>
</div>
<!--end of heading section-->  
<div>
        <ul class="nav nav-tabs">
            <li ><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li ><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >

<div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
<table >
<tr><td colspan="3" style="font-size:15px; text-align:left">
    <h4><font color="red">Please note</font></h4>
        A CSV (comma-separated values) file stores the tabular data in plain text format. Basically, CSV file format is used to import to or export from the table data. Each line of the CSV file is a data record that consists of one or more fields. When there is needed to add the huge data into the MySQL database, it’s very time-consuming to add data one by one. In that situation, import feature helps to insert a bunch of data in one click.<br>

Using CSV file you can store all the data and import the CSV file data into the database at once using PHP and MySQL. Import CSV into MySQL helps to save the user time and avoid repetitive work.
 </td>   
</tr>
<tr><td colspan="3" style="font-size:15px; text-align:left">
    <h4><font color="red">Ho to create CVS file</font></h4>
        A CSV is a comma separated values file which allows data to be saved in a table structured format. CSVs look like a garden-variety spreadsheet but with a .csv extension. Traditionally they take the form of a text file containing information separated by commas, hence the name.<br>

CSV files can be used with any spreadsheet program, such as Microsoft Excel, Open Office Calc, or Google Spreadsheets. They differ from other spreadsheet file types in that you can only have a single sheet in a file, they can not save cell, column, or row styling, and can not save formulas.<br>

In ecommerce, CSVs are used primarily for importing and exporting product, customer, and order information to and from your store.

Sample Product Import CSV: bulk-edit-product-import.csv<br>

Saving Your Spreadsheet as a CSV<br>

 
Note: These instructions are for Microsoft Excel 2010, but any spreadsheet software will follow a similar process.<br>
1. Open your file in your spreadsheet program.<br>

2. Click on File and choose Save As.<br>
<img src="assets/img/csv1">

File › Save As

3. Under Save as type, choose CSV (Comma delimited). Click Save.<br>
<img src="assets/img/csv2">

4. You may see a message that your file "may contain features that are not compatible with CSV." This message is to inform you that any formatting you may have (such as colors or bold text) and any formulas will not be preserved in the CSV formatted file. Click Yes to continue.
<img src="assets/img/csv3">
 </td>   
</tr>
</table>

</body>
</html>
<table>
