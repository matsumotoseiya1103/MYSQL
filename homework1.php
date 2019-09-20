<!DOCTYPE html>
<html>
<head>
	<title>PHP BASIC</title>
</head>
<body>
    <?php
      $var='PHP Tutorial';
      echo "<h3>$var</h3>";
      $d='A00';
      echo $d++;
      echo $d++;
      echo $d++;
      echo $d++;
      echo $d++;
      echo "<br>";
      echo sqrt(16);
      echo "<br>";
      echo strlen('PHP Exercise');
      echo "<br>";
      $x=5;
      if($x%2==1){
      	echo "odd";
      	echo "<br>";
      }
      $y=12;
      if($y>30){
      	echo "$ is greater than 30";
      }elseif ($y>20) {
      	echo "$y is greater than 20";
      }elseif($y>10){
      	echo "$y is greater than 10";
      }else{
      	echo "rubbish";
      }
      echo "<br>";


      $z=$x;
      $x=$y;
      $y=$z;
      echo $x;
      echo "<br>";
      echo $y;
      echo "<br>";
      echo "<hr>";
      echo "I can not understrand";
      $number=[2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
      echo "<hr>";


     $e=4;
     if($e==2*2){
     	echo "4 is power of 2";
     }
     echo "<br>";
     $f=20;
     echo rand(1,20);
     echo "<br>";

      $g=['zero'=>0,'three'=>3,'five'=>5];
        foreach($g as $number=>$g){
        	echo $g;
        }

    echo str_replace("PHP","Python","PHP is popular than Python");
    echo "<br>";

    echo str_replace("Python","PHP","Python is popular than php");
    echo "<br>";



    $number=[4=>"White",6=>"Green",11=>"Red"];      
     echo $number[4]."<br>";
     foreach ($number as $key => $value){
     	    echo $key.$value;
        	echo "<br>";
     }
     $j=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
       echo ksort($j);


       echo "The capital of Netherlands is ".$j['Netherlands'];
       echo "The capital of Greece is ".$j['Greece'];
       echo "The capital of Germany is ".$j['Germany'];


      


     


    ?>
</body>
</html>