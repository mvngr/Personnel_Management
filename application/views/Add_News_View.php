<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/header_style.css" ?>
	<? include "application/styles/add_news_style.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> Добавить новость </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<form method="GET" action="" >
		<h1><input type="text" name="subject" class="subject" placeholder="Заголовок..." size="50" autofocus required></h1>
		<div class="content">
			<textarea name="note" class="line shadow" rows="3" cols="50" placeholder="Введите текст..." required></textarea>
			<br>
			<select size="4" class="line shadow" name="id_to_group" required>
				    <option disabled>К кому отправить заявку:</option>
				    <?php
				    	foreach ($select as $value)
				    		if($value->id != 0)
				    			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
				    ?>
			</select>
			<br>
			<label><input type="radio" value="1" name="stars">1</label> 
			<label><input type="radio" value="2" name="stars">2</label> 
			<label><input type="radio" value="3" name="stars">3</label> 
			<label><input type="radio" value="4" name="stars">4</label> 
			<label><input type="radio" value="5" name="stars">5</label> 
			<br><br>
			<button class="button">Опубликовать новость</button>
			</form>
		</div>

 	<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>