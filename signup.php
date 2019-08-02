<?php
	require "header.php";
?>

	<main>
		<div align="center" class="signup-form">
			<h1>SignUp</h1>
			<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfield") {
						echo '<p class="error"> Fill in all fields!</p>';

					}
					else if ($_GET['error' == "invaliduid"]){
						echo '<p> class="error"> Username must not have special characters!</p>';
					
					}
					else if ($_GET['error' == "invalidmail"]){
						echo '<p> class="error"> Please enter a valid email</p>';
					
					}
					else if ($_GET['error' == "passwordcheck"]){
						echo '<p> class="error"> Passwords do not matchs</p>';
					
					}
					else if ($_GET['error' == "sqlerror"]){
						echo '<p> class="error"> There is a problem in the database please contact support</p>';
					
					}
					
					else if ($_GET['error' == "usertaken"]){
						echo '<p> class="error"> Username already been taken</p>';
					
					}
					
					
					
				}


			?>



			<form action="include/signup_inc.php" method="post">
				
				<br>
				<h2>Enter Desired Username</h2>
				<input type="text" name="uid" placeholder="Username">
				<h2>Enter a valid E-mail</h2>
				<input type="text" name="email" placeholder="E-mail">
				<h2>Enter Desired Password</h2>
				<input type="password" name="pwd" placeholder="Password">
				<h2>Confirm Passwword</h2>
				<input type="password" name="pwd-repeat" placeholder="Repeat Password"><br><br>
				<button type="Submit" name="signup-submit" class=signup-submit>Submit</button>
			</form>



		</div>
	</main>


<?php
	require "footer.php";
?>