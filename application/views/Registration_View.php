<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> <?php echo $title; ?> </title>
 </head>
<body>
	<center><a href="/">На главную</a> -- временное</center>
	<div id="container">
		<div id="body">
			<h1>Регистрация</h1>
 			<?php echo '<form action="/registration/'.$rkey.'" method="POST">' ?>
 				<p><input type="text" class="line" name="fname" placeholder="Имя" required></p>
 				<p><input type="text" class="line" name="lname" placeholder="Фамилия" required></p>
 				<p><input type="text" class="line" name="email" placeholder="email" required></p>
				<p><input type="text" class="line" name="login" placeholder="Логин" required></p>
				<p><input type="password" class="line" name="pass" placeholder="Пароль" required></p>
				<p><input type="password" class="line" name="repeat_pass" placeholder="Повторите пароль" required></p>
				<select size="4" class="line" name="group">
			    <option disabled>К кому отправить заявку:</option>
			    <option value="1">Бухгалтерия</option>
			    <option value="2">Выездные рабочие</option>
			    </select>
			    <p><input type="date" class="line" name="birthday" value="1990-01-01"></p><br>
			    <p><?php echo $info; ?></p>
			    <button type="submit" class="button" name="do_sendOrder">Зарегистрироваться</button>


			</form>
 		</div>
 		<p class="footer"> footer</p>
 	</div>
</body>
</html>