<?php
	include_once("config.php");

	if (isset($_POST['submit-comment'])) {
		$comment = $_POST['Comment'];
		if (empty($comment)) {
			echo "Please write a comment in the comment field";
		} else {
			$sql = "INSERT INTO Comment(Comment) VALUES('$comment')";
			$sqlQuery = $connection->prepare($sql);
			$sqlQuery -> execute();
			// echo"Thank you for your comment";
			header('location:../index.php');
		}
	}
?>