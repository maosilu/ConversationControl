<?php
/**
cookie的缺点：
（1）cookie都是明文存取，不安全，不要存储敏感数据，劫取cookie后可以用来cookie欺骗
（2）不要把cookie当作客户端存储器使用，每个域名下允许的cookie有限制，根据不同的浏览器限制也不同，cookie中保存数据的最大字节数是4K
（3）cookie设置后每次cookie信息都会附着在http头中一起发送，所以如果数据很多会浪费带宽

根据以上缺点，在html5中出现了cookie的替代方案：localStorage，这是一个本地存储（本地存储主要包含了：localStorage，sessionStorage）：
（1）设置：localStorage.setItem(key, value)
（2）读取：localStorage.getItem(key)
（3）删除指定key：localStorage.removeItem(key)
（4）全部删除：localStorage.clear()
（5）获取指定的键名：localStorage.key(i)（i是下标，从0开始）
*/