<?php 
	namespace app\admin\controller;
	use think\Request;
	// include 'vendor/autoload.php';
	class Author extends Common//继承Common验证是否登录
	{
		public function index()
		{
				$Authors=model('author')->paginate(5);
				$this->assign('author',$Authors);
				return view();
		}
		public function admin_index()//管理员看的作者列表
		{
			$Authors=model('author')->paginate(5);
			$this->assign('author',$Authors);
			return view();
		}
		public function edit_admin()//管理员修改作者列表
		{
			$id=request()->param('id/d');
			$author=model('author')->where('id',$id)->find();
			$this->assign('author',$author);
			return view();
		}
		public function update_admin()//管理员修改作者列表编辑页面
		{
			$data=input('post.');
			
			if(isset($data['status']))
			{
				$author=model('author')->where('username',$data['username'])->update(['status'=>1]);
				if($author)
				{
					$this->success('修改成功',url('admin_index'));
				}
				else{
					$this->error('修改失败',url('admin_index'));
				}
				
			}
			else{
				$author=model('author')->where('username',$data['username'])->update(['status'=>0]);
				if($author)
				{
					$this->success('修改成功',url('admin_index'));
				}
				$this->error('修改失败',url('edit_admin'));
			}
		}
		public function logo()
		{
			return view();
		}
		public function upload()
		{
			$username=session('username','','admin');
			$file = request()->file('file');
		    // 移动到框架应用根目录/public/uploads/ 目录下
		     $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'logo',$username);//自定义它的命名规则
		    if($info)
		    {
		        // 输出 42a79759f284b767dfcb2a0197904287.jpg
				$picpath='logo/'.$info->getFileName();
				$picpath=str_replace("\\","/",$picpath);
				$result=model('Author')->where('username',$username)->update(['logo'=>$picpath]);
				$this->success("添加或更新成功",'Author/logo');
		    }
		    else
		    {
		        // 上传失败获取错误信息
		        echo $file->getError();
		    }
		}
		// public function upload()
		// {
		// 	if(request()->isPost())
		// 	{
		// 		$username=session('username','','admin');
		// 		$data=input('post.');
		// 		dump($data);
		// 		$file = request()->file('logo');
		// 		// 移动到框架应用根目录/public/uploads/ 目录下
		// 		if($file)
		// 		{
		// 		// 移动到服务器的上传目录 并且使用原文件名
		// 		    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'logo',$username);
		// 		    if($info)
		// 		    {
		// 		        // 成功上传后 获取上传信息
		// 		        // 输出 jpg
		// 		         // echo $info->getExtension();
		// 		      	// 输出 42a79759f284b767dfcb2a0197904287.jpg
		// 		        $picpath='logo/'.$info->getFileName();
		// 		        $picpath=str_replace("\\","/",$picpath);
				       
		// 		        $result=model('Author')->where('username',$username)->update(['logo'=>$picpath]);
		// 		    	$this->success("添加或更新成功",'Author/logo');
				        
		// 		    }
		// 		    else
		// 		    {
		// 		        // 上传失败获取错误信息
		// 		        echo $file->getError();
		// 		    }
		// 		}
		// 	}
				
		// }

		// public function add()
		// {
		// 	return $this->fetch();
		// }
		// public function insert()
		// {
		// 	if(request()->isPost())
		// 	{
		// 			//接收post信息
		// 			$postData=request()->post();
		// 			$account=input('post.account');
		// 			$accountID=db('manager')->where('account',$account)->find();

		// 			if($account==$accountID['account'])
		// 			{
		// 				$this->error('账号已存在',url('add'));
		// 			}
		// 			else
		// 			{
		// 				$data=input('post.');
		// 				$Managerdata=[
		// 					'account'=>$data['account'],
		// 					'password'=>$data['password'],
		// 				];
		// 				$result=model('Manager')->insert($Managerdata);
		// 				if($result)
		// 				{
		// 					$this->success('数据添加成功',url('manager/index'));

		// 				}
		// 				else
		// 				{
		// 					$this->error('数据添加失败',url('add'));
		// 				}
		// 			}
		// 	}
		// 	else
		// 	{
		// 		$this->error('提交数据异常',url('add'));
		// 	}
		// 	return view();
		// }
		public function edit()
		{
			$username=session('username','','admin');	
			$authors=db('author')->where('username',$username)->find();
			//将数据传给v层
			$this->assign('author',$authors);
			//获取封装好v层的书记员
			$htmls=$this->fetch();
			//将封装好的v层内容传给客户
			return $htmls;
		}
		public function search()
		{
			$data=input('post.');
			// $Author=new Author();
			$res=model('author')->where('realname','like','%'.$data['realname'].'%')->paginate(5);
			// dump($res);
			$this->assign('author',$res);
			return $this->fetch();
		}
		public function update()
		{
			if(request()->isPost())
				{
					$Author=model('author');

					$data=input('post.');
					$list=['realname'=>$data['realname'],
					'password'=>$data['password'],
					'email'=>$data['email'],

					'update_time'=>time()];
					
					$result=model('author')->where('username',$data['username'])->update($list);

					
					if($result)
					{
						$this->success('更新成功',url('edit'));
					}
					else
					{
						$this->error('更新失败',url('edit'));
					}
				}
				else
				{
					$this->error('提交数据异常',url('edit'));
				}
				return view();
		}
		public function delete()
		{
			$id=request()->param('id/d');
			$result=model('author')->where('id',$id)->delete();
			if($result)
			{
				$this->success('删除成功',url('index'));
			}
			else{
				$this->error('删除失败',url('index'));
			}

		}
		// public function setpass()
		// {
		// 	return view();
		// }
		// public function daoru()
		// {
		// 	if(request()->isPost())
		// 	{
		// 		$fileinfo=$this->upload();
		// 		return json('处理成功');
		// 	}
		// 	return view();
		// }
		// protected function upload()
		// {
		// 	return $fileinfo;
		// }
		// 批量导出
		// public function expuser()
		// {

		// 	$phpexcel=new \PHPExcel();
		// 	$phpexcel->setActiveSheetIndex(0);//设置当前工作表为第一张
		// 	$sheet=$phpexcel->getActiveSheet();//设置工作表实例
		// 	$res=db('Manager')->field('account,password,state')->select();
		// 	$arr=[
		// 		'account'=>'账号',
		// 		'password'=>'密码',
		// 		'state'=>'状态',
		// 	];
		// 	array_unshift($res, $arr);//把$arr放在$res的第一行中
		// 	$current=0;

		// 	foreach($res as $key => $value) 
		// 	{
		// 		$current=$key+1;
		// 		$sheet->setCellValue('A'.$current,$value['account'])
		// 			  ->setCellValue('B'.$current,$value['password'])
		// 			  ->setCellValue('C'.$current,setstate($value['state']));
		// 	}
		// 	header('Content-Type: application/vnd.ms-excel');//设置文档类型
		// 	header('Content-Disposition: attachment;filename="管理员信息表.xlsx"');//设置文件名
		// 	header('Cache-Control: max-age=0');
		// 	$phpwriter = new \PHPExcel_Writer_Excel2007($phpexcel);
		// 	$phpwriter->save('php://output');
		// 	return;
		// }

	}
		
		
	
 ?>