<?php

    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('index.php');
    }
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $remove_query = "DELETE FROM users_items ui WHERE ui.item_id='$id'";
    $remove_query_result = mysqli_query($con,$remove_query) or die(mysqli_error($con));
    header('location: cart.php');

