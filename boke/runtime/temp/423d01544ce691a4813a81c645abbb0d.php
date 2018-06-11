<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy1\WWW\boke\public/../application/admin\view\author\setpass.html";i:1527396555;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
	<script>
		function check()
		{
			var msg='';
			var password=document.getElementById('password').value;
			var repassword=document.getElementById('repassword').value;
			if(password.length>15)
			{
				msg+='密码过长\n';
			}
			if(repassword!=password)
			{
				msg+='确认密码与原密码不符\n';
			}
			if(msg!='')
			{
				alert(msg);
				return false;
			}
		}

	</script>
</head>
<body>
	<form class="layui-form" onsubmit='return check();' action="<?php echo url('author/update'); ?>" method="post" >
        <div class="layui-form-item">
            <label class="layui-form-label">管理员账号</label>
            <div class="layui-input-inline">
                <input type="text" name="username" readonly="readonly" required  placeholder="请输入管理员账号"  class="layui-input" value="<?php echo $username; ?>">不允许修改账号
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">设置新密码</label>
            <div class="layui-input-inline">
                <input type="text" id='password' name="password" required placeholder="请输入新密码"  class="layui-input"  value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">确认密码</label>
            <div class="layui-input-inline">
                <input type="text" name="repassword" placeholder="请输入确认密码"  class="layui-input" required id='repassword'>
            </div>
        </div>

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
                <input type="radio" name="state" value="1" title="开启" <?php echo !empty($manager['state'])?"checked":""; ?>>
                <input type="radio" name="state" value="0" title="锁定" <?php echo !empty($manager['state'])?"":"checked"; ?>>
            </div>
        </div> -->


        <div class="layui-form-item">
            <div class="layui-input-block">
                <input class="layui-btn" type='submit' lay-submit lay-filter="formDemo" value='修改'></input>
            </div>
        </div>
    </form>
	<script src="/boke/public/static/css/layui/layui/layui.js"></script>
	<script src="/boke/public/static/js/jquery.min.js"></script>
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