<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/header_style.css" ?>
	.add-order-cont{
		padding-left: 20%;
	}
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> Сделать заказ </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<div id="body">
		<div class="add-order-cont">
			<form action="/add/" method="GET">
				<textarea name="order" class="line" rows="3" cols="50" placeholder="Введите зявку" required></textarea>
				<br>
				<input type="text" class="line" name="cost" placeholder="Введите Примерную цену" required><br>
				<select size="4" class="line" name="to_group" required>
			    <option disabled>К кому отправить заявку:</option>
			    <?php
			    	foreach ($select as $value)
			    		if($value->id != 0)
			    			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
			    ?>
			    </select><br>
			    <!-- 
			    <option value="1">Бухгалтерия</option>
			    <option value="2">Выездные рабочие</option>
			    </select><br> -->
			    <p>До какой даты нужно сделать заявку:<br>
			    <input type="date" class="line" name="deadline" value="2099-01-01"><p><br>
			    <button type="submit" class="button" name="do_sendOrder">Послать заявку</button>


			</form>
		</div>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>