<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?> 
	<? include "application/styles/header_style.css" ?>
 
#img {
    float: left;
    overflow: hidden;
    width: 200px;
    max-height: 200px;
    position: relative;
    -moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border: 3px inset #dd4814;
	margin-left: 10px;
}
 
#content {
    float: right;
	padding: 5px;
    width: calc(100% - 240px);
    height: 400px;
    border-left: 1px solid #dd4814;
}
 
#clear {
            clear:both;
}
 
</style>
 <head >
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title> <?php echo $title; ?> </title>
 </head>
<body>
<? include "application/views/Header_View.php" ?>
	<div id="container">
		<div id="img">
			<?php echo '<img src="'.$maindata->id_avatar.'" width="200px" >'; ?>
		</div> 
		<div id="content">
		<br>
		<h2><?php echo $maindata->name.' '.$maindata->surname; ?> </h2>
		<hr>
		<p>email: <?php echo '<a href="mailto:'.$maindata->email.'">'.$maindata->email.'</a>'; ?></p>
		<p>День рождения: <?php echo $maindata->birthday; ?> </p>
		<form action="" method="GET">
			<p><input type="text" class="line" name="mess" placeholder="Написать работнику..."></p>
		</form>
		</div>
		<div id="clear"></div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>