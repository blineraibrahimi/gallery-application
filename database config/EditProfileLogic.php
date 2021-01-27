<?php
	include_once("config.php");

	if (isset($_POST['submit'])) {
		$fullname = $_POST['Fullname'];
		$username = $_POST['Username'];
		$email = $_POST['Email'];
		$tempPass = $_POST['Password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);

		if (empty($fullname) || empty($username) || empty($email) || empty($password)) {
			echo "Please fill all the fields";
		} else {
			$sql = "UPDATE signup_register set Fullname='$fullname', Username='$username', Password='$password' WHERE  Email='$email'";
			$sqlQuery = $connection -> prepare($sql);
			$sqlQuery -> execute();

			$_SESSION['Username'] = $username;
			$_SESSION['Email'] = $email;
			$_SESSION['Fullname'] = $fullname;

			echo "
			<script>alert('Your informatinons are changed!');</script> 
			<script> window.location = './../profile.php'</script>";
			
		}
	}
?>