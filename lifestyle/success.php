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
                <?php
                    $user_id = $_SESSION['user_id'];
                    $id = explode(" ",$_GET['id']);
                    //print_r($id);
                    for($counter=0;$counter<count($id);$counter++){
                        $update_query = "UPDATE users_items ui SET ui.status='Confirmed' WHERE ui.user_id = '$user_id' AND ui.item_id ='$id[$counter]'";
                        $update_result = mysqli_query($con,$update_query) or die(mysqli_error($con));
                        //echo $id[$counter]."<br>";
                    }
                ?>
		<div class="container container-modi">
			<div class="row row-style">
				<div class="col-xs-offset-2 col-xs-8 col-md-offset-3 col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h4>Order Confirmed!</h4>
						</div>
						<div class="panel-body">
							<p>Your order is confirmed. Thank you for shopping
								with us. ​<a href="products.php" class="text-info"><strong>Click here</strong> </a> to purchase any other item.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="push"></div>
		</div>
		

		<?php include 'includes/footer.php'; ?>
	</body>
</html>