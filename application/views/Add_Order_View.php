<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> Сделать заказ </title>
 </head>
<body>
	<div id="container">
		<div id="body">
			<form action="/add/" method="GET">
				<textarea name="order" class="line" rows="3" cols="50" placeholder="Введите зявку"></textarea>
				<br>
				<input type="text" class="line" name="cost" placeholder="Введите Примерную цену"><br>
				<select size="4" class="line" name="to_group">
			    <option disabled>К кому отправить заявку:</option>
			    <option value="1">Бухгалтерия</option>
			    <option value="2">Выездные рабочие</option>
			    </select><br>
			    <input type="date" class="line" name="deadline" value="2099-01-01"><br>
			    <button type="submit" class="button" name="do_sendOrder">Послать заявку</button>


			</form>
 		</div>
 		<p class="footer"> footer</p>
 	</div>
</body>
</html>