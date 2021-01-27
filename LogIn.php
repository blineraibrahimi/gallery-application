<?php
	include_once('header.php');
?>
<div class="Lorem">
	<div class="logIn-container">
		<form class="logIn-form" action="database config//LogIn_Logic.php" method="POST">
			<h1 class="h1">Log In</h1>
			<input class="input" type="text" name="Username" placeholder="Username:" required ><br>
			<input class="input" type="password" name="Password" placeholder="Password:" required ><br>
			<button class="button" type="submit" name="LogInButton">Log In</button><br><br>
			<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
			<a class="link" href="SignUp.php">Register here</a>
		</form>
	</div>
</div>
<?php
    // unset($_SESSION["error"]);
	include_once('footer.php');
?>