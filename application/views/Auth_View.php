<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Вход</title>
 </head>
<body>
	<div id="container">
		<div id="body">
			<form method="POST">
				<center>
				<input type="text" class="line" name="login" placeholder="Логин" required><br>
				<input type="password" class="line" name="pass" placeholder="Пароль" required><br>
				<button type="submit" class="button" name="do_login">Войти</button>
				<h5><p><?php echo $info; ?></p></h5>
				</center>
			</form>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>