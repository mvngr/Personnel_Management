<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> <?php echo $title; ?> </title>
 </head>
<body>
	<center><a href="/">На главную</a> -- временное</center>
	<div id="container">
		<div id="body">
 <?php 
 	echo $data;
 ?>
 		</div>
 		<p class="footer"> footer</p>
 	</div>
</body>
</html>