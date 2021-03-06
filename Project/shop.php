<?php
$conn = new mysqli("localhost", "marts", "Tin2martin", "martsdb1");
$opt = "all";
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Milma Shoppee</title>
<link rel="stylesheet" type="text/css" href="milma.css" />
</head>

<body>
	<div id="headerbar">
		<div>
			<h1>Welcome to Milma shoppee</h1>
		</div>
		<?php

$result = $conn->query("SELECT * FROM p_category;");
foreach ($result as $row) {

    ?><div class="cats">
<form action="shop.php" method="POST">
			<button class="catbtns" type="submit" name="opt" value="<?php  echo $row['name']?>"
				><?php echo $row['name']?></button>

</form>


		</div><?php }?>
		
		
	<div class="cats">
<form action="shop.php" method="POST">
			<button class="catbtns" type="submit" name="opt" value="<?php echo "all"?>"
				>All Products</button>

</form>


		</div>

	</div>
	<div id="header2"></div>
	<div id="shopitems">
		
	<?php
	$opt =$_POST["opt"];
	
	if ($opt != "all"){
	    $result = $conn->query("SELECT * FROM products where category= '$opt';");}
	    else {$result = $conn->query("SELECT * FROM products;");}

foreach ($result as $row) {

    ?><div class="items">
			<div class="item1">
				<img class="imgitems"
					alt="here's a picture of <?php echo $row['item']?>"
					src="<?php  echo $row['img_path']?>" />
			</div>
			<div class="item2">
	<?php echo $row['item']?>
	</div>
			<div class="item3"> Price per item: 
	<?php  echo $row['price']?>
	</div>

		</div><?php }?>
	</div>



	<!-- <script src="milma.js" type="text/javascript"></script>
	<script src="database.js" type="text/javascript"></script> -->

</body>

</html>