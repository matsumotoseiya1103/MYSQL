<!DOCTYPE html>
<html>
<head>
	<title>review.php</title>
</head>
<body>
   <?php
      $conn=mysqli_connect("localhost","root","","db1");
      if(!$conn){
        	die("Connection failed".mysqli_connect_error());
        }else
          echo "Connected Successfully"."<br>";

        $sql="CREATE DATABASE IF NOT EXISTS students";
          if($conn->query($sql)==TRUE)
          	echo "Database Created Successfully<br>";
          else
          	echo "Error Creating datbase".$conn->error;


        $sql="CREATE TABLE IF NOT EXISTS takeshi(
                id INT(2) unsigned auto_increment PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                password VARCHAR(10) NOT NULL,
                email VARCHAR(50) UNIQUE,
                reg_date TIMESTAMP
          )";
        if($conn->query($sql)==TRUE)
               echo "Table created successfully<br>";
           else
            echo "Error creating table:".$conn->error;

           $sql="INSERT INTO Students(username,password,email)VALUES ('peter','peterJoe','peer@gmail.com');";
           $sql.="INSERT INTO Students(username,password,email)VALUES ('John','JohnDoe','john@gmail.com');";
           $sql.="INSERT INTO Students(username,password,email)VALUES ('Mary','MaryJohn','mary@gmail.com');";
           $sql.="INSERT INTO Students(username,password,email)VALUES ('julie','JulieRaj','JulieRaj@gmail.com');";
           $sql.="INSERT INTO Students(username,password,email)VALUES ('Kishore','Kishore','Kishor@gmail.com');";

           if($conn->multi_query($sql)==TRUE)
             echo "Records Inserted Successfully<br>";
           else
             echo "Error:".$conn->error;


   ?>
</body>
</html>