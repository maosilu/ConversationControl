<?php
/**
 * Cookie操作类的封装
 * Cookie的设置、读取、更新、、删除
*/
class CustomCookie{
	static private $_instance = null;
	private $expire = 0;
	private $path = '';
	private $domain = '';
	private $secure = false;
	private $httponly = false;

	/**
     * 构造函，完成cookie参数初始化工作
     * @param array $options Cookie相关选项
	*/
	private function __construct(array $options=[]){
        $this->setOptions($options);
	}

	/**
     * 设置cookie相关选项
     * @param array $options Cookie相关选项
     * @return
	*/
	private function setOptions(array $options=[]){
        if(isset($options['expire'])){
            $this->expire = (int)$options['expire'];
        }
        if(isset($options['path'])){
            $this->path = $options['path'];
        }
        if(isset($options['domain'])){
            $this->domain = $options['domain'];
        }
        if(isset($options['secure'])){
            $this->secure = (bool)$options['secure'];
        }
        if(isset($options['httponly'])){
            $this->httponly = (bool)$options['httponly'];
        }
        return $this;
    }

	/**
     * 单例模式
     * @param array $options Cookie相关选项
     * @return object        对象实例
	*/
	public static function getInstance(array $options=[]){
		if(is_null(self::$_instance)){
			$class = __CLASS__;
			self::$_instance = new $class($options);
		}
		return self::$_instance;
	}

	/**
     * 设置cookie
     * @param string $name Cookie名称
     * @param mixed $value cookie的值
     * @param array $options cookie的相关选项
	*/
	public function set($name, $value, array $options=[]){
        if(is_array($options) && count($options)){
            $this->setOptions($options);
        }
        if(is_array($value) || is_object($value)){
            $value = json_encode($value);
        }

        setcookie($name, $value, $this->expire, $this->path, $this->domain, $this->secure, $this->httponly);
    }

}