<!DOCTYPE html>
<html>
<head>
	<title>database</title>
</head>
<body>
    <?php
        define("SERVERNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","seiya");


        $conn=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
        $sql="CREATE DATABASE IF NOT EXISTS seiya";










    ?>
</body>
</html>