<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> test </title>
 </head>
<body>
	<div id="container">
		<div id="body">
 <?php 
 	foreach ($data as $row ) {
 		echo $row['param'].' -> '.'<input size="100" value="'.$row['encode'].'"> -> '.$row['decode'].'<br>';
 	}
 ?>
 		</div>
 		<p class="footer"> footer</p>
 	</div>
</body>
</html>