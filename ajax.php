<?php 
session_start();
include 'connect.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "SELECT * FROM `product` WHERE `id` = $id";
    $result = $con->query($sql);

    if($result->num_rows > 0){
        $product = [];
        while($row = $result->fetch_assoc()){
            $product[] = $row; 
        }
        $product[0]['qty'] = 1 ;
    }

    if(!empty($_SESSION['product'])){
        if(isset($_SESSION['product'][$id])){
            $_SESSION['product'][$id]['qty'] += 1;
        }else {
            $_SESSION['product'][$id] = $product[0];
        }
    }else {
        $_SESSION['product'][$id] = $product[0];
    }
    var_dump($_SESSION['product']);
    
}

    								
?>
