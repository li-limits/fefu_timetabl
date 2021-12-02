<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/style2.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script
       src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
       crossorigin="anonymous">	
    </script>
	
</head>
<body>
	<div class="wrapper_lk">
		<?php include "header.php"?>

		<div class="main_block">
			<div class="foot_wrap">
				<div class="lk_left">
					<div class="user_wrap">
					  <div class="avatar">
						
					  </div>
					  <div class="user_data">
						  <div class="udata_wrap">
							  <span class="ustate">Статус:<?php echo("default_user")?></span>
							  <span class="ufname">Имя: <?php echo"Привет"?></span>
							  <span class="usname">Фамилия: <?php echo "Привет"?></span>
							  <span class="uemail">email: <?php echo "privet@students.dvfu.ru"?></span>
						  </div>
					  </div>
                    </div>
					<div class="helper_lk"></div>
				</div>
				<div class="lk_right">
					<div class="change_pass">
						<span class="change_pass_topic">Смена пароля</span>
						<form method="post" class="form_pass">
							<input class="change_pass_input" type="text" name="old_pass" placeholder="Старый пароль" ></br>
							<input class="change_pass_input" type="text" name="new_pass" placeholder="Новый пароль" ></br>
							<input type="submit" class="butt_accept" value="Подтвердить"></div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php include "footer.php"?>
	</div>
</body>
</html>