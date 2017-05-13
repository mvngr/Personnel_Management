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
  <title> Объявления </title>
 </head>
<body>
	<? include "application/views/Header_View.php" ?>
	<div id="container">
		<center>
			<table>
				<tr>
					<? 
						foreach($head_table as $value)
							echo '<th>'.$value.'</th>';
					?>
				</tr>
				<?
					foreach ($table_values as $row) {
						echo '<tr>';
						foreach ($row as $key => $value)
							echo '<td>'.$value.'</td>';
						echo '</tr>';
					}
				?>
			</table>
			<br><br>
			<a href="/news/add" class="button">Добавить новость</a>
		</center>
 	<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>