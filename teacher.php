<!DOCTYPE html>
<html>
<head>
	<title>student and php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
</head>
<body>
	
	<?php
	require_once('includes/dbh.inc.php');
    $sql="CREATE TABLE IF NOT EXISTS studentt(
                id INT(2) unsigned auto_increment PRIMARY KEY,
                username VARCHAR(30) NOT NULL
            )";
         if($conn->query($sql)==TRUE)
               echo "Table created successfully";
           else
            echo "Error creating table:".$conn->error."<br>";
   
    $sql="CREATE TABLE IF NOT EXISTS teacherr(
                id INT(2) unsigned auto_increment PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                student_name int(2)
          )";
         if($conn->query($sql)==TRUE)
               echo "Table created successfully";
           else
            echo "Error creating table:".$conn->error;
        echo "<br>";


   
   /* $sql="INSERT INTO studentt(username)VALUES ('peter');";
    $sql.="INSERT INTO studentt(username)VALUES ('John');";
    $sql.="INSERT INTO studentt(username)VALUES ('Mary');";
    $sql.="INSERT INTO studentt(username)VALUES ('julie');";
    $sql.="INSERT INTO studentt(username)VALUES ('Kishore');";

           if($conn->multi_query($sql)==TRUE)
             echo "Records Inserted Successfully<br>";
           else
             echo "Error:".$conn->error;*/


        /*$sql="DELETE FROM teacherr where id=3";
       if($conn->query($sql) == true)
        echo "Record deleted successfully";
       else
        echo "Error".$conn->error;*/

       /*$sql="ALTER TABLE teacherr ADD PHONE VARCHAR(15) NOT NULL AFTER username";
       //$sql="ALTER TABLE Users DROP COLUMN PHONE";
       if($conn->query($sql)==TRUE)
       	echo "Table Altered successfully";
       else
       	 echo "Error".$conn->error;*/
       
          /*$sql="INSERT INTO teacherr(username,student_id)VALUES ('peter',2);";
          $sql.="INSERT INTO teacherr(username,student_id)VALUES ('John',4);";
          $sql.="INSERT INTO teacherr(username,student_id)VALUES ('Mary',1);";
          $sql.="INSERT INTO teacherr(username,student_id)VALUES ('julie',2);";
          $sql.="INSERT INTO teacherr(username,student_id)VALUES ('Kishore',3);";

           if($conn->multi_query($sql)==TRUE)
             echo "Records Inserted Successfully<br>";
           else
             echo "Error:".$conn->error;

           $sql="DELETE FROM teacherr where id=3";
       if($conn->query($sql)==true)
        echo "Record deleted successfully";
       else
        echo "Error".$conn->error;*/

      $sql="SELECT studentt.username,teacherr.username
       FROM studentt
       LEFT JOIN teacherr ON studentt.id=teacherr.student_id;";
       if($result=mysqli_query($conn,$sql)){
        if(mysqli_num_rows($result)>0){
        echo "<table class='table table-bordered'>";
        echo "<thead>";
           echo "<tr>";
              echo "<th>studentname</th>";
              echo "<th>teachername</th>";
           echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>".$row["username"]."</td>";
                    echo "<td>".$row["username"]."</td>";
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


 
        ?>
       


	
    
</body>
</html>