<?php 
session_start();

if(isset($_POST['id'])){
    $id = $_POST['id'];
    if(!empty($_SESSION['product'])){
        unset($_SESSION['product'][$id]);
       
        echo "<pre>";
        var_dump($_SESSION['product']);
    }
}

?>

