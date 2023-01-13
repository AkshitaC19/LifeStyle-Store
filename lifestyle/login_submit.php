<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con,md5($_POST['password']));
//echo $email . " " . $password;
$submit_query = "SELECT * FROM users u WHERE u.email='$email' AND u.password='$password'";
$submit_query_result = mysqli_query($con , $submit_query) or die(mysqli_error($con));
$num_rows = mysqli_num_rows($submit_query_result);
if(!$num_rows)
{
    header("location: login.php?login_error=Wrong email ID or password");
}
else {
    $row = mysqli_fetch_array($submit_query_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    //echo $_SESSION['email'];
    header('location: products.php');
}

?>
