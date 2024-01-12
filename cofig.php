<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hello_world";

$con=new mysqli ($servername,$username,$password,$dbname);

if($con->connect_error){
    echo '<script>
    alert("no connection");
  </script>'
  ;
}
else{
    echo '<script>
    // alert("connection sucessfull");
  </script>';
 
}





?>