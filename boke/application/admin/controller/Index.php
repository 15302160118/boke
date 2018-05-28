<?php 
	namespace app\admin\controller;
	use think\Db;	
	// use think\Controller;
	// 不需要引入common因为common和index在同一级
	class index extends Common//继承Common验证是否登录
	{
		public function index()
		{
			return view();
		}
		public function system()
		{
			$system=[
				//获取IP地址
				'ip'=>$_SERVER['SERVER_ADDR'],
				//服务器域名[主机名]
				'host'=>$_SERVER['SERVER_NAME'],
				//服务器操作系统
				'os'=>PHP_OS,
				//运行环境
				'server'=>$_SERVER["SERVER_SOFTWARE"],
				//服务器端口
				'port'=>$_SERVER['SERVER_PORT'],
				//PHP版本
				'php_ver'=>PHP_VERSION,
				'mysql_ver'=>Db::query('select version() as ver')[0]['ver'],
				'database'=>config('database')['database'],
			];
			
			$this->assign('system',$system);
			return view();
		}
		
	}
 ?>