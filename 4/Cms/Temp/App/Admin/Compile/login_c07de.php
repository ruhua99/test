<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<script type='text/javascript' src='http://localhost/test/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/test/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/test/4';
		WEB = 'http://localhost/test/4/index.php';
		URL = 'http://localhost/test/4/index.php/Admin/Login/login';
		HDPHP = 'http://localhost/test/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/test/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/test/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/test/hdphp/hdphp/Extend';
		APP = 'http://localhost/test/4/index.php/Admin';
		CONTROL = 'http://localhost/test/4/index.php/Admin/Login';
		METH = 'http://localhost/test/4/index.php/Admin/Login/login';
		GROUP = 'http://localhost/test/4/Cms';
		TPL = 'http://localhost/test/4/Cms/App/Admin/Tpl';
		CONTROLTPL = 'http://localhost/test/4/Cms/App/Admin/Tpl/Login';
		STATIC = 'http://localhost/test/4/Static';
		PUBLIC = 'http://localhost/test/4/Cms/App/Admin/Tpl/Public';
		HISTORY = 'http://localhost/test/4/index.php/Admin/Login/out';
		HTTPREFERER = 'http://localhost/test/4/index.php/Admin/Login/out';
</script>
	<script type="text/javascript" src="http://localhost/test/4/Cms/App/Admin/Tpl/Login/js/js.js"></script>
</head>
<body>
    <form action="http://localhost/test/4/index.php/Admin/Login/login" method="post" class="hd-form"   >
	<table class="table1">
		<tr>
			<th>账号</th>
			<td><input type="text" name='username'></td>
		</tr>
		<tr>
			<th>密码</th>
			<td><input type="password" name='password'></td>
		</tr>
		<tr>
			<th>验证码</th>
			<td><input type="text" name="code"><img src="http://localhost/test/4/index.php/Admin/Login/code">
            <span id="hd_code"></span>
			</td>
		</tr>
		<tr>
		<td colspan="2"><input type="submit" value="提交"></td>
		</tr>
	</table>
	</form>
</body>
</html>