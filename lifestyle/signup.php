<?php
    require 'includes/common.php';
    if(isset($_SESSION['email']))
    {
        header('location : products.php');
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


		<?php include 'includes/header.php'; ?>

		<div class="container container-modi">
			<div class="row row-style">
				<div class="col-xs-offset-2 col-xs-8 col-md-offset-3 col-md-6">
                                    <form method="post" action="signup_script.php">
					<h2><strong>SIGN UP</strong></h2>
					<div class="form-group">
                                            
                                            <input type="text" name="name" placeholder="Name" class="form-control" required="True">
					</div>
					<div class="form-group">
                                            <?php if(isset($_GET['email_error'])) { ?><label for="email"><span class="warning" style="background-color: red;color: yellowgreen"><?php echo $_GET['email_error']; ?></span></label><?php } ?>
                                            <input type="text" name="email" placeholder="Email" class="form-control" required="True" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					</div>
					<div class="form-group">
                                            <?php if(isset($_GET['password_error'])) { ?><label for="password"><span class="warning" style="background-color: red;color: yellowgreen"><?php echo $_GET['password_error']; ?></span></label><?php } ?>
                                            <input type="password" name="password" placeholder="Password" class="form-control" required="True" pattern=".{6,}">
					</div>
					<div class="form-group">
                                            <?php if(isset($_GET['contact_error'])) { ?><label for="contact"><span class="warning" style="background-color: red;color: yellowgreen"><?php echo $_GET['contact_error']; ?></span></label><?php } ?>
                                            <input type="tel" name="contact" placeholder="Mobile Number" class="form-control" required="True" pattern="[0-9]{10}">
					</div>
					<div class="form-group">
						<input type="text" name="city" placeholder="City" class="form-control" required="True">
					</div>
					<div class="form-group">
						<input type="text" name="address" placeholder="Address" class="form-control" required="True">
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-primary">
					</div>
                                    </form>
				</div>
			</div>
                    <div class="push"></div>
		</div>
		

		<?php include 'includes/footer.php'; ?> 
	</body>
</html>
