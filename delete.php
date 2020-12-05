<?php 
session_start();
include 'connect.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `product` WHERE `id` = $id";
    $result = $con->query($sql);
    if($result)
    {
        header("location: product.php");
    }else{
        echo "<h1>Có lỗi xảy ra Click vào <a href='product.php'>đây</a> để về trang Product</h1>";
    }

?>