<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>gropby orderby</h1>
    <?php
         require_once('includes/dbh.inc.php');
        /* $sql="alter table users add country varchar(15) not null after email";
         if($conn->query($sql)==true)
         	echo "table users altered successfully";
         else 
         	echo "error".$conn->error;


         //update in user table 
         $sql="update users set country ='india' where id=1;";
         $sql.="update users set country ='japan' where id=2;";
         $sql.="update users set country ='europe' where id=3;";
         $sql.="update users set country ='india' where id=4;";


         if($conn->multi_query($sql)===true)
         	echo "table users updated sucessfully";
         else
         	echo "error".$conn->error;*/

        not able to execute $sql".mysqli_error($conn);
                mysqli_close($conn);
 $sql="select * from users where country in ('india','japan');";
         if($result=$conn->query($sql)){
             if($result->num_rows>0){
             	while($row=$result->fetch_assoc()){
         		echo " ".$row["id"]."";
         	    echo " ".$row["username"]."";
         		echo " ".$row["password"]."";
         	    echo " ".$row["email"]."";
         	    echo " ".$row["country"]."<br>";
           }
      
         	}else
               echo "no records found";
            }
            else
            	echo "Error: could 


    ?>
</body>
</html>