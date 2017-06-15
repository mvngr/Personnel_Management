<div class="header">
	<div class="left">
		<a href="/job/">Работа</a>
		<a href="/add/">Запрос</a>
		<a href="/check/">Моя работа</a>
		<a href="/login/">Авторизация</a>
	</div>
	<div class="right">
		<? if($menu['bool_this_chief']): ?>
		<a href="/chief/"><b>Проверка</b></a>
		<? endif; ?>
		<a href="/news">Новости</a>
		<a href="/im/">
				Сообщения <b><?if($menu['count_new_mess'] != 0) echo '+'.$menu['count_new_mess']; ?></b>	
		</a>
		<a href="/user/">Профиль</a>
	</div>
	<div class="clear"></div>
</div>
