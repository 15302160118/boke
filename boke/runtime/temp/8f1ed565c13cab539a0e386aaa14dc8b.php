<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy1\WWW\boke\public/../application/admin\view\author\edit_admin.html";i:1528192185;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改状态</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
	<link rel="stylesheet" href="/boke/public/static/webuploader/webuploader.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
    <script type="text/javascript" src="/boke/public/static/js/jquery.min.js"></script>
</head>
<body>

<form class="layui-form" action="<?php echo url('update_admin'); ?>" method="post"  enctype="multipart/form-data">
	<div class="layui-form-item">
        <label class="layui-form-label">用户账号</label>
        <div class="layui-input-inline">
            <input type="text" name="username" readonly="readonly"  class="layui-input" value="<?php echo $author['username']; ?>">不允许修改账号
        </div>
    </div>


	<div class="layui-form-item">
	    <label class="layui-form-label">状态</label>
	    <div class="layui-input-inline">
	      <input type="checkbox" name="status"  lay-skin="switch" lay-text="正常|禁用"  value="<?php echo $author['status']; ?>" <?php echo !empty($author['status'])?'checked':''; ?>>
	    </div>
	  </div>
	   <div class="layui-form-item">
	    <div class="layui-input-block">
	      <button class="layui-btn" type='submit' lay-submit lay-filter="formDemo">修改</button>
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
</body>
</html>