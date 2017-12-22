<?php
/**
通过header的方式操作cookie
操作cookie都是通过http的头传递和设置的，header()函数发送头信息设置cookie：
header("Set_Cookie:name=value[;expires=datetime][;domain=domain][;path=path][;secure][;httponly]");
*/

//通过header形式设置cookie
// header('Set-Cookie:a=1');
// header('Set-Cookie:b=2; expires='.gmdate('D, d M Y H:i:s \G\M\T', time()+3600));
// header('Set-Cookie:e=5; secure');
header('Set-Cookie:f=6; httponly');


