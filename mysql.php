<!DOCTYPE html>
<html>
<head>
	<title>mysql</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>



</head>
<body>
    <h2>mysql function </h2>
    <?php
      require_once('includes/dbh.inc.php');
      $sql="create table if not exists products(
            product_id int(2) unsigned auto_increment PRIMARY KEY,
            product_name varchar(30) not null,
            price varchar(10) not null,
            grade varchar(3),
            reg_date timestamp )";
  if($conn->query($sql)==true)
  	echo "table created successfully<br>";
  else
  	echo "error<br>:".$conn->error;


  $sql="insert into products (product_name, price,grade) values ('apple','200','a');";
  $sql.="insert into products (product_name, price,grade) values ('tomoto','300','b');";
  $sql.="insert into products (product_name, price,grade) values ('grapes','400','c');";
  $sql.="insert into products (product_name, price,grade) values ('almond','500','d');";


if($conn->multi_query($sql)==true)
  	echo "recode inserted  successfully<br>";
  else
  	echo "error<br>:".$conn->error;
//count() functiom
$sql="SELECT COUNT(product_name) as No_of_products FROM products;";
//avg()
$sql="SELECT  AVG(price)  as AVERAGE FROM Products;";
//avg()
$sql="SELECT  MIN(price)  as MIN FROM Products;";
$sql="SELECT  MAX(price)  as MAX FROM Products;";
$sql="SELECT  SUM(price)  as total price FROM Products;";
$sql="SELECT  UCASE(product_name)  as Products, price FROM Products;";
$sql="SELECT  LCASE(product_name)  as products, price FROM Products;";


 








    ?>
</body>
</html>