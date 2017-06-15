<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	#container {
		padding: 0;
	}
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> <?php echo $title; ?> </title>
 </head>
<body>
	<div id="container">
		<h1>Регистрация</h1>
		<div id="body">
 			<?php echo '<form action="/registration/'.$rkey.'" method="POST">' ?>
 				<p><input type="text" class="line" name="fname" placeholder="Имя" required></p>
 				<p><input type="text" class="line" name="lname" placeholder="Фамилия" required></p>
 				<p><input type="text" class="line" name="email" placeholder="email" required></p>
				<p><input type="text" class="line" name="login" placeholder="Логин" required></p>
				<p><input type="password" class="line" name="pass" placeholder="Пароль" required></p>
				<p><input type="password" class="line" name="repeat_pass" placeholder="Повторите пароль" required></p>
				<select size="4" class="line" name="group" required>
			    <option disabled>Выберите отдел:</option>
			    <?php
			    	foreach ($select as $value)
			    		if($value->id != 0)
			    			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
			    ?>
			    </select>
			    <p>Дата рождения</p>
			    <p><input type="date" class="line" name="birthday" value="1990-01-01"></p><br>
				<h5>Пароль и ваша почта шифруются</h5>
			    <p><?php echo $info; ?></p>
			    <button type="submit" class="button" name="do_sendOrder">Зарегистрироваться</button>


			</form>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>