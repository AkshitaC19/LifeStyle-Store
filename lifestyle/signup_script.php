<?php
require 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_contact = "/^[0-9]{10}$/";
$email_error = '';
$password_error = '';
$contact_error = '';
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=Enter a valid email ID');
}
if (strlen($password) < 6) {
  header('location: signup.php?password_error= Password is too short');
}
if (!preg_match($regex_contact, $contact)) {
  header('location: signup.php?contact_error= Enter a valid phone no');
}
$password = mysqli_real_escape_string($con,md5($password));
//echo $password;
$select_query ="SELECT * FROM users u WHERE u.email = '$email'";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
$num_rows = mysqli_num_rows($select_query_result);
if(num_rows>0)
{
    header('location: signup.php?email_error= User already exists');
}
else {
    $insert_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address')";
    $insert_query_result = mysqli_query($con, $insert_query);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
}


