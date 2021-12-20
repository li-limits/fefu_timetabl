<?php
    session_start(); 
    $user_id = $_SESSION['user_id'];
	include "backend/dbconnect.php";
	
	$sql = "SELECT COUNT(*) as count FROM `feedback`";
	$result = $conn->prepare($sql);
    $result->execute(array(':feedback_id' => $user_id));
    $cout = $result->fetch();
    
    $sql = "SELECT * FROM `feedback`";
	$result = $conn->prepare($sql);
    $result->execute(array(':feedback_id' => $user_id));
    $ids = $result->fetch();


	for($i = 1; $i <= $cout[0]; $i++){
	    $id = $ids['feedback_id'];
	
        $sql = "SELECT * FROM `feedback` WHERE feedback_id = :feedback_id";
        $result = $conn->prepare($sql);
        $result->execute(array(':feedback_id' => $i));
        $row = $result->fetch();
        $text = $row["feedback_text"];
        $date = $row["feedback_date"];
		$time = $row["feedback_time"];
		$allowed = $row["feedback_allowed"];
		
        $sql = "SELECT * FROM `users` WHERE id = :user_id";
        $result = $conn->prepare($sql);
        $result->execute(array(':user_id' => $i));
        $user = $result->fetch();
        $name = $user['name'];
        $surname = $user['surname'];
        
		echo("<div class='review'>
					<div class='author_review'>
						<div class='author_review_wrap'>
							<div id='image$i' class='avatar'><style>
                                #image$i{
                                    background-image: url(http://teamapi.limits.digital/fefu_timetable/avatar/$i.png);
                                }
                                </style>
                            </div>
							<div class='review_data'>
								<div class='review_data1'>
									<div>Имя пользователя:</div>
									<div>$name $surname</div>
								</div>
								<div class='review_data2'>
									<div>Дата:</div>
									<div>$date</div>
								</div>
								<div class='review_data3'>
									<div>Время:</div>
									<div>$time</div>
								</div>
							</div>
						</div>
					</div>
					<div class='text_review_wrap'>
						<div class='text_review'>
							".$text."
						</div>
					</div>
				</div>");

	}
?>