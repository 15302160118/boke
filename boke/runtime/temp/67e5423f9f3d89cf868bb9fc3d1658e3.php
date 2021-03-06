<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy1\WWW\boke\public/../application/admin\view\login\index.html";i:1528555262;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>双语企业网站管理系统</title>
    <link rel="stylesheet" href="/boke/public/static/css/style.css">
    <link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
    <script src="/boke/public/static/js/jquery.min.js"></script>
    <style>

    form{
        background:rgba(255,255,255,.3);
        padding: 20px;
        border-radius: 20px;
        text-align: center;
        margin:0 auto;
    }
        .login-main{
            height: 600px;
            background: url('/boke/public/static/background.jpg') no-repeat;
            background-size:100% 100%; 
            display: flex;
            align-items: center;
        }
        .Title{
            font-size: 20px;
            text-align: center;
        }
       .ly-input{
            margin: 10px 0;
            width:300px;
       }
        .zhuce{
            color:white;
            background: lightblue;
            padding: 10px 20px;
            border-radius: 15px;
            margin: 0 10px;
           }
           .ly-submit{
            border-radius: 15px;
           }
    </style>
</head>
<body>
<div class="layui-anim layui-anim-up login-main" id="form-main">
    <form class="layui-form" onsubmit='return check();' action="Login/Login" method="post">
        <p class='Title'>博客网站管理系统</p>
        <div class="ly-input">
            <input type="text" id='username'  name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
        </div>
        <div class="ly-input">
            <input type="password" id='password' name="password" required  lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="ly-input" >
            <input type="text" id='yzm' name="vali" required  lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input" style='width:120px;'>
            <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" style="cursor:pointer;position: relative;height:40px;margin:-54px 0 0 135px;">
        </div>
        <div class="ly-input">
            <input class="layui-btn layui-btn-danger ly-submit" id="ly-submit" type='submit'  value='登录'></input>
            <a href="<?php echo url('register/index'); ?>" class='zhuce'>注册</a>
        </div>
    </form>
    
</div>

<script src="/boke/public/static/css/layui/layui/layui.js"></script>

<script>
    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;
        form.on('submit(formDemo)', function(data){
            $('#ly-submit').submit();
        });
    });
</script>
</body>
</html>