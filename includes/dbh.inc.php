
<?php
    define("SERVERNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","db1");
        //creat a connection to the database
        $conn=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
        //test the connection
        if(!$conn){
        	die("Connection failed".mysqli_connect_error());
        }else
          echo "Connected Successfully<br>";

?>