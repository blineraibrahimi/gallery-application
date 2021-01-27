<?php
	include_once("config.php");
	if(isset($_POST['submit'])){
		$fullname = $_POST['Fullname'];
		$username = $_POST['Username'];
		$email = $_POST['Email'];

		$tempPass = $_POST['Password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);


		$tempConfigPass = $_POST['Confirm_password'];
		$confirm_password = password_hash($tempConfigPass, PASSWORD_DEFAULT);

		if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
			echo "Please fill all the fields";
		} else {
			$sql = "INSERT INTO signup_register(Fullname,Username,Email,Password,Confirm_password) VALUES('$fullname','$username','$email','$password','$confirm_password')";
			$sqlQuery = $connection->prepare($sql);
			$sqlQuery -> execute();
			echo "<script>alert('Thank you for signing up!');</script>
				  <script> window.location = '../../profile.php'</script>";
		}
	}

	// include_once('header.php');
	// include_once('footer.php');

?>