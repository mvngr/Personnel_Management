<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/header_style.css" ?>
	<? include "application/styles/mess_style.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> <?php echo $title; ?> </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<div id="body">
			<div class="right_box">
				<div id="conv_users_panel" class="right_col">
					<a href="/im/new"><b>Новая беседа</b></a>
					<br>
					<?php 
						for($i = 0; $i < sizeof($users_exists); $i++) {
							echo '<a href="/im/'.$users_exists[$i]['id_from_user'].'">'.$users_exists[$i]['name_from_user'].'</a><br>';
						}
					?>
					<br>
				</div>
			</div>
			<div class="mess_container">
				<? if(!array_key_exists('find', $_GET))
						$_GET['find'] = ''; ?>
				<form action="" method="GET">
				Поиск по имени, фамилии, логину: <input type="text" size="30px" class="line" name="find" value=<? echo '"'.$_GET['find'].'"' ?>>
				</form>
				<br>
				<form action="" method="GET">
				<? if($find_show_me): ?>
					<select size=<? echo '"'.(sizeof($find_show_me)+1).'"' ?> class="line" name="user" required>
			    <option disabled>Найденные результаты:</option>
			    <? endif; ?>
			    <?php
			    	if($find_show_me)
			    		foreach ($find_show_me as $value)
			    			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
			    ?> <? if($find_show_me): ?>
			     </select><br> 
				<? else: ?>

				<select size=<? echo '"'.(sizeof($show_me)+1).'"' ?> class="line" name="user" required>
			    <option disabled>Выберите адресата:</option>
				<? endif; ?>
			    <?php
			    	if(!$find_show_me)
			    		foreach ($show_me as $value)
			    			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
			    ?><? if(!$find_show_me): ?>
			    </select><br>
			    <? endif; ?>
			    
				<input type="text" name="message" size="30px" placeholder="Введите сообщение" class="line" required autofocus>
				<br>
			    <button class="button" name="send">Начать переписку</button>

			    </form>
			</div>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>