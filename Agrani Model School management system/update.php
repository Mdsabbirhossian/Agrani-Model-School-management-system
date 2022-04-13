
  <?php
  //error_reporting(0);
  include('connect.php');
    if (isset($_POST['register'])){
        
                $admission_number=$_POST['admission_number'];
                $sirname = $_POST['sirname'];
                $firstname= $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $idno = $_POST['idno'];
                $dateofbirth = $_POST['dateofbirth'];
                $gender = $_POST['gender'];
                $country_id = $_POST['country_id'];
                $county_id = $_POST['county_id'];
                $constituency_id = $_POST['constituency_id'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $zipcode = $_POST['zipcode'];
                $course_id = $_POST['course_id'];
                $border = $_POST['border'];
                $reg_date = $_POST['reg_date'];
                //dri nah mah edit xng data
                $psirname = $_POST['psirname'];
                $pfirstname= $_POST['pfirstname'];
                $plastname = $_POST['plastname'];
                $pmobile= $_POST['pmobile'];
                $prelationship = $_POST['prelationship'];   
                $feepayable = $_POST['feepayable'];


                $sql2="UPDATE `studentstable` SET `sirname`='$sirname',`firstname`='$firstname',`lastname`='$lastname',`idno`='$idno',`dateofbirth`='$dateofbirth',`gender`='$gender',`country_id`='$country_id',`county_id`='$county_id',`constituency_id`='$constituency_id',`mobile`='$mobile',`email`='$email',`address`='$address',`zipcode`='$zipcode',
                `course_id`='$course_id',`border`='$border',`reg_date`='$reg_date',`feepayable`='$feepayable' 
                WHERE `admission_number`='$admission_number'"; 

                $sql3="UPDATE parents SET  psirname ='$psirname', pfirstname ='$pfirstname',
               plastname ='$plastname',pmobile ='$pmobile', prelationship = '$prelationship' 
               WHERE admission_number = '$admission_number'";
                
               mysqli_query($db,$sql2);
               mysqli_query($db,$sql3);

?>
<?php
       
                        $query="SELECT * FROM studentstable WHERE course_id='$course_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQL_ASSOC))
                        {
                        $id = $rec['course_id'];
                        }?>
                        
                        <script>
                        alert('Record Succsessfully Updated');
                        window.location = "viewstudents.php?id=<?php echo $id;?>";
                        </script>

<?php

}?>