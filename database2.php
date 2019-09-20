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
      //include_once 'includes/dbh.inc.php';
    require_once('includes/dbh.inc.php');
      //select all records from the table
      $sql="SELECT * FROM Users";
      if($result=$conn->query($sql)){
      if($result->num_rows>0){
      	echo "<table class='table table-bordered table-striped'>";
      	echo "<thead>";
      	   echo "<tr>";
      	      echo "<th>#</th>";
      	      echo "<th>name</th>";
      	      echo "<th>email<th>";
      	   echo "</tr>";
      	echo "</thead>";
      	echo "<tbody>";
      		while($row=$result->fetch_assoc()){
      			echo "<tr>";
      			    echo "<td>".$row["id"]."</td>";
      			    echo "<td>".$row["username"]."</td>";
      			    echo  "<td>".$row["email"]."</td>";
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