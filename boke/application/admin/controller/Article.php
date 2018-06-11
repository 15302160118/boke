<?php 
	namespace app\admin\controller;
	use think\Request;

	class Article extends Common
	{
		
		public function add()
		{
			$categorys=model('category')->select();

			$this->assign('category',$categorys);
			return view();
		}
		public function add_admin()
		{
			$categorys=model('category')->select();

			$this->assign('category',$categorys);
			return view();
		}
		public function article_admin()
		{
			$article=model('article')->paginate(5);
			$this->assign('article',$article);
			return view();
		}
		public function edit_admin()
		{
			$id=request()->param('id/d');
			$article=model('article')->where('id',$id)->find();
			$this->assign('article',$article);
			return view();
		}
		public function update_admin()
		{
			$data=input('post.');
			
			if(isset($data['status']))
			{
				$article=model('article')->where('id',$data['id'])->update(['status'=>1]);
				if($article)
				{
					$this->success('修改成功',url('article_admin'));
				}
				else{
					$this->error('修改失败',url('edit_admin'));
				}				
			}
			else{
				$article=model('article')->where('id',$data['id'])->update(['status'=>0]);
				if($article)
				{
					$this->success('修改成功',url('article_admin'));
				}
				$this->error('修改失败',url('edit_admin'));
			}
		}
		// public function upload()
		// {
		// 	$username=session('username','','admin');
		// 	$file = request()->file('file');
		//     // 移动到框架应用根目录/public/uploads/ 目录下
		//      $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'cover',$username);//自定义它的命名规则
		//     if($info)
		//     {
		//         // 输出 42a79759f284b767dfcb2a0197904287.jpg
		// 		$picpath='logo/'.$info->getFileName();
		// 		$picpath=str_replace("\\","/",$picpath);
		// 		$result=model('article')->where('username',$username)->update(['logo'=>$picpath]);
		//     }
		//     else
		//     {
		//         // 上传失败获取错误信息
		//         echo $file->getError();
		//     }
		// }
		public function save()
		{
				$username=session('username','','admin');
				$data=input('post.');
				$file = request()->file('image');
				if($file)
				{
					$name=iconv('utf-8','gbk',$file->getInfo()['name']);
					 // 移动到框架应用根目录/public/uploads/cover 目录下
			        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'cover',$name);//自定义它的命名规则
					// 输出 42a79759f284b767dfcb2a0197904287.jpg
					if($info)
					{
						$picpath='cover/'.$info->getFileName();
						$picpath=str_replace("\\","/",$picpath);
						$picpath=iconv('gbk','utf-8',$picpath);
					}
				}
				else
				{
					$this->error('请上传封面图',url('add'));
				}
				
				
				
				$res=model('author')->where('username',$username)->find();
				$article=model('article');
				$article->title=$data['title'];
				$article->author_id=$res['id'];
				$article->category_id=$data['category_id'];
				$article->description=$data['description'];
				$article->content=$data['content'];
				$article->logo=$picpath;

				$article->create_time=time();
				$result=$article->save();
				if($result)
				{
					$this->success('新增成功',url('article_author'));
				}
				else
				{
					$this->error('新增失败',url('article_author'));
				}
		}

		public function save_admin()
		{
				$username=session('username','','admin');
				$data=input('post.');
				$file = request()->file('image');
				$name=iconv('utf-8','gbk',$file->getInfo()['name']);
				 // 移动到框架应用根目录/public/uploads/cover 目录下
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'cover',$name);//自定义它的命名规则
				// 输出 42a79759f284b767dfcb2a0197904287.jpg
				if($info)
				{
					$picpath='cover/'.$info->getFileName();
					$picpath=str_replace("\\","/",$picpath);
					$picpath=iconv('gbk','utf-8',$picpath);
				}
				
				
				$res=model('admin')->where('username',$username)->find();
				$article=model('article');
				$article->title=$data['title'];
				$article->author_id=$res['id'];
				$article->category_id=$data['category_id'];
				$article->description=$data['description'];
				$article->content=$data['content'];
				$article->logo=$picpath;

				$article->create_time=time();
				$result=$article->save();
				if($result)
				{
					$this->success('新增成功',url('article_admin'));
				}
				else
				{
					$this->error('新增失败',url('article_admin'));
				}
		}

		public function update()
		{
				$id=request()->param('id/d');
				$username=session('username','','admin');
				$data=input('post.');
				$article=model('article')->where('id',$id)->find();
				$file = request()->file('image');
				if($file)
				{
					$name=iconv('utf-8','gbk',$file->getInfo()['name']);
					 // 移动到框架应用根目录/public/uploads/cover 目录下
			        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'cover',$name);//自定义它的命名规则
					// 输出 42a79759f284b767dfcb2a0197904287.jpg
				
						$picpath='cover/'.$info->getFileName();
						$picpath=str_replace("\\","/",$picpath);
						$picpath=iconv('gbk','utf-8',$picpath);
						$article->logo=$picpath;
				}

				 $article->status=1;
				 if(!isset($data['status']))
				 {
				 	$article->status=0;
				 }
			
				// $list=[
				// 	'title'=>$data['title'],
				// 	'author_id'=>$res['id'],
				// 	'category_id'=>$data['category_id'],
				// 	'description'=>$data['description'],
				// 	'content'=>$data['content'],
				// 	'logo'=>$picpath,
				// 	'update_time'=>time()
				// ];
				
				$article->title=$data['title'];
				$article->category_id=$data['category_id'];
				$article->description=$data['description'];
				$article->content=$data['content'];
				$article->update_time=time();
				//$result=model('article')->where('id',$id)->update($article);
				
                $result=$article->save();                
                if($result)
				{ 
					$this->success('更新成功',url('article_author'));
				}                 
				else
				{
					$this->error('更新失败',url('article_author'));
				}         
		}

		public function article_author()
		{
			$username=session('username','','admin');
			$res=model('author')->where('username',$username)->find();
			$articleres=model('article')->where('author_id',$res['id'])->paginate(5);
			$this->assign('articles',$articleres);
			return view();
		}
		public function delete()
		{
			$id=request()->param('id/d');
			$result=model('article')->where('id',$id)->find();
			unlink('uploads/'.$result['logo']);
			$result=model('article')->where('id',$id)->delete();
			
			if($result)
			{
				$this->success('删除成功',url('article_author'));
			}
			else{
				$this->error('删除失败',url('article_author'));
			}

		}
		public function search()
		{
			$username=session('username','','admin');
			$data=input('post.');
			// $Author=new Author();
			$where = [  
                ['title', 'like', "%".$data['title']."%"],
                ['author_id',$username]  
            ];  
			$res=model('article')->where($where)->paginate(5);
			// dump($res);
			$this->assign('articles',$res);
			return $this->fetch();
		}
		public function search_admin()
		{
			$data=input('post.');
			$article=model('article')->where('title','like',"%".$data['title']."%")->paginate(5);
			$this->assign('article',$article);
			return view();
		}
		public function edit()
		{
			$id=request()->param('id/d');
			$articles=db('article')->where('id',$id)->find();
			//将数据传给v层
			$this->assign('article',$articles);
			$category=model('category')->select();
			$this->assign('category',$category);
			return view();
		}
	}
 ?>