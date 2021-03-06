
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
				<div id="shopnow">
					<form action="shop.php" method="POST">
						<button class="shop" type="submit" name="opt"
							value="<?php echo "all"?>">Shop Now</button>
					</form>
				</div>
				<div id="shopnow">
					<button id="additem" class="additem">Add Item</button>
				</div>

			</div>
			<div>
				<h1>Welcome to Milma shoppee</h1>
			</div>
			<div id="logbtns">
				<div class="login logs">
					<button onclick="fnlogin()" id="loginbtn">Login</button>
				</div>
				<div class="logout logs">
					<button id="logoutbtn">Logout</button>
				</div>
				<div class="register logs">
					<button onclick="fnsignup()" id="signupbtn">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<div>
		<h1>
			<br>
		</h1>
	</div>
	<div id="menus">

		<div id="menuB1" class="sub"></div>
	</div>
	<dialog id="myDialog">
	<table>
		<tr>
			<td><label> Enter User name : </label></td>
			<td>
				<!-- <form action="index.php" method="post"> --> <input
				id="lusername" type="text" placeholder="username">
			</td>
		</tr>

		<tr>
			<td><label>Enter Password here: </label></td>
			<td><input id="lpwrd" type="password" placeholder="password"></td>
		</tr>


		<tr>
			<td><button id="login2">login</button></td>
			<td>
				<button class="closebtn" onclick="closedilog()">Close</button>
			</td>
		</tr>
		<!-- </form> -->
	</table>
	</dialog>

	<dialog id="regdialog">Enter Valid User Details here. <!-- 	<form action=".php" method="post"> -->

	<div id="signupbox">
		<table>
			<tr>
				<td><div class="sbox">
						<label for="fname"> Enter First Name: </label>
					</div></td>
				<td><div>
						<input id="fname" type="text" placeholder="First Name">
					</div></td>
			</tr>
			<tr>
				<td><div class="sbox">
						<label for="lname"> Enter Last Name: </label>
					</div></td>
				<td><div>
						<input id="lname" type="text" placeholder="Last Name">
					</div></td>
			</tr>


			<tr>
				<td><div class="sbox">
						<label for="phno"> Enter Phone Number: </label>
					</div></td>
				<td><div>
						<input id="phno" type="tel" placeholder="phone Number">
					</div></td>
			</tr>



			<tr>



				<td><div class="sbox">



						<label for="email"> Enter Email: </label>
					</div></td>
				<td><div>
						<input id="email" type="email" placeholder="email address">
					</div></td>
			</tr>



			<tr>



				<td><div class="sbox">



						<label for="uname"> Enter Username: </label>
					</div></td>
				<td><div>
						<input id="uname" type="text" placeholder="username">
					</div></td>
			</tr>

			<tr>



				<td><div class="sbox">



						<label for="pwrd"> Enter Pasword: </label>
					</div></td>
				<td><div>
						<input id="pwrd" type="password" placeholder="password">
					</div></td>
			</tr>

			<tr>
				<td><div class="sbox">
						<button class="sbox" id="signup">Sign Up</button>
					</div></td>
				<td><div>
						<div>
							<div>
								<label for="cus">Coustomer</label> <input id="cus" type="radio"
									name="reg" value="choice-1">
							</div>
							<div>
								<label for="staff">Staff Member</label> <input id="staff"
									type="radio" name="reg" value="choice-2">
							</div>
						</div>


					</div></td>
			</tr>
		</table>

	</div>

	</dialog>

	<div id="rowdummy">
		<!-- <img id="img1" alt="picture of an icecream" src="icecream4.jpg"> -->
		<div id="caption"><h1> The Secret Ingradient is Always Love!...</h1></div>
	</div>






	<script src="milma.js" type="text/javascript"></script>
	<script src="database.js" type="text/javascript"></script>

</body>

</html>