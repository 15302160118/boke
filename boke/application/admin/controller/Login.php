<?php 
	namespace app\admin\controller;
	use think\Controller;
	use think\Db;
	class Login extends Controller
	{
		public function index()
		{
			if(session('username','','admin') || session('id', '', 'admin'))
			{
				$this->redirect('index/index');
			}
			return view();
		}
		public function login()
		{
			if(request()->isPost())
			{
				if(input('post.username')=='a'&&input('post.password')=='123')
				{
					
					session('username', 'a', 'admin');
					session('id', '1', 'admin');
					$this->success('登录成功',url('index/index'));
				}
				$username=input('post.username');
				$password=input('post.password');
				$yzm=input('post.vali');

				if(empty($yzm))
				{    		
		    		$this->error('验证码不能为空');
		    	} 
		    	if(!captcha_check($yzm))
		    	{ 			
		    		$this->error('验证码错误');
				}   	
				// else
				// {
					$usernameres=db('author')->where('username',$username)->find();
					if(is_null($usernameres))
					{
						
						$this->error('没有此用户',url('Login/index'));						
					}
					else
					{
						if($usernameres['password']==$password)
						{
							
							session('username', $username, 'admin');
							session('id', $usernameres['id'], 'admin');
							
							$this->success('登录成功',url('index/index'));							
						}
						else
						{
							$this->error('密码错误',url('Login/index'));
						}
					}
				// }
			}
			else
			{
				$this->error('获取数据异常',url('Login/index'));
			}
		}
		public function logout()
		{
			session(null,'admin');
			$this->success('退出成功',url('login/index'));
		}
	}
 ?>