<?php
/**
Cookie:
（1）按照cookie在客户端中的存储位置分为两类：内存cookie，硬盘cookie
（2）内存cookie（非持久cookie）：由浏览器维护保存在内存中，浏览器关闭之后cookie消失，储存时间短暂
硬盘cookie（持久cookie）：保存在硬盘，可以设置过期时间或手工清理
（3）使用场景：购物车，永久登录；在浏览器的cookie以小文件形式保存在客户端。cookie一般都是在服务器端设置的，可以通过http相应头部返回给浏览器，响应头中：Set-Cookie，浏览器拿到这一信息保存到自己的cookie文件中，每个浏览器都有独立的空间存放cookie
*/

setcookie('bb', 'bb', time()+60, '/');