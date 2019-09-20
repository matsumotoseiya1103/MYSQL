<!DOCTYPE html>
<html>
<head>
	<title>homework_2</title>
</head>
<body>
	
<?php
  class Abcde{
  	public $a,$b;
    public function __construct($a,$b){
    	$this->a=$a;
    	$this->b=$b;
    }
    public function add(){
    	echo $this->a+$this->b;
    }
    public function subtract(){
    	echo $this->a-$this->b;
    }

  }
     $obj=new Abcde(12,6);
     echo $obj->add();
     echo "<br>";
     echo $obj->subtract();
     echo "<br>";;
     
     $z=[11, -2, 4, 35, 0, 8, -9];
     asort($z);
    echo "<hr>";

?> 

<?php
  class user_message{
  	public $message='Hello All, I am ';
  	public function introduce($name){
  		return $this->message.$name;
  	}
  }
  $mymessage=New user_message();
  echo $mymessage->introduce('Scott');
  echo "<hr>";


$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo   $interval->y.$interval->m.$interval->d;
echo "<br>";
for($x=1;$x<=10;$x++){
	if($x<10){
      echo "$x-";
	}else{
		echo "$x";
	}
}

$sum=0;
for($x=1; $x<=30; $x++){
	$sum+=$x;
}echo $sum;
echo "<hr>";

for($x=1;$x<=5;$x++){
  for($y=1;$y<=$x;$y++){
  	echo "*";
  }
  echo "<br>";
}
$n=5;
for($i=1; $i<=$n; $i++)
{for($j=1; $j<=$i; $j++)
{echo ' * ';
}
echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
?>
<h1>Please input your name:</h1>
<form action="homework1_2.php" method="post">
	<input type="text" name="form">
    <input type="submit" name="submit" value="submit name">
</form>
hello
<?php
  $a=$_POST["form"];
  echo $a;

?>
    
</body>
</html>