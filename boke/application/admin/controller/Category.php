<?php 
	namespace app\admin\controller;
	use think\Request;
	class Category extends Common//继承Common验证是否登录
	{
		public function index()
		{
				$Categorys=model('category')->paginate(5);
				$this->assign('category',$Categorys);
				return view();
			
		}
		public function add()
		{
			return $this->fetch();
		}
		public function save()
		{
				$Category=model('Category');

				$data=input('post.');
				
				$Category->categoryname=$data['categoryname'];

				$Category->create_time=time();
				$result=$Category->save();
				if($result)
				{
					$this->success('新增成功',url('index'));
				}
				else
				{
					$this->error('新增失败',url('index'));
				}
		
		

		}
		public function search()
		{
			$data=input('post.');
			$res=model('category')->where('categoryname','like','%'.$data['categoryname'].'%')->paginate(5);
			// dump($res);
			$this->assign('category',$res);
			return $this->fetch();
		}
		public function delete()
		{
			$id=request()->param('id/d');
			$result=model('category')->where('id',$id)->delete();
			if($result)
			{
				$this->success('删除成功',url('index'));
			}
			else{
				$this->error('删除失败',url('index'));
			}

		}
		public function edit()
		{
			$id=request()->param('id/d');
			$category=model('category')->where('id',$id)->find();
			$this->assign('category',$category);
			return view();
		}

	}
		
		
	
 ?>