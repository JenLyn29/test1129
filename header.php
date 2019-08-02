
<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name=viewpport content="width=device-width, intial-scale=1.0"
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header>
		<nav class="nav-header-main">
			<a href="index.php">
				<img class="logo" src="image/logo.png" alt="logo">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">Portfolio</a></li>
				<li><a href="index.php">About me</a></li>
				<li><a href="index.php">Contact</a></li>

			</ul>

			<div class="header-login">
				<?php
				if (isset($_SESSION['userId'])) {
					echo '<form action="include/logout_inc.php" method="post"> 
						  <button type="submit" name="logout-submit">Logout</button>
						  </form>';
				}

				else {
					echo '<form action="include/login_inc.php" method="post"> 
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit">Login</button>
					
					<a href="signup.php"SignUp>SignUp</a>
									
					</form>';
				}

				?>



				
				
			</div>


		</nav>

	</header>




