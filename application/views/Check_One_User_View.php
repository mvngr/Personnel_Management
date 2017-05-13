<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/check_one_user_style.css" ?>
	<? include "application/styles/header_style.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> Проверка работников </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
	<h1><? echo $user ?></h1>
		<div id="body">
			<div class="my-work">
				<h2>Работа:</h2>
				<? echo $left ?>
			</div>
			<div class="my-orders">
				<h2>Исходящие заявки:</h2>
				<? echo $right ?>
			</div>
 		</div>
 	<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>