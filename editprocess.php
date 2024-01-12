<?php
include 'cofig.php';


if(isset($_POST['register'])){
    $id=$_GET['id'];
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $email =$_POST['email'];
    $pass=$_POST['password'];
    $phonenum=$_POST['phone'];
    $gender=$_POST['gender'];



   $q2="UPDATE form SET first_name='$fname',last_name='$lname',email='$email',password='$pass',phone_number='$phonenum',gender='$gender' WHERE id=$id";
   $result=$con->query($q2);
   if($result){
    echo '<script>
    alert("data updated");
  </script>';
}
   
   else{
    echo '<script>
    alert("data not updated");
  </script>';
}
   }
  

header('location:showdata.php')

?>