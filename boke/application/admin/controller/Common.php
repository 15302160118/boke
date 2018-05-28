<?php 
	namespace app\admin\controller;
	use think\Controller;
	class Common extends Controller
	{
		protected function _initialize()
		{
			parent::_initialize();//继承父类的初始化方法
			//登录状态验证
			if(!session('username', '', 'admin') || !session('id', '', 'admin'))
			{
	           $controller=request()->controller();//获取当前控制器
	           $action=request()->action();//获取当前方法

	           if($controller==="Index" && $action==="index")
	           {
	               $this->redirect('login/index');
	           }
	           else
	           {
	           		$this->error("未登录,不允许访问",'login/index');
	           }
	        }
	        $this->assign('username',session('username','','admin'));
	        $this->assign('password',session('password','123','admin'));
		// 	function setstate($state)
			// {
			// 	if($state==='状态')
			// 	{
			// 		return $state;
			// 	}
			// 	if($state===1)
			// 	{
			// 		return "正常";
			// 	}
			// 	else{
			// 		return '锁定';
			// 	}
			// }
		
		}
	}

 ?>