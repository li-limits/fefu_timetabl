<?php
session_start();
if ($_SESSION['user_id'] == NULL){
 	header("Location:/fefu_timetable/index.php");
}
$user_id = $_SESSION['user_id'];

include "dbconnect.php";

$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];

$sql = "SELECT * FROM `users` WHERE id = :id";
$result = $conn->prepare($sql);
$result->execute(array(':id' => $user_id));
$row = $result->fetch();
if ($row){
	if (password_verify($old_pass, $row['password']))
	{
	    $hashpass = password_hash($new_pass, PASSWORD_DEFAULT);
	    $sql = "UPDATE `users` SET password = :password WHERE id = :id";
	    $result = $conn->prepare($sql);
	    $result->execute(array(':id' => $user_id, ':password' => $hashpass));
		header("Location:/fefu_timetable/personal_cabinet.php");
	}
}

?>
