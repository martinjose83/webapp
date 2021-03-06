<?php
$conn = new mysqli("localhost", "marts", "Tin2martin", "martsdb1");
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Milma Shoppee</title>
<link rel="stylesheet" type="text/css" href="milma.css" />
</head>

<body>
	<div>
		<div id="headerbar">
			<div id="menu1">
				<div id="shopnow"></div>
				<div id="shopnow"></div>

			</div>
			<div>
				<h1>Add a new Item to shoppee webpage</h1>
			</div>
			<div id="logbtns">

				<div class="logout logs">
					<button id="logoutbtn">Logout</button>
				</div>

			</div>
		</div>
	</div>
	<div>
		<h1>
			<br>
		</h1>
	</div>

	</div>


	<!-- 	<form action=".php" method="post"> -->

	<!-- </form> -->

	<!-- <div id="rowdummy">
		
	</div> -->
	<div id="additem">
		<form action="uploadimg.php" method="post" enctype="multipart/form-data">

		<table id="additemtable">
	
			<tr>
				<td><label for="pname"> Enter Product Name: </label></td>
				<td><input id="pname" type="text" name="pname"
					placeholder="product name"></td>
			</tr>


			<tr>
				<td><label for="pid"> Enter Product Id: </label></td>
				<td><input id="pid" type="number" name="pid"  placeholder="product Id"></td>
			</tr>


			<tr>
				<td><label for="qty"> Available Quantity: </label></td>
				<td><input id="qty" type="number" name="qty" placeholder="Available Quantity"></td>
			</tr>


			<tr>
				<td><label for="price"> Price: </label></td>
				<td><input id="price" name="price" type="number" min="0.01" step="0.01"
					max="2500" value="25.67" /></td>
			</tr>

			<tr><?php
$result = $conn->query("SELECT * FROM p_category;");
?>
 
					<td><label for="category"> Product category: </label></td>
				<td><select id="pcatgy" name="category"> <?php

foreach ($result as $row) {
        ?>
			<option value="<?=$row['name']?>"><?=$row['name']?></option>
<?php
    }
    ?></select>
			
			
			<tr>
				<td><label for="uname"> Enter UserName: </label></td>
				<td><input id="uname" type="text" name="uname"
					placeholder="user name"></td>
			</tr>
			
			
			<tr>
				<td><label for="pwrd"> Enter Pasword: </label></td>
				<td><input id="pwrd" name="pwrd" type="password" placeholder="password"></td>
			</tr>

			
			
			
			<tr>

				<td><label for="file"> Choose Image: </label></td>
				<td><input id="myfile" type="file" name="file" size="1"></td>
			</tr>




			<tr>
				<td></td>
				<td>
					<button type="submit" id="additem2" >Add Item</button>

				</td>
			</tr>

			

		</table>
		</form>

	</div>




	<script src="additem.js" type="text/javascript"></script>
	<!-- <script src="database.js" type="text/javascript"></script> -->
<?php $conn->close();?>
</body>

</html>