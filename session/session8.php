<?php
/**
session的工作原理：
（1）准备建立会话的时候，PHP会先查看请求中是否包含session_id，如果没有服务器会在自己的内存里创建一个新的变量，这个变量就是sessin_id，假如这个变量是session_1234
（2）服务器会把这个session_id发送到浏览器保存，一般浏览器会把这个id保存在cookie中
（3）之后每次浏览器再去访问服务器的时候，都会携带cookie中存储的这个session_1234，这样服务器认识这个浏览器了
（4）服务器端的session_1234变量中就可以存放任意的会话数据，这些数据是经过序列化之后存放进去的
（5）每次浏览器访问服务器都可以凭借自己的session_id到服务器的这个变量中认领自己的信息
（6）如果想销毁会话，可以删除掉会话中的数据，销毁会话文件
*/
session_start();
$_SESSION['username'] = 'ice';
$_SESSION['email'] = '123243@qq.com';
$_SESSION['age'] = 26;

echo 'session的名字：'.session_name()."<br/>";
echo 'session的ID：'.session_id();

//setcookie设置session的生存周期
setcookie(session_name(), session_id(), time()+3600);