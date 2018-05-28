<?php 
	namespace app\admin\controller;
	use think\Controller;
	use app\common\model\Author;
	use think\Request;
	use think\Db;
	class Register extends Controller
	{
		public function index()
		{
			return view();
		}
		public function save()
		{
			if(request()->isPost())
			{
				$Author=new Author();
				$data=input('post.');
				$Author->username=$data['username'];
				$Author->realname=$data['realname'];
				$Author->password=$data['password'];
				$Author->email=$data['email'];
				$Author->create_time=time();
				if(empty($data['vali']))
				{    		
		    		$this->error('验证码不能为空',url('register/index'));
		    	} 
		    	if(!captcha_check($data['vali']))
		    	{ 			
		    		$this->error('验证码错误',url('register/index'));
				} 
					if($Author->save())
					{
						$this->success('输入成功',url('Login/index'));
					}
					else
					{
						$this->error('失败',url('register/index'));
					}
			}
			else
			{
				$this->error('请用表单提交数据');
			}

		}
	}
 ?>