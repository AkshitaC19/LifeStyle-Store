<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('location: index.php');
    }
    $user_id = $_SESSION['user_id'];
    $oldpassword = md5($_POST['oldpassword']);
    $newpassword = md5($_POST['newpassword']);
    $renewpassword = md5($_POST['renewpassword']);
    
    $select_password = "SELECT u.password FROM users u WHERE u.id = '$user_id'";
    $query_result = mysqli_query($con,$select_password) or die(mysqli_error($con));
    $row = mysqli_fetch_array($query_result);
    if($row['password']!=$oldpassword)
    {
        header("location: settings.php?password_error= Enter correct password");
    }
    else {
        if($newpassword!=$renewpassword)
        {
            header('location: settings.php?passwordmatch_error= Passwords do not match');
        }
        else {
            $password_change_query = "UPDATE users u SET u.password='$newpassword' WHERE u.id='$user_id'";
            $query_result_2 = mysqli_query($con,$password_change_query) or die(mysqli_error($con));
            header('location: settings.php?success_message= Your password has been updated successfully');
        }
    }
    