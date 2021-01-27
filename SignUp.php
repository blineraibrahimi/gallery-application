<?php
	include_once('header.php');
?>
<div class="Lorem">
	<div class="signIn-container">
		<form class="signIn-form" action="database config//signup_register.php" method="POST">
			<h1 class="h1">Sign Up</h1>
			<input class="input" type="text" name="Fullname" placeholder="Fullname:" required ><br>
			<input class="input" type="text" name="Username" placeholder="Username:" required ><br>
			<input class="input" type="email" name="Email" placeholder="Email:" required ><br>
			<input class="input" type="password" name="Password" placeholder="Password:" required ><br>
			<input class="input" type="password" name="Confirm_password" placeholder="Confirm Password:" required ><br>
			<button class="button" type="submit" name="submit">Sign Up</button><br><br>
			<a class="link" href="LogIn.php">Log In here</a>
		</form>
	</div>
</div>
<?php
	include_once('footer.php');
?>