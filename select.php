
    <!DOCTYPE html>
<html>
<head>
	<title>MYSQL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
</head>
<body>
    <h1 class="text-center"> MYSQL-SELECT</h1>
    <div class="wrapper">
    	<div class="container">
    	<div class="row">
    	<div class="col-md-12">
    		<div class="page-header">
    			<h2 class="pull-left text-center">User Details</h2>
    		</div>
    	</div>	
    	</div>	
    	</div>
    </div>
    <?php

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
      //include_once 'includes/dbh.inc.php';
    require_once('includes/dbh.inc.php');
      //select all records from the table
      $sql="SELECT * FROM Users WHERE id=5;";
         //$sql="select * from users where id =5 or user name ="peter"+
      //$sql="select * from users where not username="peter";"
        //select limit offset 
       //select limit
      //select distinct username


      //like expression
      //$sql="select * from user where not username like "p%";";
      //$sql="select * from user where not username like "_e%";";second characters is e
      //$sql="select * from user where not username like "%a";";
      //$sql="select * from user where not username like "%ar%";";



      //not like expression
      //$sql="select * from user where not username not like "p%";";
      //$sql="select * from user where not username not like "_e%";";second characters is e
      //$sql="select * from user where not username not like "%a";";
      //$sql="select * from user where not username not like "%ar%";";





      $sql="select distinct username from users";
      if($result=$conn->query($sql)){
      if($result->num_rows>0){
      	echo "<table class='table table-bordered table-striped'>";
      	echo "<thead>";
      	   echo "<tr>";
      	      echo "<th>#</th>";
      	      echo "<th>name</th>";
      	     echo "<th>email<th>";
      	     echo "<th>country</th>"
      	   echo "</tr>";
      	echo "</thead>";
      	echo "<tbody>";
      		while($row=$result->fetch_assoc()){
      			echo "<tr>";
      			   echo "<td>".$row["id"]."</td>";
      			   echo "<td>".$row["username"]."</td>";
      			   echo  "<td>".$row["email"]."</td>";
      			   echo "<td>.".$row["country"]."</td>"
      			echo "</tr>";
      		}
      		echo "</tbody>";
      		echo "</table>";
      		  mysqli_free_result($result);
      	}else 
      	   echo "<p class='lead'><em>No records found</em></p>";
      	}
      	else
      		echo "Error: Could not able to execute $sql.".mysqli_error($conn);
      	mysqli_close($conn);
      


    ?>
</body>
</html>
