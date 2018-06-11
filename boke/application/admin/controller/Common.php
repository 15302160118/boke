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
	        $admin=session('username','','admin');
	        if(session('username','','admin')=='a')//如果是管理员传过来的session为a,就进入index页面的侧边栏导航的管理员所看到的内容
	        {
	        	$this->assign('account',$admin);
	        }
	        else //如果不是就进入用户所看到的内容
	        {
	        	$this->assign('account',null);
	        }
	        $this->assign('username',session('username','','admin'));
	        $this->assign('id',session('id','','admin'));//之前要有session存放才可以赋给前台比如给，index/index页面
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