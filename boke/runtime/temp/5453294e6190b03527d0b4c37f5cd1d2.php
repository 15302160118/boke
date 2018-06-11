<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy1\WWW\boke\public/../application/admin\view\article\edit_admin.html";i:1528339267;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='UTF-8'>
	<title>文章编辑</title>
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
	<form class="layui-form" action="<?php echo url('update_admin'); ?>" method="post"  enctype="multipart/form-data">

	  <div class="layui-form-item">
	    <label class="layui-form-label">ID</label>
	    <div class="layui-input-inline">
	      <input  type="text" name="id" class="layui-input" value='<?php echo $article['id']; ?>' readonly="readonly">不允许修改
	    </div>
	  </div>

	  <div class="layui-form-item">
	    <label class="layui-form-label">状态</label>
	    <div class="layui-input-inline">
	      <input type="checkbox" name="status"  lay-skin="switch" lay-text="正常|禁用"  value="<?php echo $article['status']; ?>" <?php echo !empty($article['status'])?'checked':''; ?>>
	    </div>
	  </div>
	 


	   <div class="layui-form-item">
	    <div class="layui-input-block">
	      <button class="layui-btn" type='submit' lay-submit lay-filter="formDemo">更新</button>
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