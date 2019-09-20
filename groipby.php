<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
</head>
<body>
     <h1>MY SQL</h1>
     <?php
       require_once('includes/dbh.inc.php');


       //$sql="select count(id) as total, country from users group by country;";
          $sql="select count(id) as total, country from users 
          group by country
          having count(id)>1;";


          $sql="select count(id) as total, country from users 
          group by country
          order by count(id) asc;";//asc


          $sql="select count(id) as total, country from users 
          group by country
          having count(id)>1
          order by count(id) desc;";


    if($result=mysqli_query($conn,$sql)){
      if(mysqli_num_rows($result)>0){
       	echo "<table class='table table-bordered table-striped'>";
      	echo "<thead>";
      	   echo "<tr>";
      	      echo "<th>total</th>";
      	     echo "<th>country</th>";
      	   echo "</tr>";
      	echo "</thead>";
      	echo "<tbody>";
      		while($row=$result->fetch_assoc()){
      			echo "<tr>";
      			   echo "<td>".$row["total"]."</td>";
      			   echo "<td>.".$row["country"]."</td>";
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