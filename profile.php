<?php
	include_once('header.php');
	include_once('database config//config.php');
	if (empty($_SESSION['Username'])) {
		header('location:LogIn.php');
	}
?>
<div class="Lorem">
	<div class="profile-container">
		<h1>Welcome to the your profile <?php echo $_SESSION['Username'];?></h1>
		<a href="EditProfile.php" class="hrefs">Edit Profile</a><br>
		<a href="Upload File.php" class="hrefs">Upload a File</a><br>
		<a href="database config/LogOut.php" class="hrefs">Log Out</a>
	</div>
</div>

<?php
	include_once('footer.php');
?>