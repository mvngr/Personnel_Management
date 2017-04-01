<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Главная</title>
 </head>
<body>
	<div id="container">
		<div id="body">
			<p><a class="button" href="/job/">Список работ</a>
			<a class="button" href="/user/4">Пример страницы работника</a>
			<a class="button" href="/login/">Логин</a><br></p>
			<a class="button" href="/check/4">Пример информации о работе человека</a>
			<a class="button" href="/add/">Добавить работу</a>
 		</div>
 		<p class="footer"> footer</p>
 	</div>
</body>
</html>