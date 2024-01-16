<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>showdata</title>
    <style>
        body {
            width: 100%;
            /* height: 98vh; */
            background: url("./image.jpg") center/cover no-repeat;
            overflow-x: hidden;
            /* overflow-y: hidden; */
            background-position: center 35%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            backdrop-filter: blur(50px);
            border-radius: 10px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            height: 400px;
            font-size:medium;
            margin-bottom: 20px;
        }
        
        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        .email_style{
            background-color: gray;
        }
        h1{
            margin-top: 50px;
            color:white;
            text-align: center;
            font-size: 50px;
        }
        .btn{
                 color: #999;
                 margin-top: 10px;
                 margin-bottom: 10px;
                width: 100%;
                padding: 18px 15px;
                background-color: #eaeaea; 
                border-radius: 10px;
                font-size: 20px;
                cursor: pointer;
    
}
        
a{
    width: 60%;
}
        @media only screen and (max-width: 768px) {
            body {
                background-position: center 50%;
            }
            
            table {
                font-size:medium;
                width: 50%;
                color: black;
            }
        }
    </style>
</head>

<body>
    <h1>List Of Candidates</h1>
    
        <?php
        include 'cofig.php';
        $data = $con->query("SELECT * FROM form");
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Password</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Gender</th>";
        echo "<th colspan='2'>Actions</th>";
        echo "<th>picture</th>";
        echo "</tr>";

        while ($row = $data->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td><span class='email_style'>" . $row["email"] . "</span></td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["phone_number"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>"; 
            echo "<td><a href='delete.php?idth=" . $row['id'] . "' style='color: white;'><i class='fas fa-x'></i></a></td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "' style='color: white;'><i class='fas fa-edit'></i></a></td>";
            echo '<td><img src="' . $row["picture"] . '" alt="Image" style="width:100px; height:100px;"></td>';


           
            
        }
        echo "</table>";
        
        ?>
                <a href="./index.php"><input type="button" value=" Insert Data" class="btn"></a>
        
    
</body>

</html>
