<?php
 include('connect.php');
 
 if(isset($_POST["Importcourse"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 
 
	           $sql = "INSERT into course (
	           department_id,
	           coursename,
	           exambody,
	           duration,
	           feepayable) 
                   values (
                   '".$getData[1]."',
                   '".$getData[2]."',
                   '".$getData[3]."',
                   '".$getData[4]."',
                   '".$getData[5]."'
                   )";
                   $result = mysqli_query($db, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"csvtesting.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"csvtesting.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}
?>

<?php	 
 
 if(isset($_POST["Exportcourse"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Course ID', 'Department ID','Class name', 'Exambody', 'Duration', 'Fee Payable'));  
      $query = "SELECT * from course ORDER BY course_id DESC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 
?>

