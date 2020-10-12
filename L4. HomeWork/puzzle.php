<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}
		
		function checkAnswers() {

			checkAnswer("userAnswer1", ["водопад"]);
			checkAnswer("userAnswer2", ["коньки"]);
			checkAnswer("userAnswer3", ["игла","иголка"]);
		
			write("Вы отгадали " + score + " загадок");

			if(score == 3) {
				hide("button");
				write("Вы все угадали!");
			}else write("Вы отгадали " + score + " загадок");

		}


		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

	</script>
</head>
<body>

<div class="content">
	<div class="header">
		<a href="index.php">Главная</a>
		<a href="#">Загадки</a>
		<a href="guess.php">Угадайка</a>
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">
				<p id="info"> <strong> Отгадайте загадки </strong></p>
				<p>Вот так чудо! Вот так диво!<br>Как сорвался он с обрыва,<br>Так уже который год<br>Все никак не упадет</p>
				<input type="text" id="userAnswer1">

				<p>Два коня у меня, два коня.<br>По воде они возят меня.<br>А вода тверда, словно каменная!</p>
				<input type="text" id="userAnswer2">

				<p>Я одноухая старуха,<br>Я прыгаю по полотну<br>И нитку длинную из уха,<br>Как паутинку, я тяну</p>
				<input type="text" id="userAnswer3">

				<br>2
				
				<a href="#" onClick="checkAnswers();" id="button">Ответить</a>

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