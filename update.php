<!DOCTYPE html>
<html>
<head>
	<title>MYSQL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>


</head>
<body>
    <?php
       require_once('includes/dbh.inc.php');
       $stmt=$conn->prepare("UPDATE Users SET PHONE = ? WHERE id=?");
       $stmt->bind_param("si",$phone,$id);

       $phone="111111111";
       $id=1;
       $stmt->execute();
  
       $phone="222222222222";
       $id=2;
       $stmt->execute();

       $phone="333333";
       $id=3;
       $stmt->execute();

       $phone="44444444";
       $id=4;
       $stmt->execute();

        $phone="555555555";
       $id=4;
       $stmt->execute();


       echo "Eecords update successefully";
       $stmt->close();

?>
       


</body>
</html>