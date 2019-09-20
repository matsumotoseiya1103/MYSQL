<!DOCTYPE html>
<html>
<head>
	<title>join</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
</head>
<body>
    <h1 class="text-center">left outer join</h1>
    <?php
       require_once('includes/dbh.inc.php');

       $sql="SELECT customer.CustomerName,Orders.OrderID
       FROM customer
       LEFT JOIN Orders ON customer.CustomerID=Orders.CustomerID;";


       $sql="SELECT customer.CustomerName,Orders.OrderID,Orders.OrderDate
       FROM customer
       RIGHT JOIN Orders ON customer.CustomerID=Orders.CustomerID;";


       if($result=mysqli_query($conn,$sql)){
       	if(mysqli_num_rows($result)>0){
       	echo "<table class='table table-bordered'>";
      	echo "<thead>";
      	   echo "<tr>";
      	      echo "<th>CustomerName</th>";
      	      echo "<th>OrderID</th>";
      	   echo "</tr>";
      	echo "</thead>";
      	echo "<tbody>";
      		while($row=mysqli_fetch_array($result)){
      			echo "<tr>";
      			    echo "<td>".$row["CustomerName"]."</td>";
      			    echo "<td>".$row["OrderID"]."</td>";
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
    <h1 class="text-center">right join</h1>
    <?php

     require_once('includes/dbh.inc.php');


       $sql="SELECT customer.CustomerName,Orders.OrderID,Orders.OrderDate
       FROM customer
       RIGHT JOIN Orders ON customer.CustomerID=Orders.CustomerID;";


       if($result=mysqli_query($conn,$sql)){
       	if(mysqli_num_rows($result)>0){
       	echo "<table class='table table-bordered'>";
      	echo "<thead>";
      	   echo "<tr>";
      	      echo "<th>CustomerName</th>";
      	      echo "<th>OrderID</th>";
      	      echo "<th>OrderDate</th>";
      	   echo "</tr>";
      	echo "</thead>";
      	echo "<tbody>";
      		while($row=mysqli_fetch_array($result)){
      			echo "<tr>";
      			    echo "<td>".$row["CustomerName"]."</td>";
      			    echo "<td>".$row["OrderID"]."</td>";
      			    echo "<td>".$row["OrderDate"]."</td>";
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