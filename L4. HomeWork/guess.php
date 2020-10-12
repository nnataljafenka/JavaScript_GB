<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var checkCount = 0;
		var tryNumber  = 1
		var maxTryCount = 6;
		var player = 1;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text, place){
			document.getElementById(place).innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			checkCount++;
			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, угадал игрок № " + player +"</b>","info");
				hide("button");
				hide("userAnswer");
				hide("infoplay");
			} else if(checkCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer,"info");
				hide("button");
				hide("userAnswer");
				hide("infoplay");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100","info");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100","info");				
			}

			if(player == 1) {
				player = 2;
				write("Ходит игрок № " + player + ", попытка № "+tryNumber,"infoplay");
			}
			else {
				player = 1;
				tryNumber++;
				write("Ходит игрок № " + player + ", попытка № "+tryNumber,"infoplay");
			}
		}

	</script>
</head>
<body>

<div class="content">
	<div class="header">
		<a href="index.php">Главная</a>
		<a href="puzzle.php">Загадки</a>
		<a href="#">Угадайка</a>
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">
				
				<p id="info">Угадайте число от 0 до 100<br> У каждого игрока 3 попытки, всего игроков - 2 <br></p>
				<p id="infoplay">Ходит игрок № 1, попытка № 1<br></p>

				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date ("Y")?> pupka la-puska de-kukuska
<div>


</body>
</html>