<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>后台登录 www.73ym.com</title>
	<link rel='stylesheet' id='wp-admin-css'  href='/static/admin/wp-admin.min.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='/static/admin/buttons.min.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='/static/admin/colors-fresh.min.css?ver=3.7.1' type='text/css' media='all' />
<meta name='robots' content='noindex,nofollow' />
	</head>
	<body class="login login-action-login wp-core-ui">
	<div id="login">
		
	
<form name="loginform" id="loginform" action="<?php echo U("Index/dologin");?>" method="post">
	<p>
		<label for="user_login">用户名<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">密码<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" />

	</p>
</form>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>


	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>