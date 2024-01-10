<?php
include 'cofig.php';
$id_from_table=$_GET['idth'];
$deletequery="DELETE FROM form WHERE id=$id_from_table";
$query=mysqli_query($con,$deletequery);

    if ($query) {
        echo '<script>
                alert("data deleted");
              </script>';
    } else {
        echo '<script>
                alert("data not deleted");
              </script>';
    }

header('location:showdata.php')

?>