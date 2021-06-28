<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter 3.1</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="container">
	<h1>Mr.Smirnov. Welcome to CodeIgniter 3.1.</h1>

	<div id="body">
		<p> <a href="staff_mysql_table/">Таблица штата сотрудников</a></p>
		<p> <a href="editor_mysql_table/">Редактор штата сотрудников</a></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
<script language=JavaScript src="../../js/message_email.js"></script>
<script>
 mymessage('CI_3.1','CodeIgniter_3.1','index.php','no');
</script>
</html>