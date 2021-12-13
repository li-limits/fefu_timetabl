<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/style2.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/style3.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/style4.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	
</head>
<body>
	<script src="script.js"></script>
		<header class="header"> 
			<?php include "header.php"?>
		</header>

		<div class="wrapper_m">
			<div class="top_butt">
				<div class="top_butt_wrap">
					<div class="top_butt_left">
						<div class="butt_m" id="add_ev" style="width: 300px">Добавить событие</div>
						<div class="week_buutons">
							<div class="butt_m" id="butt_prev" style="width: 40px"><div id="prev_tri"></div></div>
							<div class="butt_m" id="week" style="width: 150px">Неделя</div>
							<div class="butt_m" id="butt_next" style="width: 40px"><div id="next_tri"></div></div>
						</div>
					</div>
					<div class="top_butt_right">
						<div class="butt_m" id="show_list" style="width: 300px">Показать списком</div>
						<div class="butt_m" id="filters" style="width: 150px">Фильтры</div>
					</div>
				</div>
			</div>

			<div class="main_block_of_schdl">
				<div class="main_block_of_schdl_wrap"> 
					
					<div class="class_cont">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Понедельник дд.мм</div>

						</div>
						<div class="class_cont_main">
							<div class="class_cont_main_wrap" id="ponedelnik">
								<div class="para"></div>

							</div>
						</div>
					</div>
					<div class="class_cont">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Вторник дд.мм</div>

						</div>
						<div class="class_cont_main" id="vtornik">
							
						</div>
					</div>
					<div class="class_cont">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Среда дд.мм</div>

						</div>
						<div class="class_cont_main" id="sreda">
							
						</div>
					</div>
					<div class="class_cont">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Четверг дд.мм</div>

						</div>
						<div class="class_cont_main" id="chetverg">
							
						</div>
					</div>
					<div class="class_cont">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Пятница дд.мм</div>

						</div>
						<div class="class_cont_main" id="pyatnica">
							
						</div>
					</div>
					<div class="class_cont">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Суббота дд.мм</div>

						</div>
						<div class="class_cont_main" id="subbota">
							
						</div>
					</div>
					<div class="class_cont" id="class_cont_last">
						<div class="class_cont_top">
							<div class="class_cont_top_date">Воскресенье дд.мм</div>

						</div>
						<div class="class_cont_main" id="voskresenie">
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include "footer.php"?>
	</div>
	
</body>
</html>