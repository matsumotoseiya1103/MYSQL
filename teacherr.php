 <?php
          require_once('includes/dbh.inc.php');

          $sql="INSERT INTO teacherr(username,student_id)VALUES ('peter',2);";
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
        echo "Error".$conn->error;

 ?>

