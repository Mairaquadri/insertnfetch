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
            height: 98vh;
            background: url("./image.jpg") center/cover no-repeat;
            overflow-x: hidden;
            overflow-y: hidden;
            background-position: center 35%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 95%;
            backdrop-filter: blur(50px);
            border-radius: 10px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            height: 650px;
            font-size:larger;
        }
        
        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        .email_style{
            background-color: gray
            ;
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
    <p>
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
            // echo "<td><a href='delete.php?idth= echo '<td>' . $row['id'] . '</td>';
            // '><i class='fas fa-x'></i></a></td>";
            echo "<td ><a href='delete.php?idth=" . $row['id'] . "'><i class='fas fa-x'></i></a></td>";
            echo "<td ><a href='edit.php?id=" . $row['id'] . "'><i class='fas fa-edit'></i></a></td>";

            // echo "<td><i class='fas fa-edit' ></i></td>";

           
            
        }
        echo "</table>";
        ?>
    </p>
</body>

</html>
