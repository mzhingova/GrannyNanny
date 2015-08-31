<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Help</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<script>

	function toggleElement(id)
{
    if(document.getElementById(id).style.display == 'none')
    {
        document.getElementById(id).style.display = '';
    }
    else
    {
        document.getElementById(id).style.display = 'none';
    }
}
</script>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">

				<p><b>FAQ</b></p>


<p>
<a href="javascript:toggleElement('a1')">1.След въвеждане на потребителското име паролата ми се изписва автоматично. Как може да се изключи?</a>
</p>
<div id="a1" style="display:none">
Вие използвате възможността на Вашия browser да запамети паролата Ви и да я въвежда автоматично всеки път когато има нужда. Това е възможна опасност за Вашата поща и Ви съветваме да изключите тази опция.<br><br>
За Chrome трябва да кликнете на менюто намиращо се най-горе в дясно на вашия браузър и да избере “Settings”.<br>
Натиснете “show advanced settings…”, за да видите повече настройки.<br>
Там открийте надписа “offer to save passwords I enter on the web” в частта за пароли и премахнете тикчето в квадрата пред него.<br><br>

За Mozila Firefox трябва да кликнете на менюто намиращо се най-горе в дясно на вашия браузър и да избере “Options”.<br>
След това изберете “security” и премахнете тикчето пред “Remember passwords for sites”, за да завършите промяната натиснете “OK”<br><br>

За Interne Explorer това се прави като влезете в менюто “Тools” -> “Internet Options” -><br>
Изчистете въведените досега пароли от бутон “Clear password” и премахнете избора пред “User name and password on forms“.<br><br>
</div>

<p>
<a href="javascript:toggleElement('a2')">2.Как да си сменя паролата?</a>
</p>
<div id="a2" style="display:none">
Бъдете внимателни при смяна на паролата, тъй като погрешното въвеждане на новата парола или забравянето й много често водят до загубване на достъпа до профила.<br>
Влезте в акаунта ви -> Профил -> Редактирай профил ->Попълете следните полега - Въведете настояща парола// Нова парола// Повтори парола -> Запиши промените.<br><br>
</div>	

<p>
<a href="javascript:toggleElement('a3')">3.Не мога да си вляза в профила.</a>
</p>
<div id="a3" style="display:none">
Проверете дали Вашите затруднения на са породени от следното:
<li>Превключили сте на кирилица или на друга локална кодова таблица – въведете паролата си на латиница.</li>
<li>Имате неработещи или потънали (постоянно включени) клавиши, които Ви пречат да въведете правилно паролата си.</li>
<li>Потребителското Ви име може да съдържа малки и големи букви на латиница, числа, специални символите, но трябва задължително да започва с буква.<br><br></li>
</div>

<p>
<a href="javascript:toggleElement('a4')">4.Question?</a>
</p>
<div id="a4" style="display:none">
This is an answer.<br><br>
</div>

<p>
<a href="javascript:toggleElement('a5')">5.Question?</a>
</p>
<div id="a5" style="display:none">
This is an answer.<br><br>
</div>

<p>
<a href="javascript:toggleElement('a6')">6.Question?</a>
</p>
<div id="a6" style="display:none">
This is an answer.<br><br>
</div>	

<p>
<a href="javascript:toggleElement('a7')">7.Question?</a>
</p>
<div id="a7" style="display:none">
This is an answer.<br><br>
</div>			

</div></div>
<div class="container">
	<?php include 'includes/footer.php';?>
</div>
</body>
</html>