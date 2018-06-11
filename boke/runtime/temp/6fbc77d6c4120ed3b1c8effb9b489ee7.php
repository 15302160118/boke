<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\boke\public/../application/admin\view\category\add.html";i:1527502278;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='UTF-8'>
	<title>添加类别</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
	

</head>
<body>
	<form class="layui-form" action="<?php echo url('save'); ?>" method="post">
	  <div class="layui-form-item">
	    <label class="layui-form-label">文章类别</label>
	    <div class="layui-input-inline">
	      <input  type="text" name="categoryname" required  lay-verify="required" placeholder="请输入文章类别"  class="layui-input">
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
	<script>
	    $(function(){
	        $(window.parent.document).find('#righttitle').text($('title').text());
	   });
	</script>
</body>
</html>