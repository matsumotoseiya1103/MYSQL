<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
    


</head>
<body>
    <h1>MY SQL- JOINs</h1>
    <?php 
       require_once('includes/dbh.inc.php');

       //different type of joins 
       //1.INner join
       //2,lef outer jon
       //3,right outer join
       //4.full outer join

     /*  $sql="CREATE TABLE IF NOT EXISTS  customer(
       custermerID INT(4) Unsigned AUTO_INCREMENT PRIMARY KEY,
       CustomerName varchar(30)  NOT NULL,
       ContactName varchar(30) unique,
       Country varchar(50)
       );";



      if($conn->query($sql)==TRUE)
      	echo "Table customers created successfully<br>";
      else
      	echo "Error creating table".$conn->error;

         $sql="INSERT INTO customer (CustomerName,ContactName,Country) VALUES ('John','JOhnDoe','India');";
          $sql.="INSERT INTO customer (CustomerName,ContactName,Country) VALUES ('Michel','Gate','japan');";
           $sql.="INSERT INTO customer (CustomerName,ContactName,Country) VALUES ('sridhar','murali','russia');";
            $sql.="INSERT INTO customer (CustomerName,ContactName,Country) VALUES ('bill','clinton','italy');";*/
           
        

       /* $sql="CREATE TABLE IF NOT EXISTS Orders(
		       OrderID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		       CustomerID INT(4)  NOT NULL,
		       Orderdate TIMESTAMP
		       );";


            if($conn->query($sql)==TRUE)
      			echo "Table Orders created successfully<br>";
      		else
      			echo "Error creating table".$conn->error;

             $sql="INSERT INTO Orders (OrderID,CustomerID) VALUES (1,5);";
          $sql.="INSERT INTO Orders (OrderID,CustomerID) VALUES (2,3);";
           $sql.="INSERT INTO Orders (OrderID,CustomerID) VALUES (3,6);";
            $sql.="INSERT INTO Orders (OrderID,CustomerID) VALUES (4,4);";



    if($conn->multi_query($sql)===true)
    	echo "New record created successfully";
    else
    	echo "error :".$sql."<br>".$conn->error;*/


    //INNER JOIN
    echo "<h2>inner join</h2>";
    $sql="SELECT Orders.OrderID, Customer.CustermerID,Customer.CustomerName,Orders.Orderdate  
        FROM Orders 
        INNER JOIN customer ON Orders.CustomerID=Customer.CustermerID";


    if($result=mysqli_query($conn,$sql)){
    	if(mysqli_num_rows($result)>0){
    		echo "<div class='container'>";
    		echo "<table class='table table-bordered table-striped'>";
    		    echo "<thead>";
    		     echo "<tr>";
    		       echo "<th>OrderID</th>";
    		       echo "<th>CustomerID</th>";
    		       echo "<th>CustomerName</th>";
    		       echo "<th>OrderDate</th>";
    		     echo "</tr>";
    		    echo "<thead>";
    		    echo "<tbody>";
                while($row=mysqli_fetch_array($result)){
                	echo "<tr>";
                	  echo "<td>".$row['OrderID']."</td>";
                	  echo "<td>".$row['CustermerID']."</td>";
                	  echo "<td>".$row['CustomerName']."</td>";
                	  echo "<td>".$row['Orderdate']."</td>";
                	echo "</tr>";
                }
              echo "</tbody>";
              echo "</table>";
              echo "</div>";
              mysqli_free_result($result);
            }else
            echo "<p class='lead'><em>No record </em></p>";
        }else
           echo "error:Could not able to execute $sql".mysqli_error($conn);


    ?>
</body>
</html>