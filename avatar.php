<?php
if (isset($_FILES['image'])) {
  $image = $_FILES['image'];
  
  if (exif_imagetype($_FILES['image']['tmp_name']) == 2) {
    $image_type = 'jpg';
  } elseif (exif_imagetype($_FILES['image']['tmp_name']) == 3) {
    $image_type = 'png';      
  } else {
    header("Location:/fefu_timetable/personal_cabinet.php");
  }
  
  session_start();
  if ($_SESSION['user_id'] == NULL){
 	header("Location:/fefu_timetable/index.php");
  }
  $user_id = $_SESSION['user_id'];
  copy($_FILES['image']['tmp_name'], 'avatar/'.$user_id.'.'.$image_type);
  header("Location:/fefu_timetable/personal_cabinet.php");
};