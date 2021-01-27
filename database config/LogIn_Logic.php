<?php
	include_once("config.php");
	if(isset($_POST['LogInButton'])) {
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if (empty($username) || empty($password)) {
			echo "Please fill all the fields";
		} else{
			$sql = "SELECT * FROM signup_register WHERE Username='$username'";
			$sqlQuery = $connection -> prepare($sql);
			$sqlQuery -> execute();
			$data = $sqlQuery -> fetch(PDO::FETCH_ASSOC);
	  
			if($data == false){
				echo "User $username not found.";
			}
			else {
				$isPasswordVerified = password_verify($password, $data['Password']);

				if($isPasswordVerified) {
						$_SESSION['ID'] = $data['ID'];
						$_SESSION['Fullname'] = $data['Fullname'];
						$_SESSION['Email'] = $data['Email'];
						$_SESSION['Username'] = $data['Username'];
						$_SESSION['Password'] = $data['Password'];
						header('Location:../../profile.php');
					exit;
				}
				else
					echo 'Password not match.';
			}
		}
	}		
?>
