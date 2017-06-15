<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/header_style.css" ?>
	<? include "application/styles/one_news_style.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> <? echo @$subject ?> </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<h1><? echo @$subject ?></h1>
		<div class="content">
		<div class="header_info">
		Автор: <? echo @$author ?>
		&emsp;|&emsp;
		Приоритет: <? echo @$rating ?>
		</div>
		<div class="note">
			<? echo @$note; ?>
		</div>
		</div>
		<div class="other_news">
			<? 
			foreach ($other_news as $value)
				echo '<a href="/news/'.@$value->id.'">'.@$value->subject.'</a><br>';
			?>
		</div>

 	<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>