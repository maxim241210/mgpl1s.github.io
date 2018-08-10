<html>
<head>
	<meta charset="utf-8">
	<title>Генератор пароля</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h2><center><b>Генератор паролей<br></b></center></h2>

	<div class="right" style="
	margin-left: 600px;
	"><i> - by <a href="https://vk.com/maxim241210" target="_blank">Корнеев Максим</a><br> <right>на PHP. </right> <br></i></div>
	
	<?php
	setcookie ("TestCookie", $value,time()+3600, "/~rasmus/", "maxphp", 1);
	$long = $_POST[longs]; // длина

	$kol = $_POST[kols]; // количество

	$num = 0;

	if (empty($long)) {
		$num++;
		echo "<i>Длинна не указана.</i><br>";
	}

	if (empty($kol)) {
		$num++;
		echo "<i>Колличество паролей не указано. </i> <br>";
	}
	if ($num > 0) {
		echo "<b>Не возможно сгенерировать пароль без данных.</b><br>";
	}

	if ($num == 0){
		echo "<br> Длинна: <b>$long</b> <br/> Сгенерировано паролей: <b>$kol</b><br/><br>";
	}

	$letter = array ("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");


	for ($i=0; $i < $kol; $i++) { 

		for ($b=0; $b < $long; $b++) { 

			echo $res = $letter[rand(0,61)] ;

		}

		echo "<br/>";
	}	

	?>

</body>
</html>