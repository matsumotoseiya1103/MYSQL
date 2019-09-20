<?php
   require_once('includes/dbh.inc.php');
   $sql="Drop Table Users;";
   if($conn->query($sql)==TRUE)
   	echo "successe<br>";
   else
   	echo "Error".$conn->error;

?>