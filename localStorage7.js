/**
扩展localStorage
localStorage能够存储文本数据也能存储字符串，遇到对象的要先将它序列化为字符串之后才能存储，不是对象类型的不需要序列化
*/
/*var custom_localStorage={
	set: function(key, value){
		var item = {
			data:value
		}
		localStorage.setItem(key, JSON.stringify(item));
	},

	get: function(key){
		var val = localStorage.getItem(key);
		if(!val) return null;
		val = JSON.parse(val);
		return val;
	}
};*/
var custom_localStorage = {
	//添加缓存时间：
	set: function(key, val, days){
		var item = {
			data:value,
			endTime:new Date().getTime().+days*24*3600*1000
		};
		localStorage.setItem(key, JSON.stringify(item));
	},

	get: function(key){
		var val = localStorage.getItem(key);
		if(!val) return null;
		val = JSON.parse(val);
		if(new Date().getTime() > val.endTime){
			localStorage.removeItem(key);
		}
		return val.data;
	}

}