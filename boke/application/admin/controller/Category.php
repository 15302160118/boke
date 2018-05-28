<?php 
	namespace app\admin\controller;
	use think\Request;

	// include 'vendor/autoload.php';
	class Category extends Common//¼Ì³ÐCommonÑéÖ¤ÊÇ·ñµÇÂ¼
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
				// $newdata=[
				// 	'categoryname'=>$data['categoryname'],
				// 	'create_time'=>time()
				// ];
				$result=$Category->save();
				// $result=db('category')->insert($newdata);
				// dump($result);die;
				if($result)
				{
					$this->success('ÐÂÔö³É¹¦',url('index'));
				}
				else
				{
					$this->error('ÐÂÔöÊ§°Ü',url('index'));
				}
		
		

		}
		
		public function delete()
		{
			$id=request()->param('id/d');
			$result=model('category')->where('id',$id)->delete();
			if($result)
			{
				$this->success('É¾³ý³É¹¦',url('index'));
			}
			else{
				$this->error('É¾³ýÊ§°Ü',url('index'));
			}

		}
		

	}
		
		
	
 ?>