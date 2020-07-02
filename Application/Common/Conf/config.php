<?php
return array(
	//数据库配置
    'DB_TYPE' => 'mysqli',      //数据库类型
	'DB_HOST' => 'localhost',  //服务器地址
	'DB_NAME' => 'et_system', //数据库名
	'DB_USER' => 'root',       //用户名
	'DB_PWD'  => 'root',           //密码
	'DB_PORT' => '3306',       //端口
	'DB_PREFIX' => 'et_', //数据库表前缀
	'DB_CHARSET' => 'utf8',    //数据库编码
	//开启追踪调试
	'SHOW_PAGE_TRACE' =>true,
    //启用模板布局
    'LAYOUT_ON' =>true,
    'LAYOUT_NAME' =>'layout',
    //配置URL模式为REWRITE
    'URL_MODEL'=>2,
    //定义允许访问的模块列表
    'MODULE_ALLOW_LIST' => array('Home','Admin'), 
    // 默认模块
    'DEFAULT_MODULE' => 'Home', 
    // 默认控制器名称
    'DEFAULT_CONTROLLER' => 'Login', 
    // 默认操作名称
    'DEFAULT_ACTION' => 'login', 
);