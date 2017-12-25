<?php
/**
销毁session：
（1）$_SESSION = [] or $_SESSION = null
（2）将cookie中的数据清除
（3）销毁会话session_destroy()
*/
session_start();
//将$_SESSION数据清空
$_SESSION = [];
//删除会话Cookie
if(ini_get('session.use_cookies')){
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time()-3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
//销毁会话
session_destroy();