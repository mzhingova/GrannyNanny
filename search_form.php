<div id="search-result">
	<table>
		<tbody>
			<?php require_once "nanny-search-result.php";?>
		</tbody>
	</table>
</div>
<h1>Търси по:</h1><br>
Име
<form method="POST" id="search-nanny-form">
	<input type="text" name="firstname"></input>
	<label>Град</label>
	<select class="city" name="city">
		<option value=""></option>
		<option value="София">София</option>
		<option value="Перник">Перник</option>
		<option value="Ямбол">Ямбол</option>
		<option value="Русе">Русе</option>
		<option value="Бургас">Бургас</option>
		<option value="Варна">Варна</option>
	</select>
	<label>Години</label>
	<select name="age">
		<option value=""></option>
		<option value="18-25">18-25</option>
		<option value="26-35">26-35</option>
		<option value="36-45">36-45</option>
		<option value="46+">46+</option>
	</select>
	<label>Пол</label>
	<select name="gender">
		<option value=""></option>
		<option value="Мъж">Мъж</option>
		<option value="Жена">Жена</option>
	</select>
	<div id="rating">
		<label>Рейтинг</label>
		<input type="checkbox" name="rating" value="1" ></input>
	</div>
	<button class="btn" name="search-button">Търси</button>
</form>