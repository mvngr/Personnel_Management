<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?> 
 
#img {
            background: #99CC99;
            float: left;
            overflow: hidden;
            padding: 5px;
            width: 200px;
            height: 200px;
            position: relative;
}
 
#content {
            background: #d2d0d2;
            float: right;
 			padding: 5px;
            width: 70%;
            height: 400px;
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
	<div id="container">

			 
		<div id="img">
		<?php echo '<img src="'.$maindata->id_avatar.'">'; ?>
		
		</div>
			 
		<div id="content">
		<h2><?php echo $maindata->name.' '.$maindata->surname; ?> </h2>
		<p>email: <?php echo '<a href="mailto:'.$maindata->email.'">'.$maindata->email.'</a>'; ?></p>
		<p>День рождения: <?php echo $maindata->birthday; ?> </p>

		</div>
		<div id="clear">
 		</div>
 		<p class="footer"> footer</p>
 	</div>
</body>
</html>