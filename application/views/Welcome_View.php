<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/header_style.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Главная</title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<div id="body">
			<p><a class="button" href="/job/">Список работ</a>
			<a class="button" href="/user/4">Пример страницы работника</a>
			<a class="button" href="/login/">Логин</a><br></p>
			<p><a class="button" href="/check/4">Пример информации о работе человека</a>
			<a class="button" href="/add/">Добавить работу</a></p>
			<a class="button" href="/im/">Личные сообщения</a> 
			<br>
			<br>
			<p><font size="4px">
				Сайт для координации действий между работниками<br><br>
				Можно:
				<li>Посылать запросы на выполнение каких-либо задач
				<li>Брать на выполнение какие-либо задачи
				<li>Комментировать задачи твоего отдела (например бухгалтерии)
				<li>Завершать/Удалять взятую работу
				<li>Просматривать действия других работников
				<li>Смотреть профили других работников
				</font>
			</p>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>