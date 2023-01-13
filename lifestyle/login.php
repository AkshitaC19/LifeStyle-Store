<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
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
		<div class="container container-modi">
			<div class="row row-style">
				<div class="col-xs-offset-2 col-xs-8 col-md-offset-3 col-md-6">
                                    <?php if(!isset($_GET['login_error'])) { ?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4><strong>LOGIN</strong></h4>
						</div>
                                    <?php } else { ?>
                                        <div class="panel panel-warning">
						<div class="panel-heading">
							<h5><strong><?php echo $_GET['login_error']."!"; ?></strong></h5>
						</div>
                                    <?php } ?>
                                            
						<div class="panel-body panel-body-style">
							<p class="text-warning">
								<em>Login to make a purchase</em>
							</p>
                                                        <form action="login_submit.php" method="post">
                                                            <div class="form-group">
                                                                <input type="email" name="email" placeholder="Email" class="form-control" required="True" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" placeholder="Password" class="form-control" required="True" pattern=".{6,}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-primary" value="Login">
                                                            </div>
							</form>

						</div>
						<div class="panel-footer panel-footer-style">
							Don't have an account? <a href="signup.php" class="text-info"><strong>Register</strong></a>
						</div>
					</div>
				</div>
			</div>
                    <div class="push"></div>
		</div>
		

		<?php                
                    include 'includes/footer.php';
                ?>
	</body>
</html>