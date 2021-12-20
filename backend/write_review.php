<?php
session_start();
if ($_SESSION['user_id'] == NULL){
 	header("Location:/fefu_timetable/index.php");
}
$user_id = $_SESSION['user_id'];

include "dbconnect.php";

$review = $_POST['review'];
$date = date('d.m.Y');
$time = date('H:i:s');

$sql = "INSERT INTO `feedback` (feedback_id, feedback_text, feedback_date, feedback_time, feedback_allowed) VALUES (:feedback_id, :feedback_text, :feedback_date, :feedback_time, true)";
$result = $conn->prepare($sql);
$result->execute(array(':feedback_id' => $user_id, ':feedback_text' => $review, ':feedback_date' => $date, ':feedback_time' => $time));


?>
