<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])) {
    header('location: login.php');
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
				<div class="col-xxs col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
					<table class="table table-hover table-bordered table-responsive text-center">
						
                        <?php 
                            $user_id = $_SESSION['user_id'];
                            $select_query = "SELECT p.id,p.name,p.price FROM users_items ui INNER JOIN items p ON p.id = ui.item_id WHERE ui.user_id='$user_id' AND ui.status='Added to cart'";
                            $select_query_result = mysqli_query($con,$select_query);
                            $num_rows = mysqli_num_rows($select_query_result);
                            if($num_rows==0) echo "<strong>Add items to the cart first!.</strong><br>";
                            else { 
                                $sum = 0;
                                $count = 1;
                                $id = array();
                            ?>
                                            <table class="table table-hover table-bordered table-responsive text-center">
                                                    <tbody>
							<tr>
								<th>Item Number</th>
								<th>Item Name</th>
								<th>Price</th>
								<th></th>
							</tr>
                            <?php   while($row = mysqli_fetch_array($select_query_result)) { ?>
                                                        <tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['price']; ?></td>
                                                                <td><?php echo"<a href='cart-remove.php?id={$row['id']}' class='btn btn-danger'>Remove</a>";?></td>
							</tr>
                            <?php  $count = $count+1; 
                                   $sum = $sum+$row['price'];
                                   array_push($id,$row['id']);
                            }?>
							
							<tr>
								<td></td>
								<td>Total</td>
                                                                <td><?php echo $sum;?></td>
                                                                <td><?php $list=implode(" ",$id); echo"<a href='success.php?id=$list' class='btn btn-primary'>Confirm Order</a>";}?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
                    <div class="push"></div>
		</div>
		
                <?php include 'includes/footer.php'; ?>
		
	</body>
</html>