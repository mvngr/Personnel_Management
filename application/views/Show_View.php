<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Работа взята успешно</title>
 </head>
<body>
	<div id="container">
		<div id="body">
 		<h2 align="center"><?php echo $str; ?></h2>
 		<br>
 		<p style="text-align: center;"><a href="/">На главную</a></p>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>