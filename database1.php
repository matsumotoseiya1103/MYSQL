<!DOCTYPE html>
<html>
<head>
	<title>DATABASE-MYSQL</title>
	<meta name="view-port" content="width=device-width,initial-sacale1=">
</head>
<body>
     <?php
        //define the constsnts 
        define("SERVERNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","db1");
        //creat a connection to the database
        $conn=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
        //test the connection
        if(!$conn){
        	die("Connection failed".mysqli_connect_error());
        }else
          echo "Connected Successfully";

          //creat database usingb SQL -structured Query Langage
          $sql="CREATE DATABASE IF NOT EXISTS mydb";
          if($conn->query($sql)==TRUE)
          	echo "Database Created Successfully<br>";
          else
          	echo "Error Creating datbase".$conn->error;
          //creat table using SQL
          $sql="CREATE TABLE IF NOT EXISTS Users(
                id INT(2) unsigned auto_increment PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                password VARCHAR(10) NOT NULL,
                email VARCHAR(50) UNIQUE,
                reg_date TIMESTAMP
          )";
         if($conn->query($sql)==TRUE)
               echo "Table created successfully";
           else
            echo "Error creating table:".$conn->error;

           //insert records into the users table mehod1
           $sql="INSERT INTO Users(username,password,email)VALUES ('peter','peterJoe','peter@gmail.com');";
           $sql.="INSERT INTO Users(username,password,email)VALUES ('John','JohnDoe','john@gmail.com');";
           $sql.="INSERT INTO Users(username,password,email)VALUES ('Mary','MaryJohn','mary@gmail.com');";
           $sql.="INSERT INTO Users(username,password,email)VALUES ('julie','JulieRaj','JulieRaj@gmail.com');";
           $sql.="INSERT INTO Users(username,password,email)VALUES ('Kishore','Kishore','Kishor@gmail.com');";

           if($conn->multi_query($sql)==TRUE)
             echo "Records Inserted Successfully<br>";
           else
             echo "Error:".$conn->error;
          //mehhod2

         //insert recod into the users table
         $stmt=$conn->prepare("INSERT INTO Users(username,password,email) VALUES(?,?,?);");
         $stmt->bind_param("sss",$username,$password,$email);


         $username="Virat kholi";
         $password="virat";
         $email="virat@gmail.com";
         $stmt->execute();

         $username="MS Dhoni";
         $password="dhoni";
         $email="msd@gmail.com";
         $stmt->execute();

         $username="Sachin";
         $password="tendulkar";
         $email="sachin@gmail.com";
         $stmt->execute();

         echo "New records inserted successfully";

         $stmt->close();
         $conn->close();


         //Drop the table uses from the database


         /*$sql="DROP TABLE Users;";
         if($conn->query($sql)==TRUE)
         	echo "Table deleted successfully<br>";
         else
         	echo "Error:".$conn->error;
         $conn->close();*/


    







     ?>
</body>
</html>