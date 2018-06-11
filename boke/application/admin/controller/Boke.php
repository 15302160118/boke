<?php 
	namespace app\admin\controller;
	use think\Request;
	use think\Controller;
	class Boke extends Controller
	{
		public function index()
		{
			if(session('username','','admin'))
			{
				$username=session('username','','admin');
				$author=model('author')->where('username',$username)->find();
				$this->assign('author',$author['logo']);

				
			}
			else
			{
				$this->assign('author','');
			}
			$article=model('article')->order('update_time','desc')->paginate(3);
			$this->assign('article',$article);
			return view();
		}
		public function learn()
		{
			
			$id=request()->param('id/d');
			$article=model('article')->where('id',$id)->find();
			$this->assign('article',$article);
			$author=model('author')->select();
			$this->assign('author',$author);
			return view();
		}
		public function login()
		{
			if($username=session('username','','admin'))
			{
				$this->redirect('index/index');
			}
			else{
				$this->error(url('register/index'));
			}
		}
	}
 ?>