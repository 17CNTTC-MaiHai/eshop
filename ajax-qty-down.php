<?php 
session_start();

if(isset($_POST['id'])){
    $id = $_POST['id'];

    if(!empty($_SESSION['product'])){
       
        $_SESSION['product'][$id]['qty'] -= 1;
        
        echo "<pre>";
        var_dump($_SESSION['product']);
    }
}

?>