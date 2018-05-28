<?php 
	namespace app\admin\controller;
	use think\Request;
	// include 'vendor/autoload.php';
	class Author extends Common//继承Common验证是否登录
	{
		public function index()
		{
			if(session('username', '', 'admin')!='a'&&!session('password','', 'admin')!='123')
			{
				return '你不是管理员，无权访问用户列表';
			}
			else{
				$Authors=model('author')->paginate(5);
				$this->assign('author',$Authors);
				return view();
			}
			
		}
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
		// public function edit()
		// {
		// 	$id=request()->param('id/d');	
		// 	$Manager=db('manager')->where('id',$id)->find();
		// 	//将数据传给v层
		// 	$this->assign('manager',$Manager);
		// 	//获取封装好v层的书记员
		// 	$htmls=$this->fetch();
		// 	//将封装好的v层内容传给客户
		// 	return $htmls;
		// }
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
					$username=input('post.username');
					dump($username);
					$data=input('post.');
					unset($data['username']);
					unset($data['repassword']);
					$result=model('author')->where('username',$username)->Update($data);
					if(!$result)
						{
							$this->error("修改失败",'index');
						}
					else
						{
							$this->success("修改成功",'index');
						}
				}
			else
			{
				$this->error('提交数据异常',url('add'));
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
		public function setpass()
		{
			return view();
		}
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