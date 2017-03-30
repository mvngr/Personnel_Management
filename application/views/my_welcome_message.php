<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	body {
		background-color: #fff;
		margin: 40px auto;
		max-width: 1024px;
		font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: #808080;
	}

	a {
		color: #dd4814;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
	   color: #97310e;
	}

	h1 {
		color: #fff;
		background-color: #dd4814;
		border-bottom: 1px solid #d0d0d0;
		font-size: 22px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 5px 10px;
		line-height: 40px;
	}

	h1 img {
		display: block;
	}

	h2 {
		color:#404040;
		margin:0;
		padding:0 0 10px 0;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 13px;
		background-color: #f5f5f5;
		border: 1px solid #e3e3e3;
		border-radius: 4px;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 150px;
	}

	p {
		 margin: 0 0 10px;
		 padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #d0d0d0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		background:#8ba8af;
		color:#fff;
	}

	#container {
		margin: 10px;
		border: 1px solid #d0d0d0;
		box-shadow: 0 0 8px #d0d0d0;
		border-radius: 8px;
	}
	.simple-little-table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;
	border-collapse:separate;
 
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
 
	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
 
.simple-little-table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;
 
	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
.simple-little-table th:first-child{
	text-align: left;
	padding-left:20px;
}
.simple-little-table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
.simple-little-table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
.simple-little-table tr{
	text-align: center;
	padding-left:20px;
}
.simple-little-table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
.simple-little-table tr td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
 
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
.simple-little-table tr:nth-child(even) td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
.simple-little-table tr:last-child td{
	border-bottom:0;
}
.simple-little-table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
.simple-little-table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
.simple-little-table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);
}
	</style>
</head>
<body>
	<div id="container">

		<div id="body">
			<p><br>Как вызвать модель из контроллера? :(</p>
			<p><a href="./" >Hello</a></p>

			<table class="simple-little-table" cellspacing='0'>
	<tr>
		<th>Пусть эта таблица </th>
		<th>Побудет</th>
		<th>Тут</th>
	</tr><!-- Table Header -->
 
	<tr>
		<td>Генетический алгоритм</td>
		<td>100%</td>
		<td>Да</td>
	</tr><!-- Table Row -->
 
	<tr>
		<td>Муравьиный алгоритм</td>
		<td>100%</td>
		<td>Да</td>
	</tr><!-- Darker Table Row -->
 
	<tr>
		<td>Метод Ньютона</td>
		<td>20%</td><td>Нет</td>
	</tr>
 
	<tr>
		<td>Дифференциальный  алгоритм</td>
		<td>80%</td>
		<td>Нет</td>
	</tr>
 
    <tr>
		<td>Метод наискорейшего пуска</td>
		<td>100%</td>
		<td>Да</td>
	</tr>
 
	<tr>
		<td>Случайный поиск</td>
		<td>23%</td>
		<td>Да</td>
	</tr>
 
	<tr>
		<td><a href="blog.harrix.org">Гиперссылка</a></td>
		<td>80%</td>
		<td><a href="blog.harrix.org">Да</a></td>
	</tr>
</table>

		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>
</body>
</html>