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
  <title> Выйти </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<div id="body">
		<center>
 			<p><a href="/login/out/" class="button">Выйти</a></p>
 			<form action="" method="GET">
 				<button type="submit" class="button" name="btn">Сгенерировать ключ для регистрации</button>
 			</form>
 			<? if($rkey != ''): ?>
			<p><input type="text" class="line" readonly value=<? echo '"'.$rkey.'"' ?> size="46"></p>
			<? endif; ?>
			<? if(isset($access))
				echo '<span style="color: red">Недостаточно прав</span>';
			?>
 		</center>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>