<?php
include 'cofig.php';

if(isset($_POST['register'])){
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $email =$_POST['email'];
    $pass=$_POST['password'];
    $phonenum=$_POST['phone'];
    $gender=$_POST['gender'];
    $ui = './pictures/' . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $ui)) {

echo"image uploaded";
    $fname=$_POST['first'];
$myquery="INSERT INTO form(first_name,last_name,email,password,phone_number,gender,picture) VALUES ('$fname','$lname','$email','$pass','$phonenum','$gender','$ui')";
echo '<script>
            alert("image upload sucessfully");
          </script>';

$result=mysqli_query($con,$myquery);
if ($result) {
    echo '<script>
            alert("data added");
          </script>';
} else {
    echo '<script>
            alert("data not added");
          </script>';
}

}
else{
echo"error uploading file";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>insert n fetch</title>
    
    
</head>
<style>
.main {
    width: 100%;
    height: 100vh;
    background: url("./image.jpg") center/cover no-repeat;
    overflow-x: hidden;
    overflow-y: hidden;
    background-position: center 35%; /* Move the background image to the center horizontally and to the top vertically */
    display: flex;
    justify-content: center;
    align-items:center;
}
form{
    border: 2px solid rgba(255, 255, 255, 0.1);
    background: rgba(255, 255, 255, 0.1);
    
  min-width: 900px;
   /* min-height: 600px; */
    backdrop-filter: blur(50px); 
    border-radius: 10px; 
    text-align:center;
    padding-bottom: 30px;
}
h1{
    margin-top: 30px;
    color: white;
}

.div1{
    /* border:2px solid black; */
    display: flex;
    justify-content: space-evenly;
    align-items:center;

}
.input_field,#name_div,option{
    width: 280px;
    background-color: #eaeaea;
    margin: 15px 0px;
    border-radius: 3px;
    display: flex;
    align-items: center;
    max-height: 65px;
    padding: 0px 10px;
    overflow: hidden;
    transition: all ease-in-out 0.5s;
    border-radius: 10px;

}
select{
    border: none;
    outline: none;
}
input {
    width: 100%;
    background-color: transparent;
    border: 0px;
    outline: 0px;
    padding: 18px 15px;
}

.input_field i {
    color: #999;
}
.btn{
    color: #999;
    margin-top: 30px;
    width: 80%;
    background-color: #eaeaea; 
    border-radius: 10px;
    font-size: 20px;
                    cursor: pointer;

}


@media only screen and (max-width: 768px) {
            body {
                background-position: center 50%;
            }
            
            form {
                font-size:medium;
                width: 50%;
                color: black;
            }
            .input_field {
    width: 200px;
}

        }


</style>

<body>
    <div class="main">
        <form action="index.php" method="POST" enctype= "multipart/form-data" >
            <h1>REGISTRATION FORM</h1>

            <div class="div1">
            <div class="input_field" id="name_div">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="please enter your  first name" name="first">
                    </div>
                    <div class="input_field" id="name_div">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="please enter your last name" name="last">
                    </div>

            
        </div>
        <div class="div1">
            <div class="input_field" id="name_div">
            <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="please enter your email" name="email">
                    </div>
                    <div class="input_field" id="name_div">
                    <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="please enter your password" name="password">
                    </div>

            
        </div>
        <div class="div1">
            <div class="input_field" id="name_div">
            <i class="fa-solid fa-phone"></i>
                        <input type="number" placeholder="please enter your phone number" name="phone">
                    </div>
                    <div class="input_field" id="name_div">
                        <i class="fa-solid fa-user"></i>
                        <select name="gender" id="name_div">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    
                    
                </div>
                <input type="file" name="image" class="btn">
                <input type="submit" value="submit"name="register" class="btn">
                <a href="./showdata.php"><input type="button" value="Show Data"name="showdata" class="btn"></a>
        </form>
    </div>

</body>
</html>