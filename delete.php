<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php
       require_once('includes/dbh.inc.php');
       $sql="DELETE FROM Users where id=3";
       if($conn->query($sql)==true)
       	echo "Record deleted successfully";
       else
       	echo "Error".$conn->error;

       //DELETE ALL THE RECORD
       $sql="TRUNCATE TABLE Users";
       if($conn->query($sql)==TRUE)
       	echo "All Records deleted sucessfully";
       else
       	echo "Error:".$conn->error;
      
  ?>

</body>
</html>