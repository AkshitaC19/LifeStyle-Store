<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) 
{ 
    header('location: products.php'); 
}
?>
<!DOCTYPE html>
<html>
  <head>
		<title>Lifestyle Store</title>
		<meta charset="utf-8">
		<meta name='viewport' content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
            <?php
                include 'includes/header.php';
            ?>
            <div id="banner_image">
		<div id="container">
                    <div id="banner_content">
			<h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
		</div>
                <div class="push"></div>
            </div>
            <?php
                include 'includes/footer.php';
            ?>
	</body>
</html>