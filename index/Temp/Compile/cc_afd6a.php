<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>显示内容</title>
</head>
<body>
	<table>
		<p><?php echo $row['id'];?></p>
		<h2><?php echo $row['title'];?></h2>
		<h3><?php echo $row['content'];?></h3>
	</table>
	 
</body>
</html>