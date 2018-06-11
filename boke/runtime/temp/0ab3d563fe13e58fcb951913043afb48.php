<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\boke\public/../application/admin\view\article\add.html";i:1527931067;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='UTF-8'>
	<title>发表文章</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
	<link rel="stylesheet" href="/boke/public/static/webuploader/webuploader.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
    <script type="text/javascript" src="/boke/public/static/js/jquery.min.js"></script>  <!-- 引用jquery -->  

    <style>
    body{
    	height: 1000px;
    }
		.fuwenben{
			width:70%;
		}
    </style>  
</head>
<body>
	<form class="layui-form" action="<?php echo url('save'); ?>" method="post"  enctype="multipart/form-data">
	  <div class="layui-form-item">
	    <label class="layui-form-label">标题</label>
	    <div class="layui-input-inline">
	      <input  type="text" name="title" required  lay-verify="required" placeholder="请输入文章标题"  class="layui-input">
	    </div>
	  </div>


	  <div class="layui-form-item">
	    <label class="layui-form-label">文章类别</label>
	    <div class="layui-input-inline">
	      	<select name="category_id" id="" lay-verify="">
				<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	      			<option value="<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
	      	</select>
	      	
	    </div>
	  </div>


	  <div class="layui-form-item">
	    <label class="layui-form-label">文章封面图</label>
	    <div class="layui-input-inline">
	      	<input type="file" name="image" /> <br> 
	    </div>
	  </div>

	  <div class="layui-form-item">
	    <label class="layui-form-label">文章描述</label>
	    <div class="layui-input-inline">
	     	<textarea  id="" cols="30" rows="10" placeholder="文章描述或者梗概" name='description'></textarea>
	    </div>
	  </div>


	  <div class="layui-form-item">
	    <label class="layui-form-label">文章内容</label>
	    <div class="layui-input-block fuwenben">
	     	<script id="container" name="content" type="text/plain" width="600"></script>
	    </div>
	  </div>



	   <div class="layui-form-item">
	    <div class="layui-input-block">
	      <button class="layui-btn" type='submit' lay-submit lay-filter="formDemo">添加</button>
	    </div>
	  </div>
	</form>
	<script src="/boke/public/static/css/layui/layui/layui.js"></script>
	<script src="/boke/public/static/js/jquery.min.js"></script>
	  <script type="text/javascript">
        $(function(){
            $(window.parent.document).find('#righttitle').text($('title').text());
       });
</script>

	<script>
	 layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data){
        });
    });
   $(function(){
        $(window.parent.document).find('#righttitle').text($('title').text());
   });
	</script>
	<script type="text/javascript" src="/boke/public/static/ueditor/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/boke/public/static/ueditor/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container',{initialFrameHeight:400,});
    </script>
</body>
</html>