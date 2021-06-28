<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Editor_mysql_table to CodeIgniter</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
<link href="../../css/modal_win.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
	<h1>Mr.Smirnov. Editor_mysql_table to CodeIgniter!</h1>
	<div id="body">
  <?php
 //-- http://ci3.w92134nu.beget.tech/user_guide/libraries/table.html
//-- http://ci3.w92134nu.beget.tech/user_guide/general/models.html

$form_section = <<<TMP_form_section
<!--NTAB--><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#openModal"><button>Новый сотрудник</button></a>&nbsp;
<input class='button_main' type='button' value='В начало' onClick="location='/'">&nbsp;
<input class='button_main' type='button' value='Штат сотрудников' onClick="location='/test_mysql_table/'">

<form method="post" accept-charset="utf-8" action="saveform">
      <table border=1 cellpadding=0 cellspacing=0 style='font-size:12px;width:800px;'>
      <tr><th>ФИО</th><th>Табельный номер</th><th>Номер телефона</th></tr>
      <!--input type=hidden name='mode' value='edit_formNM'-->
      <!--MAIN_NAVIG-->
      </table><input type='submit' name='sub_mit' value='Сохранить'><input type='reset' name='reset' value='Сброс'>
</form>
TMP_form_section;

if(isset($_POST['ntab'])){  $zn=$_POST['ntab']; }else{  $zn="";}
if(preg_match("/yes/",$zn)){          $repp =  "<font color=red>Sorry, there is already such a service number!</font>"; } else { $repp =  "";}

$page_cur = str_replace("<!--MAIN_NAVIG-->",$data,$form_section);
$page_cur = str_replace("<!--NTAB-->",$repp,$page_cur);
print $page_cur;

?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<!-------------------------------------MODAL_WIN---------------->
<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Закрыть" class="close">X</a>
		<h2>Добавление сотрудника</h2>
		<form name="contactForm" method="post" action="addmen/">
<input type="hidden" name="mode" value="add_navig_block">
<input type="hidden" name="id" value="">
<input type=text name="fio" size="50"> ФИО<br>
<input type=number name="numtab" size="30"> Табельный номер<br>
<input type=text name="phone" size="30"> Номер телефона
<input type="submit" name="sub_mit" value="Добавить" class='button_main'>
</form>
<input class='button_main' type='button' value='Отказаться' onClick="location='http://ci3.w92134nu.beget.tech/editor_mysql_table/'">
	</div>
</div>
<!------------------------------------------------------>
</body>
</html>