<div id="search-result">
	<table>
		<tbody>
			<?php require_once "user-search-result.php";?>
		</tbody>
	</table>
</div>
<h1>Търси по:</h1><br>
Име
<form method="GET" id="search-user-form">
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
	<label>Адрес</label>
	<input type="text" name="address"></input>
	<label>Email</label>
	<input type="text" name="email"></input>
	<input type="hidden" name="lastname"></input>
	<input type="hidden" name="search" value="true" />
	<button class="btn" name="search-button">Търси</button>
</form>
