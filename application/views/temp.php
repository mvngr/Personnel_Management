
  <!DOCTYPE HTML>
  <head>
    <link rel="icon" type="image/png" href="http://www.indigomath.ru/favicon.png">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Кинематика | Формулы по физике | Indigomath</title>
	<base href="http://www.indigomath.ru/"/> <meta name='keywords' content="формулы, физика, формулы по физике, кинематика, путь, время, скорость, равномерное, движение, равномерно, ускоренное, ускорение, координата, высота, тела, брошенного, вертикально, вверх, вниз, свободно, падающего, центростремительное, угловая, круговое, линейная, период, вращения, частота, дальность, броска, под, углом, горизонту, подъема, вертикальная, максимальная, общее, движения, горизонтально" /><meta name='description' content="Формулы по физике с объяснениями - Кинематика: путь, время, скорость, равномерное движение, равномерно ускоренное движение: ускорение, равномерно ускоренное движение: скорость, равномерно ускоренное движение: путь, равномерно ускоренное движение: координата, высота тела, брошенного вертикально вверх (вниз), скорость тела, брошенного вертикально вверх (вниз), скорость, ускорение, время, скорость свободно падающего тела, центростремительное ускорение, угловая скорость, равномерное круговое движение, равномерное круговое движение: линейная скорость, период вращения, период вращения, период вращения, центростремительное ускорение, центростремительное ускорение, частота вращения, центростремительное ускорение, дальность броска тела, брошенного под углом к горизонту, высота подъема тела, брошенного под углом к горизонту, вертикальная скорость тела, брошенного под углом к горизонту, максимальная высота подъема тела, брошенного под углом к горизонту, общее время движения тела, брошенного под углом к горизонту, максимальная дальность броска тела, брошенного под углом к горизонту, дальность броска тела, брошенного горизонтально, высота подъема тела, брошенного горизонтально, общее время движения тела, брошенного горизонтально" /><link href='typo3conf/ext/samson/res/css_merged/m_dd8d6ecc13_1479585842.css' rel='stylesheet' type='text/css'>

	
	<!--[if IE]>
		<link href='typo3conf/ext/t27_samson/res/templates/index_flex/ie.css' rel='stylesheet' type='text/css'>
	<![endif]-->
	
	<!--[if lt IE 7]>
		   <style type="text/css">
			#page {width: 980px;}
			.t_float_left_outer{float: none;}
			</style>
			
			<script src="typo3conf/ext/t27_samson/res/js/DD_belatedPNG.js" type="text/javascript"></script>
			<script type="text/javascript">
			Event.observe(window, 'load', function() {  
				DD_belatedPNG.fix('.sam_sprite_abstract, img');
			});
			</script>
	<![endif]-->
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

 <script type="text/javascript">
var lastResFind=""; // последний удачный результат
var copy_page=""; // копия страницы в ихсодном виде
function TrimStr(s) {
     s = s.replace( /^\s+/g, '');
  return s.replace( /\s+$/g, '');
}
function FindOnPage(inputId) {//ищет текст на странице, в параметр передается ID поля для ввода
  var obj = window.document.getElementById(inputId);
  var textToFind;
  
  if (obj) {
    textToFind = TrimStr(obj.value);//обрезаем пробелы
  } else {
    alert("Введенная фраза не найдена");
    return;
  }
  if (textToFind == "") {
    alert("Вы ничего не ввели");
    return;
  }
   
  if(document.body.innerHTML.indexOf(textToFind)=="-1")
  alert("Ничего не найдено, проверьте правильность ввода!");
   
  if(copy_page.length>0)
        document.body.innerHTML=copy_page;
  else copy_page=document.body.innerHTML;
 
   
  document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");//стираем предыдущие якори для скрола
  document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background:red'>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;
  lastResFind=textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
  window.location = "http://x/temp/" + '#'+textToFind;

 } 
</script>
  </head>
  
  <body>
  
  <h2>JavaScript поиск по странице</h2>
<input type="text" id="text-to-find" value=""> 
<input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Искать"/>
<br/><i>Введите слово или фразу для поиска.</i>
<hr/>
   
<!-- Top narrow -->
</div>
						<div style="margin-top:2px;"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/put-vremja-skorost.html">Путь, время, скорость</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/put-vremja-skorost.html"><img title="S - путь
v - скорость
t - время" alt="S = v*t" src="http://chart.apis.google.com/chart?cht=tx&chl=S+%3D+v%2At"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1252" >S - путь<br />
v - скорость<br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=S+%3D+v%2At">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">S</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">S</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="S">S</option><option selected = "SELECTED" value="v">v</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=S+%3D+v%2At&find=S"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">S</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomernoe-dvizhenie.html">Равномерное движение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomernoe-dvizhenie.html"><img title="x - координата
x_0 - начальная координата
v - скорость
t - время" alt="x = x_0 + v*t" src="http://chart.apis.google.com/chart?cht=tx&chl=x+%3D+x_0+%2B+v%2At"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1254" >x - координата<br />
x_0 - начальная координата<br />
v - скорость<br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=x+%3D+x_0+%2B+v%2At">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">x</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">x</a></li><li><a class="choose_variable" href="#">x_0</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="x">x</option><option selected = "SELECTED" value="x_0">x_0</option><option  value="v">v</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=x+%3D+x_0+%2B+v%2At&find=x"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">x</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-uskorenie.html">Равномерно ускоренное движение: ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-uskorenie.html"><img title="a - ускорение
v - скорость
v_0 - начальная скорость
t - время" alt="a = (v - v0) / t" src="http://chart.apis.google.com/chart?cht=tx&chl=a+%3D+%7Bv+-+v_0+%5Cover+t%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1256" >a - ускорение<br />
v - скорость<br />
v_0 - начальная скорость<br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a+%3D+%28v+-+v0%29+%2F+t">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a">a</option><option selected = "SELECTED" value="v">v</option><option  value="v0">v0</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a+%3D+%28v+-+v0%29+%2F+t&find=a"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-skorost.html">Равномерно ускоренное движение: скорость</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-skorost.html"><img title="v - скорость
v_0 - начальная скорость
a - ускорение
t - время" alt="v = v0 + a*t" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+v_0+%2B+at"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1258" >v - скорость<br />
v_0 - начальная скорость<br />
a - ускорение<br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+v0+%2B+a%2At">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="v0">v0</option><option  value="a">a</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+v0+%2B+a%2At&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-put.html">Равномерно ускоренное движение: путь</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-put.html"><img title="s - путь
v - скорость
t - время 
a - ускорение" alt="s =  v*t + a*t^2/2" src="http://chart.apis.google.com/chart?cht=tx&chl=s+%3D++vt+%2B+%7Bat%5E2+%5Cover+2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1260" >s - путь<br />
v - скорость<br />
t - время <br />
a - ускорение</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=s+%3D++v%2At+%2B+a%2At%5E2%2F2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">s</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">s</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">a</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="s">s</option><option selected = "SELECTED" value="v">v</option><option  value="t">t</option><option  value="a">a</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=s+%3D++v%2At+%2B+a%2At%5E2%2F2&find=s"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">s</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-koordinata.html">Равномерно ускоренное движение: координата</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomerno-uskorennoe-dvizhenie-koordinata.html"><img title="x - координата
x_0 - начальная координата
v - скорость
t - время 
a - ускорение" alt="x = x0 +v*t + at^2/2" src="http://chart.apis.google.com/chart?cht=tx&chl=x+%3D+x_0+%2Bvt+%2B+%7Bat%5E2+%5Cover+2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1262" >x - координата<br />
x_0 - начальная координата<br />
v - скорость<br />
t - время <br />
a - ускорение</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=x+%3D+x0+%2Bv%2At+%2B+at%5E2%2F2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">x</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">x</a></li><li><a class="choose_variable" href="#">x0</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">a</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="x">x</option><option selected = "SELECTED" value="x0">x0</option><option  value="v">v</option><option  value="t">t</option><option  value="a">a</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=x+%3D+x0+%2Bv%2At+%2B+at%5E2%2F2&find=x"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">x</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vysota-tela-broshennogo-vertikalno-vverh-vniz.html">Высота тела, брошенного вертикально вверх (вниз)</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vysota-tela-broshennogo-vertikalno-vverh-vniz.html"><img title="h - высота
h_0 - начальная высота
v_0 - начальная скорость
t - время 
g - ускорение свободного падения" alt="h = h0 + v0 * t - g*t^2 / 2" src="http://chart.apis.google.com/chart?cht=tx&chl=h+%3D+h_0+%2B+v_0++t+-+%7Bgt%5E2+%5Cover+2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1264" >h - высота<br />
h_0 - начальная высота<br />
v_0 - начальная скорость<br />
t - время <br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=h+%3D+h0+%2B+v0+%2A+t+-+g%2At%5E2+%2F+2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">h</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">h</a></li><li><a class="choose_variable" href="#">h0</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="h">h</option><option selected = "SELECTED" value="h0">h0</option><option  value="v0">v0</option><option  value="t">t</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=h+%3D+h0+%2B+v0+%2A+t+-+g%2At%5E2+%2F+2&find=h"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">h</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/skorost-tela-broshennogo-vertikalno-vverh-vniz.html">Скорость тела, брошенного вертикально вверх (вниз)</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/skorost-tela-broshennogo-vertikalno-vverh-vniz.html"><img title="v - скорость
v_0 - начальная скорость
g - ускорение свободного падения 
t - время" alt="v = v0 - g*t" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+v_0+-+gt"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1266" >v - скорость<br />
v_0 - начальная скорость<br />
g - ускорение свободного падения <br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+v0+-+g%2At">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="v0">v0</option><option  value="g">g</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+v0+-+g%2At&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/skorost-uskorenie-vremja.html">Скорость, ускорение, время</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/skorost-uskorenie-vremja.html"><img title="v - скорость
a - ускорение
t - время" alt="v = a * t" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+a+t"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1268" >v - скорость<br />
a - ускорение<br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+a+%2A+t">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="a">a</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+a+%2A+t&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/skorost-svobodno-padayushchego-tela.html">Скорость свободно падающего тела</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/skorost-svobodno-padayushchego-tela.html"><img title="v - скорость
g - ускорение свободного падения 
t - время" alt="v = g * t" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+g++t"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1270" >v - скорость<br />
g - ускорение свободного падения <br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+g+%2A+t">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="g">g</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+g+%2A+t&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie.html">Центростремительное ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie.html"><img title="a - центростремительное ускорение
v - скорость
R - радиус" alt="a = v^2 / R" src="http://chart.apis.google.com/chart?cht=tx&chl=a+%3D+%7Bv%5E2+%5Cover+R%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1272" >a - центростремительное ускорение<br />
v - скорость<br />
R - радиус</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a+%3D+v%5E2+%2F+R">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">R</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a">a</option><option selected = "SELECTED" value="v">v</option><option  value="R">R</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a+%3D+v%5E2+%2F+R&find=a"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/uglovaja-skorost.html">Угловая скорость</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/uglovaja-skorost.html"><img title="ω - угловая скорость
φ - угол 
t - время" alt="ω = φ / t" src="http://chart.apis.google.com/chart?cht=tx&chl=%5Comega+%3D+%7B%5Cphi++%5Cover+t%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1274" >ω - угловая скорость<br />
φ - угол <br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=%CF%89+%3D+%CF%86+%2F+t">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">ω</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">ω</a></li><li><a class="choose_variable" href="#">φ</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="ω">ω</option><option selected = "SELECTED" value="φ">φ</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=%CF%89+%3D+%CF%86+%2F+t&find=ω"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">ω</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomernoe-krugovoe-dvizhenie.html">Равномерное круговое движение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomernoe-krugovoe-dvizhenie.html"><img title="l - длина дуги окружности
R - радиус 
φ - угол" alt="l = R * φ" src="http://chart.apis.google.com/chart?cht=tx&chl=l+%3D+R++%5Cphi+"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1276" >l - длина дуги окружности<br />
R - радиус <br />
φ - угол</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=l+%3D+R+%2A+%CF%86">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">l</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">l</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">φ</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="l">l</option><option selected = "SELECTED" value="R">R</option><option  value="φ">φ</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=l+%3D+R+%2A+%CF%86&find=l"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">l</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomernoe-krugovoe-dvizhenie-lineinaja-skorost.html">Равномерное круговое движение: линейная скорость</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/ravnomernoe-krugovoe-dvizhenie-lineinaja-skorost.html"><img title="v - линейная скорость
R - радиус 
ω - угловая скорость" alt="v = R * ω" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+R++%5Comega"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1278" >v - линейная скорость<br />
R - радиус <br />
ω - угловая скорость</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+R+%2A+%CF%89">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">ω</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="R">R</option><option  value="ω">ω</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+R+%2A+%CF%89&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/period-vrashchenija.html">Период вращения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/period-vrashchenija.html"><img title="T - период 
t - время 
N - число вращений" alt="T = t / N" src="http://chart.apis.google.com/chart?cht=tx&chl=T+%3D+%7Bt+%5Cover+N%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1280" >T - период <br />
t - время <br />
N - число вращений</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=T+%3D+t+%2F+N">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">T</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">T</a></li><li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">N</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="T">T</option><option selected = "SELECTED" value="t">t</option><option  value="N">N</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=T+%3D+t+%2F+N&find=T"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">T</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/period-vrashchenija-2.html">Период вращения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/period-vrashchenija-2.html"><img title="T - период 
R - радиус 
v - линейная скорость" alt="T = 2 π R / v" src="http://chart.apis.google.com/chart?cht=tx&chl=T+%3D+%7B2+%5Cpi+R+%5Cover+v%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1282" >T - период <br />
R - радиус <br />
v - линейная скорость</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=T+%3D+2+%CF%80+R+%2F+v">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">T</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">T</a></li><li><a class="choose_variable" href="#">π</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">v</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="T">T</option><option selected = "SELECTED" value="π">π</option><option  value="R">R</option><option  value="v">v</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=T+%3D+2+%CF%80+R+%2F+v&find=T"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">T</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/period-vrashchenija-3.html">Период вращения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/period-vrashchenija-3.html"><img title="T - период 
ω - угловая скорость" alt="T = 2 π / ω" src="http://chart.apis.google.com/chart?cht=tx&chl=T+%3D+%7B2+%5Cpi+%5Cover+%5Comega%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1284" >T - период <br />
ω - угловая скорость</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=T+%3D+2+%CF%80+%2F+%CF%89">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">T</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">T</a></li><li><a class="choose_variable" href="#">π</a></li><li><a class="choose_variable" href="#">ω</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="T">T</option><option selected = "SELECTED" value="π">π</option><option  value="ω">ω</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=T+%3D+2+%CF%80+%2F+%CF%89&find=T"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">T</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie-2.html">Центростремительное ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie-2.html"><img title="a - центростремительное ускорение
R - радиус 
T - период вращения" alt="a = 4 π^2*R / T^2" src="http://chart.apis.google.com/chart?cht=tx&chl=a+%3D+%7B4+%5Cpi%5E2+R+%5Cover+T%5E2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1286" >a - центростремительное ускорение<br />
R - радиус <br />
T - период вращения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a+%3D+4+%CF%80%5E2%2AR+%2F+T%5E2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">π</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">T</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a">a</option><option selected = "SELECTED" value="π">π</option><option  value="R">R</option><option  value="T">T</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a+%3D+4+%CF%80%5E2%2AR+%2F+T%5E2&find=a"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie-3.html">Центростремительное ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie-3.html"><img title="a - центростремительное ускорение
R - радиус 
n - частота вращения" alt="a = 4 π^2*R * n^2" src="http://chart.apis.google.com/chart?cht=tx&chl=a+%3D+4+%5Cpi%5E2Rn%5E2"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1288" >a - центростремительное ускорение<br />
R - радиус <br />
n - частота вращения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a+%3D+4+%CF%80%5E2%2AR+%2A+n%5E2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">π</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">n</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a">a</option><option selected = "SELECTED" value="π">π</option><option  value="R">R</option><option  value="n">n</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a+%3D+4+%CF%80%5E2%2AR+%2A+n%5E2&find=a"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/chastota-vrashchenija.html">Частота вращения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/chastota-vrashchenija.html"><img title="n - частота вращения
T - период вращения" alt="n = 1 / T" src="http://chart.apis.google.com/chart?cht=tx&chl=n+%3D+%7B1+%5Cover+T%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1290" >n - частота вращения<br />
T - период вращения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=n+%3D+1+%2F+T">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">n</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">n</a></li><li><a class="choose_variable" href="#">T</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="n">n</option><option selected = "SELECTED" value="T">T</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=n+%3D+1+%2F+T&find=n"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">n</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie-4.html">Центростремительное ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/centrostremitelnoe-uskorenie-4.html"><img title="a - центростремительное ускорение
ω - угловая скорость
R - радиус" alt="a = ω^2 * R" src="http://chart.apis.google.com/chart?cht=tx&chl=a+%3D+%5Comega%5E2+R"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1292" >a - центростремительное ускорение<br />
ω - угловая скорость<br />
R - радиус</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a+%3D+%CF%89%5E2+%2A+R">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">ω</a></li><li><a class="choose_variable" href="#">R</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a">a</option><option selected = "SELECTED" value="ω">ω</option><option  value="R">R</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a+%3D+%CF%89%5E2+%2A+R&find=a"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/dalnost-broska-tela-broshennogo-pod-uglom-k-gorizontu.html">Дальность броска тела, брошенного под углом к горизонту</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/dalnost-broska-tela-broshennogo-pod-uglom-k-gorizontu.html"><img title="x - координата (дальность)
v_0 - начальная скорость
t - время 
α - угол" alt="x = v0 * t *cos(α)" src="http://chart.apis.google.com/chart?cht=tx&chl=x+%3D+v_0+t+cos%28%5Calpha%29"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1294" >x - координата (дальность)<br />
v_0 - начальная скорость<br />
t - время <br />
α - угол</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=x+%3D+v0+%2A+t+%2Acos%28%CE%B1%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">x</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">x</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">α</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="x">x</option><option selected = "SELECTED" value="v0">v0</option><option  value="t">t</option><option  value="α">α</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=x+%3D+v0+%2A+t+%2Acos%28%CE%B1%29&find=x"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">x</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vysota-podema-tela-broshennogo-pod-uglom-k-gorizontu.html">Высота подъема тела, брошенного под углом к горизонту</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vysota-podema-tela-broshennogo-pod-uglom-k-gorizontu.html"><img title="y - координата (высота подъема )
v_0 - начальная скорость
t - время 
g - ускорение свободного падения 
α - угол" alt="y = v0* t * sin(α) - gt^2/2" src="http://chart.apis.google.com/chart?cht=tx&chl=y+%3D+v_0+t++sin%28%5Calpha%29+-+%7Bgt%5E2+%5Cover+2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1296" >y - координата (высота подъема )<br />
v_0 - начальная скорость<br />
t - время <br />
g - ускорение свободного падения <br />
α - угол</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=y+%3D+v0%2A+t+%2A+sin%28%CE%B1%29+-+gt%5E2%2F2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">y</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">y</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">α</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="y">y</option><option selected = "SELECTED" value="v0">v0</option><option  value="t">t</option><option  value="α">α</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=y+%3D+v0%2A+t+%2A+sin%28%CE%B1%29+-+gt%5E2%2F2&find=y"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">y</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vertikalnaja-skorost-tela-broshennogo-pod-uglom-k-gorizontu.html">Вертикальная скорость тела, брошенного под углом к горизонту</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vertikalnaja-skorost-tela-broshennogo-pod-uglom-k-gorizontu.html"><img title="v_y  - вертикальная скорость
v_0 - начальная скорость
α - угол
g - ускорение свободного падения 
t - время" alt="v_y = v0 * sin(α) - gt" src="http://chart.apis.google.com/chart?cht=tx&chl=v_y+%3D+v_0+%2A+sin%28%5Calpha%29+-+gt"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1298" >v_y  - вертикальная скорость<br />
v_0 - начальная скорость<br />
α - угол<br />
g - ускорение свободного падения <br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v_y+%3D+v0+%2A+sin%28%CE%B1%29+-+gt">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v_y</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v_y</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">α</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v_y">v_y</option><option selected = "SELECTED" value="v0">v0</option><option  value="α">α</option><option  value="g">g</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v_y+%3D+v0+%2A+sin%28%CE%B1%29+-+gt&find=v_y"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v_y</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/maksimalnaja-vysota-podema-tela-broshennogo-pod-uglom-k-gorizontu.html">Максимальная высота подъема тела, брошенного под углом к горизонту</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/maksimalnaja-vysota-podema-tela-broshennogo-pod-uglom-k-gorizontu.html"><img title="h_макс - максимальная высота
v_0 - начальная скорость
α - угол
g - ускорение свободного падения" alt="h_max = v0^2 sin(α)^2/ (2g)" src="http://chart.apis.google.com/chart?cht=tx&chl=h_{\cyr%20maks}+%3D%7B+v_0%5E2+%2A+sin%28%5Calpha%29%5E2%5Cover+2g%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1300" >h_макс - максимальная высота<br />
v_0 - начальная скорость<br />
α - угол<br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=h_%D0%BC%D0%B0%D0%BA%D1%81+%3D+v0%5E2+sin%28%CE%B1%29%5E2%2F+%282g%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">h_макс</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">h_макс</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">α</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="h_макс">h_макс</option><option selected = "SELECTED" value="v0">v0</option><option  value="α">α</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=h_%D0%BC%D0%B0%D0%BA%D1%81+%3D+v0%5E2+sin%28%CE%B1%29%5E2%2F+%282g%29&find=h_макс"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">h_макс</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/obshchee-vremja-dvizhenija-tela-broshennogo-pod-uglom-k-gorizontu.html">Общее время движения тела, брошенного под углом к горизонту</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/obshchee-vremja-dvizhenija-tela-broshennogo-pod-uglom-k-gorizontu.html"><img title="t - время 
v_0 - начальная скорость
α - угол
g - ускорение свободного падения" alt="t = 2 v0 * sin(α)/g" src="http://chart.apis.google.com/chart?cht=tx&chl=t+%3D+%7B2+v_0+%2A+sin%28%5Calpha%29%5Cover+g%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1302" >t - время <br />
v_0 - начальная скорость<br />
α - угол<br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=t+%3D+2+v0+%2A+sin%28%CE%B1%29%2Fg">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">t</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">α</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="t">t</option><option selected = "SELECTED" value="v0">v0</option><option  value="α">α</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=t+%3D+2+v0+%2A+sin%28%CE%B1%29%2Fg&find=t"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">t</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/maksimalnaja-dalnost-broska-tela-broshennogo-pod-uglom-k-gorizontu.html">Максимальная дальность броска тела, брошенного под углом к горизонту</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/maksimalnaja-dalnost-broska-tela-broshennogo-pod-uglom-k-gorizontu.html"><img title="s_макс - максимальная дальность
v_0 - начальная скорость
g - ускорение свободного падения" alt="s_max = v0^2/g" src="http://chart.apis.google.com/chart?cht=tx&chl=s_{\cyr%20maks}+%3D+%7Bv_0%5E2+%5Cover+g%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1304" >s_макс - максимальная дальность<br />
v_0 - начальная скорость<br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=s_%D0%BC%D0%B0%D0%BA%D1%81+%3D+v0%5E2%2Fg">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">s_макс</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">s_макс</a></li><li><a class="choose_variable" href="#">v0</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="s_макс">s_макс</option><option selected = "SELECTED" value="v0">v0</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=s_%D0%BC%D0%B0%D0%BA%D1%81+%3D+v0%5E2%2Fg&find=s_макс"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">s_макс</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/dalnost-broska-tela-broshennogo-gorizontalno.html">Дальность броска тела, брошенного горизонтально</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/dalnost-broska-tela-broshennogo-gorizontalno.html"><img title="x - координата (дальность)
x_0 - начальная координата
v - скорость
t - время" alt="x = x0 + v*t" src="http://chart.apis.google.com/chart?cht=tx&chl=x+%3D+x_0+%2B+vt"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1306" >x - координата (дальность)<br />
x_0 - начальная координата<br />
v - скорость<br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=x+%3D+x0+%2B+v%2At">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">x</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">x</a></li><li><a class="choose_variable" href="#">x0</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="x">x</option><option selected = "SELECTED" value="x0">x0</option><option  value="v">v</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=x+%3D+x0+%2B+v%2At&find=x"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">x</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vysota-podema-tela-broshennogo-gorizontalno.html">Высота подъема тела, брошенного горизонтально</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/vysota-podema-tela-broshennogo-gorizontalno.html"><img title="y - координата (высота подъема)
y_0 - начальная координата (высота)
g - ускорение свободного падения 
t - время" alt="y = y0 - g*t^2/2" src="http://chart.apis.google.com/chart?cht=tx&chl=y+%3D+y_0+-+%7Bgt%5E2+%5Cover++2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1308" >y - координата (высота подъема)<br />
y_0 - начальная координата (высота)<br />
g - ускорение свободного падения <br />
t - время</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=y+%3D+y0+-+g%2At%5E2%2F2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">y</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">y</a></li><li><a class="choose_variable" href="#">y0</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">t</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="y">y</option><option selected = "SELECTED" value="y0">y0</option><option  value="g">g</option><option  value="t">t</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span>



			<div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=y+%3D+y0+-+g%2At%5E2%2F2&find=y"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">y</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/obshchee-vremja-dvizhenija-tela-broshennogo-gorizontalno.html">Общее время движения тела, брошенного горизонтально</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/kinematika/obshchee-vremja-dvizhenija-tela-broshennogo-gorizontalno.html"><img title="t_макс - максимальное время
h - высота
g - ускорение свободного падения" alt="t_max = saknis(2*h/g)" src="http://chart.apis.google.com/chart?cht=tx&chl=t_{\cyr%20maks}+%3D+%5Csqrt%7B2h%5Cover+g%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1310" >t_макс - максимальное время<br />
h - высота<br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=t_%D0%BC%D0%B0%D0%BA%D1%81+%3D+saknis%282%2Ah%2Fg%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">t_макс</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">t_макс</a></li><li><a class="choose_variable" href="#">h</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="t_макс">t_макс</option><option selected = "SELECTED" value="h">h</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span>
			</div>
						<div style="margin-top:2px;"><a href="http://www.indigomath.ru/formuly-po-fizike/statika/moment-sily-rychag.html">Момент силы, рычаг</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/statika/moment-sily-rychag.html"><img title="F - сила
M - момент силы 
d - расстояние (плечо силы)" alt="M = Fd" src="http://chart.apis.google.com/chart?cht=tx&chl=M+%3D+Fd"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_730" >F - сила<br />
M - момент силы <br />
d - расстояние (плечо силы)</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=M+%3D+Fd">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">M</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">M</a></li><li><a class="choose_variable" href="#">F</a></li><li><a class="choose_variable" href="#">d</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="M">M</option><option selected = "SELECTED" value="F">F</option><option  value="d">d</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=M+%3D+Fd&find=M"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">M</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/statika/plecho-sily.html">Плечо силы</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/statika/plecho-sily.html"><img title="d - плечо силы
r - радиус" alt="d = r sin(a)" src="http://chart.apis.google.com/chart?cht=tx&chl=d+%3D+r+sin%28a%29"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_988" >d - плечо силы<br />
r - радиус</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=d+%3D+r+sin%28a%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">d</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">d</a></li><li><a class="choose_variable" href="#">r</a></li><li><a class="choose_variable" href="#">a</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="d">d</option><option selected = "SELECTED" value="r">r</option><option  value="a">a</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=d+%3D+r+sin%28a%29&find=d"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">d</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/statika/pravilo-rychaga.html">Правило рычага</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/statika/pravilo-rychaga.html"><img title="F1, F2 - силы
d1, d2 - плечи силы " alt="F1/F2 = d2/d1" src="http://chart.apis.google.com/chart?cht=tx&chl=%7BF_1%5Cover+F_2%7D+%3D+%7Bd_2%5Cover+d_1%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_992" >F1, F2 - силы<br />
d1, d2 - плечи силы </div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F1%2FF2+%3D+d2%2Fd1">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F1</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F1</a></li><li><a class="choose_variable" href="#">F2</a></li><li><a class="choose_variable" href="#">d2</a></li><li><a class="choose_variable" href="#">d1</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F1">F1</option><option selected = "SELECTED" value="F2">F2</option><option  value="d2">d2</option><option  value="d1">d1</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F1%2FF2+%3D+d2%2Fd1&find=F1"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F1</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/statika/moment-inercii-tela-vrashchenija.html">Момент инерции тела вращения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/statika/moment-inercii-tela-vrashchenija.html"><img title="J - момент инерции 
m - масса 
r - радиус" alt="J = mr^2" src="http://chart.apis.google.com/chart?cht=tx&chl=J+%3D+mr%5E2"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_990" >J - момент инерции <br />
m - масса <br />
r - радиус</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=J+%3D+mr%5E2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">J</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">J</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">r</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="J">J</option><option selected = "SELECTED" value="m">m</option><option  value="r">r</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=J+%3D+mr%5E2&find=J"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">J</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/statika/davlenie.html">Давление</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/statika/davlenie.html"><img title="p - давление 
F - сила
S - площадь" alt="p = F / S" src="http://chart.apis.google.com/chart?cht=tx&chl=p+%3D+%7BF+%5Cover++S%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_996" >p - давление <br />
F - сила<br />
S - площадь</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=p+%3D+F+%2F+S">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">p</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">p</a></li><li><a class="choose_variable" href="#">F</a></li><li><a class="choose_variable" href="#">S</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="p">p</option><option selected = "SELECTED" value="F">F</option><option  value="S">S</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span>

			<div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=p+%3D+F+%2F+S&find=p"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">p</span>'</a> </div></div><div class="clearfix"></div><br /></div></div>
						<div class="col-md-6 hidden-xs hidden-sm" style="text-align: right;">

			<div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=t_%D0%BC%D0%B0%D0%BA%D1%81+%3D+saknis%282%2Ah%2Fg%29&find=t_макс"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">t_макс</span>'</a> </div></div><div class="clearfix"></div><br /></div></div>
						<div class="col-md-6 hidden-xs hidden-sm" style="text-align: right;">
</div>
						
						<div style="margin-top:2px;"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/inertnost-massa-uskorenie.html">Инертность, масса, ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/inertnost-massa-uskorenie.html"><img title="m1, m2 - массы взаимодействующих тел
a1, a2 - ускорение" alt="a1/a2 = m2/m1" src="http://chart.apis.google.com/chart?cht=tx&chl=%7Ba_1%5Cover+a_2%7D+%3D+%7Bm_2%5Cover+m_1%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1522" >m1, m2 - массы взаимодействующих тел<br />
a1, a2 - ускорение</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a1%2Fa2+%3D+m2%2Fm1">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a1</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a1</a></li><li><a class="choose_variable" href="#">a2</a></li><li><a class="choose_variable" href="#">m2</a></li><li><a class="choose_variable" href="#">m1</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a1">a1</option><option selected = "SELECTED" value="a2">a2</option><option  value="m2">m2</option><option  value="m1">m1</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a1%2Fa2+%3D+m2%2Fm1&find=a1"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a1</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-massa-uskorenie.html">Сила, масса,  ускорение</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-massa-uskorenie.html"><img title="F - сила
m - масса 
a - ускорение" alt="F = ma" src="http://chart.apis.google.com/chart?cht=tx&chl=F+%3D+ma"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1524" >F - сила<br />
m - масса <br />
a - ускорение</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F+%3D+ma">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">a</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F">F</option><option selected = "SELECTED" value="m">m</option><option  value="a">a</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F+%3D+ma&find=F"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-tjazhesti.html">Сила тяжести</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-tjazhesti.html"><img title="N - сила тяжести
m - масса 
g - ускорение свободного падения" alt="N = mg" src="http://chart.apis.google.com/chart?cht=tx&chl=N+%3D+mg"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1526" >N - сила тяжести<br />
m - масса <br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=N+%3D+mg">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">N</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">N</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="N">N</option><option selected = "SELECTED" value="m">m</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=N+%3D+mg&find=N"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">N</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-trenija.html">Сила трения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-trenija.html"><img title="F_тр - сила трения 
μ - коэффициент трения
N - сила тяжести" alt="F_tr = μN" src="http://chart.apis.google.com/chart?cht=tx&chl=F_{\cyr%20tr}+%3D+%5Cmu+N"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1528" >F_тр - сила трения <br />
μ - коэффициент трения<br />
N - сила тяжести</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F_%D1%82%D1%80+%3D+%CE%BCN">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F_тр</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F_тр</a></li><li><a class="choose_variable" href="#">μ</a></li><li><a class="choose_variable" href="#">N</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F_тр">F_тр</option><option selected = "SELECTED" value="μ">μ</option><option  value="N">N</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F_%D1%82%D1%80+%3D+%CE%BCN&find=F_тр"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F_тр</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-trenija-2.html">Сила трения </a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-trenija-2.html"><img title="F_тр - сила трения 
μ - коэффициент трения
m - масса 
g - ускорение свободного падения" alt="F_tr = μmg" src="http://chart.apis.google.com/chart?cht=tx&chl=F_{\cyr%20tr}+%3D+%5Cmu+m+g"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1530" >F_тр - сила трения <br />
μ - коэффициент трения<br />
m - масса <br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F_%D1%82%D1%80+%3D+%CE%BCmg">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F_тр</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F_тр</a></li><li><a class="choose_variable" href="#">μ</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F_тр">F_тр</option><option selected = "SELECTED" value="μ">μ</option><option  value="m">m</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F_%D1%82%D1%80+%3D+%CE%BCmg&find=F_тр"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F_тр</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/zakon-vsemirnogo-tjagotenija.html">Закон всемирного тяготения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/zakon-vsemirnogo-tjagotenija.html"><img title="F - сила
G - гравитационная постоянная
m1, m2 - массы взаимодействующих тел
r - расстояние" alt="F = G(m1*m2)/r^2" src="http://chart.apis.google.com/chart?cht=tx&chl=F+%3D+%7BGm_1m_2%5Cover+r%5E2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1532" >F - сила<br />
G - гравитационная постоянная<br />
m1, m2 - массы взаимодействующих тел<br />
r - расстояние</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F+%3D+G%28m1%2Am2%29%2Fr%5E2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F</a></li><li><a class="choose_variable" href="#">G</a></li><li><a class="choose_variable" href="#">m1</a></li><li><a class="choose_variable" href="#">m2</a></li><li><a class="choose_variable" href="#">r</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F">F</option><option selected = "SELECTED" value="G">G</option><option  value="m1">m1</option><option  value="m2">m2</option><option  value="r">r</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F+%3D+G%28m1%2Am2%29%2Fr%5E2&find=F"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/centrostremitelnoe-uskorenie-sputnika.html">Центростремительное ускорение спутника</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/centrostremitelnoe-uskorenie-sputnika.html"><img title="a - ускорение
v - скорость
R - радиус земли
h - высота" alt="a = v^2/(R+h)" src="http://chart.apis.google.com/chart?cht=tx&chl=a+%3D+%7Bv%5E2%5Cover+R%2Bh%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1534" >a - ускорение<br />
v - скорость<br />
R - радиус земли<br />
h - высота</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a+%3D+v%5E2%2F%28R%2Bh%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">h</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a">a</option><option selected = "SELECTED" value="v">v</option><option  value="R">R</option><option  value="h">h</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a+%3D+v%5E2%2F%28R%2Bh%29&find=a"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/skorost-sputnika.html">Скорость спутника</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/skorost-sputnika.html"><img title="v - скорость
G - гравитационная постоянная
M - масса Земли
R - радиус земли
h - высота" alt="v = saknis(G*M/(R+h))" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+%5Csqrt%7B%7BGM%5Cover+R%2Bh%7D%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1536" >v - скорость<br />
G - гравитационная постоянная<br />
M - масса Земли<br />
R - радиус земли<br />
h - высота</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+saknis%28G%2AM%2F%28R%2Bh%29%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">G</a></li><li><a class="choose_variable" href="#">M</a></li><li><a class="choose_variable" href="#">R</a></li><li><a class="choose_variable" href="#">h</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="G">G</option><option  value="M">M</option><option  value="R">R</option><option  value="h">h</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+saknis%28G%2AM%2F%28R%2Bh%29%29&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/pervaja-kosmicheskaja-skorost-dvizhenie-po-krugovoi-orbite.html">Первая космическая скорость (движение по круговой орбите)</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/pervaja-kosmicheskaja-skorost-dvizhenie-po-krugovoi-orbite.html"><img title="v - скорость
g - ускорение свободного падения 
R - радиус земли" alt="v = saknis(gR)" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+%5Csqrt%7BgR%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1538" >v - скорость<br />
g - ускорение свободного падения <br />
R - радиус земли</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+saknis%28gR%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">R</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="g">g</option><option  value="R">R</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+saknis%28gR%29&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/vtoraja-kosmicheskaja-skorost-preodolenie-gravitacii.html">Вторая космическая скорость (преодоление гравитации)</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/vtoraja-kosmicheskaja-skorost-preodolenie-gravitacii.html"><img title="v - скорость
g - ускорение свободного падения 
R - радиус земли" alt="v = saknis(2gR)" src="http://chart.apis.google.com/chart?cht=tx&chl=v+%3D+%5Csqrt%7B2gR%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1540" >v - скорость<br />
g - ускорение свободного падения <br />
R - радиус земли</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=v+%3D+saknis%282gR%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">v</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">R</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="v">v</option><option selected = "SELECTED" value="g">g</option><option  value="R">R</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=v+%3D+saknis%282gR%29&find=v"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">v</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/tretii-zakon-keplera.html">Третий закон Кеплера</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/tretii-zakon-keplera.html"><img title="T1, T2 - периоды обращения двух планет вокруг Солнца
a1, a2 - длины больших полуосей их орбит" alt="T1^2/T2^2 = a1^3/a2^3" src="http://chart.apis.google.com/chart?cht=tx&chl=%7BT_1%5E2%5Cover+T_2%5E2%7D+%3D+%7Ba_1%5E3%5Cover+a_2%5E3%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1542" >T1, T2 - периоды обращения двух планет вокруг Солнца<br />
a1, a2 - длины больших полуосей их орбит</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=T1%5E2%2FT2%5E2+%3D+a1%5E3%2Fa2%5E3">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">T1</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">T1</a></li><li><a class="choose_variable" href="#">T2</a></li><li><a class="choose_variable" href="#">a1</a></li><li><a class="choose_variable" href="#">a2</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="T1">T1</option><option selected = "SELECTED" value="T2">T2</option><option  value="a1">a1</option><option  value="a2">a2</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=T1%5E2%2FT2%5E2+%3D+a1%5E3%2Fa2%5E3&find=T1"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">T1</span>'</a> </div></div><div class="clearfix"></div><br />
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><img title="" alt="a1^3/a2^3 = (T1^2*(M1+m1))/(T2^2*(M2+m2))" src="http://chart.apis.google.com/chart?cht=tx&chl=%7Ba_1%5E3%5Cover+a_2%5E3%7D+%3D+%7BT_1%5E2%28M_1%2Bm_1%29+%5Cover+T_2%5E2%28M_2%2Bm_2%29%7D"></div>
			<div class="s_formula_links pull-left">
				</div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=a1%5E3%2Fa2%5E3+%3D+%28T1%5E2%2A%28M1%2Bm1%29%29%2F%28T2%5E2%2A%28M2%2Bm2%29%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">a1</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">a1</a></li><li><a class="choose_variable" href="#">a2</a></li><li><a class="choose_variable" href="#">T1</a></li><li><a class="choose_variable" href="#">M1</a></li><li><a class="choose_variable" href="#">m1</a></li><li><a class="choose_variable" href="#">T2</a></li><li><a class="choose_variable" href="#">M2</a></li><li><a class="choose_variable" href="#">m2</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="a1">a1</option><option selected = "SELECTED" value="a2">a2</option><option  value="T1">T1</option><option  value="M1">M1</option><option  value="m1">m1</option><option  value="T2">T2</option><option  value="M2">M2</option><option  value="m2">m2</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=a1%5E3%2Fa2%5E3+%3D+%28T1%5E2%2A%28M1%2Bm1%29%29%2F%28T2%5E2%2A%28M2%2Bm2%29%29&find=a1"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">a1</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/uskorenie-svobodnogo-padenija-na-poverhnosti-zemli.html">Ускорение свободного падения на поверхности земли</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/uskorenie-svobodnogo-padenija-na-poverhnosti-zemli.html"><img title="g - ускорение свободного падения 
G - гравитационная постоянная
M - масса Земли
R - радиус земли" alt="g = G*M/R^2" src="http://chart.apis.google.com/chart?cht=tx&chl=g+%3D+%7BGM%5Cover+R%5E2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1544" >g - ускорение свободного падения <br />
G - гравитационная постоянная<br />
M - масса Земли<br />
R - радиус земли</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=g+%3D+G%2AM%2FR%5E2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">g</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">G</a></li><li><a class="choose_variable" href="#">M</a></li><li><a class="choose_variable" href="#">R</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="g">g</option><option selected = "SELECTED" value="G">G</option><option  value="M">M</option><option  value="R">R</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=g+%3D+G%2AM%2FR%5E2&find=g"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">g</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/ves-tela.html">Вес тела</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/ves-tela.html"><img title="P - вес 
m - масса 
g - ускорение свободного падения" alt="P = mg" src="http://chart.apis.google.com/chart?cht=tx&chl=P+%3D+mg"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1546" >P - вес <br />
m - масса <br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=P+%3D+mg">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">P</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">P</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="P">P</option><option selected = "SELECTED" value="m">m</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=P+%3D+mg&find=P"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">P</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/ves-tela-nevesomost.html">Вес тела: невесомость</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/ves-tela-nevesomost.html"><img title="Вес тела, когда ускорение тела совпадает по направлению с ускорением свободного падения
P - вес 
m - масса 
g - ускорение свободного падения 
a - ускорение" alt="P = m(g-a)" src="http://chart.apis.google.com/chart?cht=tx&chl=P+%3D+m%28g-a%29"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1548" >Вес тела, когда ускорение тела совпадает по направлению с ускорением свободного падения<br />
P - вес <br />
m - масса <br />
g - ускорение свободного падения <br />
a - ускорение</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=P+%3D+m%28g-a%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">P</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">P</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">a</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="P">P</option><option selected = "SELECTED" value="m">m</option><option  value="g">g</option><option  value="a">a</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=P+%3D+m%28g-a%29&find=P"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">P</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/ves-tela-peregruzka.html">Вес тела: перегрузка</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/ves-tela-peregruzka.html"><img title="Вес тела, когда ускорение тела противоположно направлению ускорения свободного падения
P - вес 
m - масса 
g - ускорение свободного падения 
a - ускорение" alt="P = m(g+a)" src="http://chart.apis.google.com/chart?cht=tx&chl=P+%3D+m%28g%2Ba%29"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1550" >Вес тела, когда ускорение тела противоположно направлению ускорения свободного падения<br />
P - вес <br />
m - масса <br />
g - ускорение свободного падения <br />
a - ускорение</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=P+%3D+m%28g%2Ba%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">P</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">P</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">g</a></li><li><a class="choose_variable" href="#">a</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="P">P</option><option selected = "SELECTED" value="m">m</option><option  value="g">g</option><option  value="a">a</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=P+%3D+m%28g%2Ba%29&find=P"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">P</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/vremja-tormozhenija.html">Время торможения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/vremja-tormozhenija.html"><img title="t - время 
m - масса 
v - скорость
F_тр - сила трения" alt="t = mv/F_tr" src="http://chart.apis.google.com/chart?cht=tx&chl=t+%3D+%7Bmv%5Cover+F_{\cyr%20tr}%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1552" >t - время <br />
m - масса <br />
v - скорость<br />
F_тр - сила трения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=t+%3D+mv%2FF_%D1%82%D1%80">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">t</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">F_тр</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="t">t</option><option selected = "SELECTED" value="m">m</option><option  value="v">v</option><option  value="F_тр">F_тр</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=t+%3D+mv%2FF_%D1%82%D1%80&find=t"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">t</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/vremja-tormozhenija-2.html">Время торможения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/vremja-tormozhenija-2.html"><img title="t - время 
v - скорость
μ - коэффициент трения
g - ускорение свободного падения" alt="t = v/μg" src="http://chart.apis.google.com/chart?cht=tx&chl=t+%3D+%7Bv%5Cover+%5Cmu+g%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1554" >t - время <br />
v - скорость<br />
μ - коэффициент трения<br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=t+%3D+v%2F%CE%BCg">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">t</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">t</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">μ</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="t">t</option><option selected = "SELECTED" value="v">v</option><option  value="μ">μ</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=t+%3D+v%2F%CE%BCg&find=t"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">t</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/put-tormozhenija-2.html">Путь торможения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/put-tormozhenija-2.html"><img title="s - путь
m - масса 
v - скорость
F_тр - сила трения" alt="s = mv^2/(2*F_tr)" src="http://chart.apis.google.com/chart?cht=tx&chl=s+%3D+%7Bmv%5E2%5Cover+2F_{\cyr%20tr}%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1558" >s - путь<br />
m - масса <br />
v - скорость<br />
F_тр - сила трения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=s+%3D+mv%5E2%2F%282%2AF_%D1%82%D1%80%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">s</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">s</a></li><li><a class="choose_variable" href="#">m</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">F_тр</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="s">s</option><option selected = "SELECTED" value="m">m</option><option  value="v">v</option><option  value="F_тр">F_тр</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=s+%3D+mv%5E2%2F%282%2AF_%D1%82%D1%80%29&find=s"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">s</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/put-tormozhenija.html">Путь торможения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/put-tormozhenija.html"><img title="s - путь
v - скорость
μ - коэффициент трения
g - ускорение свободного падения" alt="s = v^2/(2μg)" src="http://chart.apis.google.com/chart?cht=tx&chl=s+%3D+%7Bv%5E2%5Cover+2%5Cmu+g%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1556" >s - путь<br />
v - скорость<br />
μ - коэффициент трения<br />
g - ускорение свободного падения</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=s+%3D+v%5E2%2F%282%CE%BCg%29">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">s</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">s</a></li><li><a class="choose_variable" href="#">v</a></li><li><a class="choose_variable" href="#">μ</a></li><li><a class="choose_variable" href="#">g</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="s">s</option><option selected = "SELECTED" value="v">v</option><option  value="μ">μ</option><option  value="g">g</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=s+%3D+v%5E2%2F%282%CE%BCg%29&find=s"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">s</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-trenija-kachenija.html">Сила трения качения</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-trenija-kachenija.html"><img title="F_тр - сила трения качения
μ - коэффициент трения качения
N - сила тяжести
R - радиус" alt="F_tr = μN/R" src="http://chart.apis.google.com/chart?cht=tx&chl=F_{\cyr%20tr}+%3D+%7B%5Cmu+N+%5Cover+R%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1560" >F_тр - сила трения качения<br />
μ - коэффициент трения качения<br />
N - сила тяжести<br />
R - радиус</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F_%D1%82%D1%80+%3D+%CE%BCN%2FR">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F_тр</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F_тр</a></li><li><a class="choose_variable" href="#">μ</a></li><li><a class="choose_variable" href="#">N</a></li><li><a class="choose_variable" href="#">R</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F_тр">F_тр</option><option selected = "SELECTED" value="μ">μ</option><option  value="N">N</option><option  value="R">R</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F_%D1%82%D1%80+%3D+%CE%BCN%2FR&find=F_тр"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F_тр</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-uprugosti.html">Сила упругости</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/sila-uprugosti.html"><img title="F_упруг - сила упругости
k - жёсткость 
x - удлинение (сокращение) предмета" alt="F_tampr = k x" src="http://chart.apis.google.com/chart?cht=tx&chl=F_{\cyr%20uprug}+%3D+k+x"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_1562" >F_упруг - сила упругости<br />
k - жёсткость <br />
x - удлинение (сокращение) предмета</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=F_%D1%83%D0%BF%D1%80%D1%83%D0%B3+%3D+k+x">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">F_упруг</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">F_упруг</a></li><li><a class="choose_variable" href="#">k</a></li><li><a class="choose_variable" href="#">x</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="F_упруг">F_упруг</option><option selected = "SELECTED" value="k">k</option><option  value="x">x</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=F_%D1%83%D0%BF%D1%80%D1%83%D0%B3+%3D+k+x&find=F_упруг"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">F_упруг</span>'</a> </div></div><div class="clearfix"></div><br /><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/kineticheskaja-ehnergija-vrashchayushchegosja-tela.html">Кинетическая энергия вращающегося тела</a>
		<div class="s_formula_row">
			<div class="s_formula_img pull-left"><a href="http://www.indigomath.ru/formuly-po-fizike/dinamika/kineticheskaja-ehnergija-vrashchayushchegosja-tela.html"><img title="W_k - кинетическая энергия
J - момент инерции 
ω - угловая скорость" alt="W_k  = J ω^2/2" src="http://chart.apis.google.com/chart?cht=tx&chl=W_k++%3D+%7BJ+%5Comega%5E2%5Cover+2%7D"></a></div>
			<div class="s_formula_links pull-left">
				<div class="s_formula_expl" id="formula_994" >W_k - кинетическая энергия<br />
J - момент инерции <br />
ω - угловая скорость</div></div>
		</div><div class="pull-right" style="margin-top: 10px;"><span>
			<!-- Single button -->
				<span class="btn-group solve_url_holder" data-baseurl="http://www.indigomath.ru/smart/?m&formula=W_k++%3D+J+%CF%89%5E2%2F2">
					<span type="button" class="martynas btn btn-sm btn-default">
						Найти
					</span>
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="variable">W_k</span> &nbsp;&nbsp;<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu listed_variables">
					<li><a class="choose_variable" href="#">W_k</a></li><li><a class="choose_variable" href="#">J</a></li><li><a class="choose_variable" href="#">ω</a></li>
				  </ul>
				</span>
				Известно, что: <button type="button" class="btn btn-xs btn-success add_variable"><span class="glyphicon glyphicon-plus"></span></button>
				<br />
				<span class="hidden my_templates">
					<span class="exact_variable_template">
						<div class="exact_variable">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="exact_variable_name form-control" style="display: inline-block; width: auto;"><option  value="W_k">W_k</option><option selected = "SELECTED" value="J">J</option><option  value="ω">ω</option></select> = <span class="virtual_w"><input   onmouseup="remember_virt(this)" onclick="remember_virt(this)" onkeyup="remember_virt(this)"  size = "6" class="input_text_ virtual_i form-control input-sm exact_variable_value" id="" type=text name="" value=""><img class = "virtual_kb_img func_icon sam_sprite_abstract sam_sprite-kb" onclick = "show_vkb(this)" src = "typo3conf/ext/samson/templates/index_flex/blank.gif"/></span><span class="hidden variable_helper_container input-group-sm">
				&nbsp;&nbsp;<input  style="width: 70px; display: inline-block;  margin-right: -6px; padding: 2px 2px;" type="text" class="form-control variable_helper">
				<span class="input-group-btn_">
				  <button style="padding-left: 5px; padding-right: 7px;" class="btn btn-sm btn-default variable_helper_button" type="button"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</span>
			  </span> <button type="button" class="btn btn-xs btn-danger delete_variable"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					</span>
				</span>
				<div class="exact_variables">
					
				</div>
			</span><div class="solve_buttons"><a class="btn btn-primary btn solve_link" target="_blank" href="http://www.indigomath.ru/?id&m&formula=W_k++%3D+J+%CF%89%5E2%2F2&find=W_k"> <span class="glyphicon glyphicon-new-window"></span> Вычислить '<span class="solve_variable">W_k</span>'</a> </div></div><div class="clearfix"></div><br /></div></div>
						<div class="col-md-6 hidden-xs hidden-sm" style="text-align: right;">
<!-- Storas sonas -->
</div>
					  </div></div></div>
		
		</div>
	   
      </div> 
	  

	  
</div>
	
  </body>





