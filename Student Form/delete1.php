<?php
include "db_connect.php";
if (isset($_GET["deleteid"])){
    $id=$_GET["deleteid"];

    $sql="DELETE FROM  `formtable` WHERE id = $id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        
        header("Location: display.php");
    } else {
        echo "faild";
    }
}
// header("location:/CRUD12/display.php");
// exit;


?>