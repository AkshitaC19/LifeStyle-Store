<?php

    include 'includes/common.php';
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $add_to_cart_query = "INSERT INTO users_items (user_id,item_id,status) VALUES ('$user_id','$item_id','Added to cart')";
    $query_result = mysqli_query($con , $add_to_cart_query) or die(mysqli_error($con));
    header('location: products.php');
    
?>