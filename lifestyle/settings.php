<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('location: index.php');
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
                                <?php if(isset($_GET['success_message'])) {
                                    echo"<div class='panel panel-success'>
						<div class='panel-heading'>
							<h4>Success!</h4>
						</div>
						<div class='panel-body'>
							<p>".$_GET['success_message']."</p>
						</div></div>"; 
                                    
                                }?>
                                
                                <?php if(isset($_GET['password_error'])) {
                                    echo"<div class='panel panel-warning'>
						<div class='panel-heading'>
							<h4>Error!</h4>
						</div>
						<div class='panel-body'>
							<p>".$_GET['password_error']."</p>
						</div></div>"; 
                                    
                                }?>
                                    
                                <?php if(isset($_GET['passwordmatch_error'])) {
                                    echo"<div class='panel panel-warning'>
						<div class='panel-heading'>
							<h4>Error!</h4>
						</div>
						<div class='panel-body'>
							<p>".$_GET['passwordmatch_error']."</p>
						</div></div>"; 
                                    
                                }?>
                                    <form action="settings_script.php" method="post">
					<h2>Change Password</h2>
					<div class="form-group">
                                            <input type="password" name="oldpassword" placeholder="Old Password" class="form-control" required="True">
					</div>
					<div class="form-group">
                                            <input type="password" name="newpassword" placeholder="New Password" class="form-control" pattern=".{6,}" required="True">
					</div>
					<div class="form-group">
                                            <input type="password" name="renewpassword" placeholder="Retype New Password" class="form-control" pattern=".{6,}" required="True">
					</div>
					<div class="form-group">
						<input type="submit" value="Change Password" class="btn btn-primary">
					</div>
                                    </form>
				</div>
			</div>
                    <div class="push"></div>
		</div>
		

		<?php include 'includes/footer.php'; ?>
	</body>
</html>