<?php
error_reporting(0);//turning off error reporting
include("connect.php");
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
<!--***************the year term text box*************************************************-->
<script>
function myFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<!--***************the year search text box*************************************************-->
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = "<html><head><title></title></head><body>" + divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;     
        }
</script>
   
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
    <!--This codes to load the image loader--> 
    <div id="loading">
            <img id="loading-image" src="assets/img/loader.gif" alt="Loading..." />
    </div>
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
            <li class="active"><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--****************************************************************************-->
                        <div class="container" style="width:100%">
                            
                                <ul class="nav nav-tabs">
                                  <li ><a href="markstep1.php">Choose Class <img src="assets/img/new.png"> </a></li>
                                  <li ><a href="markstep2.php">View Students<img src="assets/img/view2.png"></a></li>
                                  <li ><a href="markstep3.php">Enter Marks<img src="assets/img/view2.png"></a></li>
                                  <li><a href="markstep5.php">Criteria <img src="assets/img/delete2.png"></a></li>
                                  <li class="active"><a href="markstep4.php">View Marks <img src="assets/img/import.png"></a></li>
                                  
                                  <li><a href="markstep6.php">Export/import CSV </a></li>
                                  <li><a href="markstep7.php">Print Transcript<img src="assets/img/print.png"> </a></li>
                                </ul>
                            <br>
                            
                        </div>
                        
  <!--*************************************************************************************************************************-->
<div id="page-wrapper">
            <div class="container-fluid">

                
                <!-- Page Heading -->
                <nav>
                <?php

                    include('connect.php');
                    $id=$_GET['id'];
                    $sql1="SELECT * FROM course WHERE course_id=$id";
                    $records1=mysqli_query($db,$sql1);
                    while($row=mysqli_fetch_array($records1,MYSQL_ASSOC))
                     {
                        $id1=$row['coursename'];
                                                            
                    }
                ?>
                    <td style="width:30px"><a button type='button'  onclick="javascript:printDiv('printablediv')" class="btn btn-primary glyphicon  glyphicon-print"></a></td>
                    <td><a button type='button' class="btn btn-primary" href="markstep5.php">Back</a></td></tr>                                               

                <div id="printablediv">
                <div style="width:100%; background-color:yellow; text-align:center; font-size:20px;"><label>Students Marks. <?php echo $id1; ?>&nbsp;&nbsp;, Year&nbsp; <?php  echo $_GET['year']?>,&nbsp;&nbsp;<?php echo $_GET['term']   ?> </label></div>
  
                                            
                            <div class="block-content collapse in">
                                <div class="span12">
    
    
                            <form method="post">
                                    <div class="table-responsive">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="myTable">
                                    
                                        <thead>
                                          <tr>
                                                <th></th>
                                                <th><center>Adm No.</center></th>
                                                
                                                <th><center>Term</center></th>
                                                <th><center>Year</center></th>
                                                <th><center>Mathematics</center></th>
                                                <th><center>English</center></th>
                                                <th><center>Kiswahili</center></th>
                                                <th><center>Science</center></th>
                                                <th><center>Social Studies</center></th>
                                                <th><center>Total</center></th>
                                                <th><center>Average</center></th>
                                                <th><center>Grade</center></th>
                                               
                                              <!--  <th><center>Rank</center></th> -->
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                                <th></th>
                                           </tr>
                                        </thead>                 
                                    <tbody>
            <!--Calculating the totals marks************************************************************************************-->
                                        <?php
                                         $id=$_GET['id']; 
                                          $term=$_GET['term']; 
                                           $year=$_GET['year']; 
                                         $sql="SELECT SUM(maths),SUM(english),SUM(kiswahili),SUM(social_studies),SUM(science),SUM(maths + english + kiswahili + social_studies + science) AS totalfinal
                                          from marks WHERE course_id=$id AND year=$year AND term='$term' ";
                                          $user_query=mysqli_query($db,$sql);
                                          while($row1=mysqli_fetch_array($user_query, MYSQL_ASSOC)){
                                            $maths=$row1['SUM(maths)'];
                                            $english=$row1['SUM(english)'];
                                            $kiswahili=$row1['SUM(kiswahili)'];
                                            $social_studies=$row1['SUM(social_studies)'];
                                            $science=$row1['SUM(science)']; 
                                            $totalfinal=$row1['totalfinal'];                                           
                                            }?>
            <!--Calculating the Average marks************************************************************************************-->
                                         <?php
                                         $id=$_GET['id']; 
                                          $term=$_GET['term']; 
                                           $year=$_GET['year']; 
                                         $sql="SELECT ROUND(AVG(maths),2),ROUND(AVG(english),2),ROUND(AVG(kiswahili),2),ROUND(AVG(social_studies),2),ROUND(AVG(science),2), ROUND(AVG(maths + english + kiswahili + social_studies + science)) AS Averagefinal
                                          from marks WHERE course_id=$id AND year=$year AND term='$term' ";
                                          $user_query=mysqli_query($db,$sql);
                                          while($row1=mysqli_fetch_array($user_query, MYSQL_ASSOC)){
                                            $amaths=$row1['ROUND(AVG(maths),2)'];
                                            $aenglish=$row1['ROUND(AVG(english),2)'];
                                            $akiswahili=$row1['ROUND(AVG(kiswahili),2)'];
                                            $asocial_studies=$row1['ROUND(AVG(social_studies),2)'];
                                            $ascience=$row1['ROUND(AVG(science),2)']; 
                                            $Averagefinal=$row1['Averagefinal'];                                           
                                            $classaverage=($amaths +$aenglish + $akiswahili +$asocial_studies +$ascience)/5;

                                            }?>
            <!--Looking for final class grade and assingn it variable $classgrade*************************************************-->
                                            <?php
                                                if ($classaverage > "80") {
                                                        $classgrade="A";
                                                    } 
                                                    elseif (($classaverage > "60") && ($classaverage < "80"))
                                                     {
                                                        $classgrade="B";
                                                    } 
                                                    elseif (($classaverage > "40") && ($classaverage < "60"))
                                                     {
                                                        $classgrade="C";
                                                    } 
                                                    elseif (($classaverage > "0") && ($classaverage < "40"))
                                                     {
                                                        $classgrade="F";
                                                    }
                                                     else{
                                                        $classgrade="";
                                                    } 

                                            ?>                                            
            <!--Displaying the data************************************************************************************-->
                                        <?php 
                                        $id=$_GET['id']; 
                                          $term=$_GET['term']; 
                                           $year=$_GET['year']; 
                                        $sql ="SELECT  admission_number,term,year,maths,english,kiswahili,social_studies,science, average,
                                        ( maths + english + kiswahili + social_studies + science)AS total2,
                                          CASE 
                                                WHEN  ((maths + english + kiswahili + social_studies + science )/(100*5) * 100) >= 80 THEN 'A' 
                                                WHEN  ((maths + english + kiswahili + social_studies + science )/(100*5) * 100) >=60  THEN 'B' 
                                                WHEN  ((maths + english + kiswahili + social_studies + science )/(100*5) * 100) >=40  THEN 'C'
                                            ELSE   'FAIL'
                                            END AS grade, 

                                            FIND_IN_SET ( average, (SELECT GROUP_CONCAT( average ORDER BY average DESC )FROM marks ))
                                            AS rank 

                                          from marks where course_id=$id AND year=$year AND term='$term' ORDER BY rank ASC";
                                        $user_query=mysqli_query($db,$sql) or die("error getting data");
                                        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
                                        $id = $row['admission_number'];
                                      
                                            ?> 
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                
                                                </td>
                                                
                                                <td><center><?php echo $row['admission_number']; ?></center></td>
                                                <td><center><?php echo $row['term']; ?></center></td>
                                                <td><center><?php echo $row['year']; ?></center></td>
                                                <td><center><?php echo $row['maths']; ?></center></td>
                                                <td><center><?php echo $row['english']; ?></center></td>
                                                <td><center><?php echo $row['kiswahili']; ?></center></td>
                                                <td><center><?php echo $row['social_studies']; ?></center></td>
                                                <td><center><?php echo $row['science']; ?></center></td>
                                                <td><center><?php echo $row['total2']; ?></center></td>
                                                <td><center><?php echo $row['average']; ?></center></td>
                                                <td><center><?php echo $row['grade']; ?></center></td>
                                                
                                            <!--    <td><center> //<?php //echo $row['rank']; ?><!-- </center></td> -->                                          
                                                    
                                                </tr>
             <!--end of Displaying the data************************************************************************************-->
                                                <?php } ?>                                                                                       
                                        
                                                <tr style="background-color:#D79778">
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" >
                                                </td>
                                                <th><center>Total</th>
                                                <th><center>-</th>                                                
                                                <th><center>-</th>
                                                <th><center><?php echo $maths ?></center></th>
                                                <th><center><?php echo $english ?></center></th>
                                                <th><center><?php echo $kiswahili ?></center></th>
                                                <th><center><?php echo $social_studies ?></center></th>
                                                <th><center><?php echo $science ?></center></th>
                                                <th><center><?php echo $totalfinal ?></center></th>
                                                <th><center>-</center></th>
                                                <th><center>-</center></th>
                                                
            <!--Displaying all the averages************************************************************************************--> 
                                                </tr>
                                                <tr style="background-color:#D3F984">
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" >
                                                </td>
                                                <th><center>Average</th>                                                
                                                <th><center>-</th>
                                                <th><center>-</th>
                                                <th><center><?php echo $amaths ?></center></th>
                                                <th><center><?php echo $aenglish ?></center></th>
                                                <th><center><?php echo $akiswahili ?></center></th>
                                                <th><center><?php echo $asocial_studies ?></center></th>
                                                <th><center><?php echo $ascience ?></center></th>
                                                <th><center>-</center></th>
                                                <th><center><?php echo $classaverage ?></center></th>
                                                <th><center><?php echo $classgrade ?></center></th>
 
                                                </tr>
                                                
                                    </table>
                                </form>
              </DIV>
<!-- block 8***************************************************************************************-->  
                                

                                </div>
                            </div>
                        </div>
                    </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
</div>
  <!--*********************************************************************************-->  
    <div class="col-md-12" style="background-color:#526F35; bottom:0px;position:fixed;">
        <p class="text-center text-danger" style="color:white;" >@J. Muthama Tel: +254729734768</p>
    </div>
 <script src="assets/js/search.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/affix.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="assets/js/alert1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/button.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/collapse.js"></script>
    <script src="assets/js/color.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/DT_bootstrap.js"></script>
    <script src="assets/js/dynamic.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dialog.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.jgrowl.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.uniform.min.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/jquery-1.9.1.js"></script>
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery-ui-1.10.3.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="assets/js/myjquery.js"></script>
    <script src="assets/js/myjquery1.js"></script>
    <script src="assets/js/npm.js"></script>
    <script src="assets/js/popover.js"></script>
    <script src="assets/js/profile.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/scrollspy.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/tooltip.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/wysihtml5-0.3.0.js"></script>
    <script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>
</body>

</html>