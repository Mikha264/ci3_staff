<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Staff_mysql_table to CodeIgniter</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
	</head>
<body>
<div id="container">
	<h1>Mr.Smirnov. Staff_mysql_table to CodeIgniter!</h1>

	<div id="body">
  <?php
print_r($data);
		?>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
<input class='button_main' type='button' value='В начало' onClick="location='/'">&nbsp;
</div>

</body>
</html>