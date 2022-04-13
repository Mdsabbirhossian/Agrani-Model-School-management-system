
  <?php
  error_reporting(0);
  include('connect.php');
    if (isset($_POST['register'])){
        
                $department_id = $_POST['department_id'];
                $hod= $_POST['hod'];
  
                $sql3="UPDATE departments SET  department_id ='$department_id', hod ='$hod' WHERE department_id = '$department_id'";
                
               mysqli_query($db,$sql2);
               mysqli_query($db,$sql3);

?>
<?php
       
                        $query="SELECT * FROM departments WHERE departments_id='$departments_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQL_ASSOC))
                        {
                        $id = $rec['departments_id'];
                        }?>
                        
                        <script>
                        alert('Record Succsessfully Updated');
                        window.location = "departments.php?id=<?php echo $id;?>";
                        </script>

<?php

}?>