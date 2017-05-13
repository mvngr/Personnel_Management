<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<style type="text/css">
	<? include "application/styles/style1.css" ?>
	<? include "application/styles/mess_style.css" ?>
	<? include "application/styles/header_style.css" ?>
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
							echo '<a href="/im/'.$users_exists[$i]['id_from_user'].'">'.$users_exists[$i][
							'name_from_user'].'</a><br>';
						}
					?>
					<br>
				</div>
			</div>
			<div class="header_mess">
				<? if(isset($id_to_user)): ?>
				<a href=<? echo '"/user/'.$id_to_user.'"' ?>><? echo $name_to_user ?></a>
				<? endif; ?>
			</div>
			<div id="messages" class="mess_container">
				<?php 
				if($exist_mess == 1){
					foreach ($mess as $row) {
						if ($my_id == $row->id_from_user) 
							echo '<div id="mess_'.$row->id.'" class="mess"><a href="/user/'.$row->id_from_user.'/">'.$row->id_from_user_name.'</a> | '.$row->message.'</div>';
						else
							echo '<div id="mess_'.$row->id.'" class="op_mess">'.$row->message.' | <a href="/user/'.$row->id_from_user.'/">'.$row->id_from_user_name.'</a></div>';
					}
					echo '<form action="" method="GET">
				<input type="text" name="mess" class="inp_area" placeholder="Введите сообщение..." required>
				</form>';
				}
				else
					echo 'Выберите в правом окне собеседника ==>';
				?>
				
			</div>
			<br/>
 		</div>
 		<? include "application/views/Footer_View.php" ?>
 	</div>
</body>
</html>