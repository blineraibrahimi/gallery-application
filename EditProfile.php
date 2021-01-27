<?php

	include_once("database config/config.php");
	if (empty($_SESSION['Username'])) {
		header('location:LogIn.php');
	}

	include_once('header.php');

?>
<div class="Lorem">
	<div class="EditProfile-container">
		<form class="EditProfile-form" action="database config/EditProfileLogic.php" method="POST">	
			<input class="input" type="text" name="Fullname" value="<?=$_SESSION['Fullname'] ?>"><br>
			<input class="input" type="text" name="Username" value="<?=$_SESSION['Username'] ?>"><br>
			<input class="input" type="email" readonly="readonly" name="Email" value="<?=$_SESSION['Email'] ?>"><br>
			<input class="input" type="password" name="Password" placeholder="Password:"><br>
			<button class="button" type="submit" name="submit">Save Changes</button>
		</form>
	</div>
</div>
<?php
	include_once("footer.php");
?>