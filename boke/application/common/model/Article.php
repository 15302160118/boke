<?php 
	namespace app\common\model;
	use think\Model;
	class Article extends Model
	{
		public function category()
		{
			return $this->belongsTo('Category');
		}
		public function author()
		{
			return $this->belongsTo('author');
		}
	}

 ?>