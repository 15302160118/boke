<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\boke\public/../application/admin\view\index\system.html";i:1527337420;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link rel="stylesheet" href="/boke/public/static/css/style.css">
    <link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
    <link rel="stylesheet" href="/boke/public/font-awesome/css/font-awesome.min.css">
    <script src="/boke/public/static/js/jquery.min.js"></script>
    <style>
    body{
        margin: 0;
        padding: 0;
    }
        .top-si{
            margin: 20px 0;
        }
        .dakuai{
            width:50%;
            margin: 10px 0;
           
        }
        .user{
            transition: 2s; 
            background: lightblue;
            height: 100px;
            width:40%;
            text-align: center;
            line-height: 100px;
            color:white;
            z-index: 2; 

            display: inline-block;
        }
        .text{ 
            text-align: center;
            
          /*  display: flex;
            align-items: center;
            justify-content: center;*/
            background: #ccc;
            height: 100px;
            width:50%;
            display: inline-block;
            position: absolute;
            z-index: 2; 
        }         
        .num{
            font-size: 30px;
            font-weight: bold;
            line-height: 50px;
        }        
        .new{
            background: red;
            border-radius: 10px;
            padding: 3px 5px;
            font-weight: bolder;
            color:white; margin: 0 0 0 10px;
            }         
            .zuixinwenzhang{
                margin: 20px 0;
            }
    </style>
    <script>
     $(document).ready(function()
      {

            $(".user").css('transform','rotate(720deg)');
      })     
    </script>
</head> 
<body style="padding:0 10px;margin-bottom:50px;">

 <div class="layui-row top-si">
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4 dakuai">
        <i class="fa fa-user fa-5x user" aria-hidden="true" ></i>
        <p class='text'><span class='num'>10</span><br>用户总量</p>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4 dakuai">
     <i style="background:orange;" class="fa fa-user fa-5x user" aria-hidden="true" ></i>
        <p class='text'><span class='num'>10</span><br>今日注册用户</p>
    </div>
    <div class="layui-col-xs4 layui-col-sm12 layui-col-md4 dakuai">
      <i style="background:#57f0b8;" class="fa fa-user fa-5x user" aria-hidden="true" ></i>

        <p class='text'><span class='num'>10</span><br>文章总数</p>
    </div>
    <div class="layui-col-xs4 layui-col-sm7 layui-col-md8 dakuai">
      <i style="background:#4358b5;" class="fa fa-user fa-5x user" aria-hidden="true" ></i>

        <p class='text'><span class='num'>10</span><br>用户总量</p>
    </div>
  </div>

<div class="layui-collapse zuixinwenzhang">
    <div class="layui-colla-item">
        <h2 class="layui-colla-title">最新文章<span class="new" >new</span></h2>
        <div class="layui-colla-content layui-show">
            <table class="layui-table" lay-skin="line">
               <tbody>
                <tr>
                  <td>原创</td>
                  <td>汪涵率众特工入侵地球(标题)</td>
                  <td>阅读量：1350</td>
                  <td>2016-04-11</td>
                </tr>
                <tr>
                  <td>原创</td>
                  <td>汪涵率众特工入侵地球(标题)</td>
                  <td>阅读量：1350</td>
                  <td>2016-04-11</td>
                </tr>
                <tr>
                  <td>原创</td>
                  <td>汪涵率众特工入侵地球(标题)</td>
                  <td>阅读量：1350</td>
                  <td>2016-04-11</td>
                </tr>
                <tr>
                  <td>原创</td>
                  <td>汪涵率众特工入侵地球(标题)</td>
                  <td>阅读量：1350</td>
                  <td>2016-04-11</td>
                </tr>
                <tr>
                  <td>原创</td>
                  <td>汪涵率众特工入侵地球(标题)</td>
                  <td>阅读量：1350</td>
                  <td>2016-04-11</td>
                </tr>
                <tr>
                  <td>原创</td>
                  <td>汪涵率众特工入侵地球(标题)</td>
                  <td>阅读量：1350</td>
                  <td>2016-04-11</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>



<div class="layui-collapse" lay-accordion="" lay-filter="collapse">
    <div class="layui-colla-item">
        <h2 class="layui-colla-title">软件信息</h2>
        <div class="layui-colla-content layui-show"><!-- layui-show为展开的意思 -->
            <table class="layui-table">
                <tr>
                    <td width="40%">软件名称</td>
                    <td width="60%">博客后台网站</td>
                </tr>
                <tr>
                    <td>系统版本</td>
                    <td>v1.0.0</td>
                </tr>
                <tr>
                    <td>qq</td>
                    <td>782499298</td>
                </tr>
                <tr>
                    <td>技术支持</td>
                    <td>罗润华</td>
                </tr>
            </table>
        </div>
    </div>



    <div class="layui-colla-item">
        <h2 class="layui-colla-title">服务器信息</h2>
        <div class="layui-colla-content">
            <table class="layui-table">
                <tr>
                    <td>服务器IP</td>
                    <td><?php echo $system['ip']; ?></td>
                </tr>
                <tr>
                    <td width="40%">服务器域名</td>
                    <td width="60%"><?php echo $system['host']; ?></td>
                </tr>
                <tr>
                    <td>服务器操作系统</td>
                    <td><?php echo $system['os']; ?></td>
                </tr>
                <tr>
                    <td>运行环境</td>
                    <td><?php echo $system['server']; ?></td>
                </tr>
                <tr>
                    <td>服务器端口</td>
                    <td><?php echo $system['port']; ?></td>
                </tr>
                <tr>
                    <td width="40%">PHP版本</td>
                    <td width="60%"><?php echo $system['php_ver']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="layui-colla-item">
        <h2 class="layui-colla-title">数据库信息</h2>
        <div class="layui-colla-content">
            <table class="layui-table">
                <tr>
                    <td width="40%">数据库版本</td>
                    <td width="60%"><?php echo $system['mysql_ver']; ?></td>
                </tr>
                <tr>
                    <td>数据库名称</td>
                    <td><?php echo $system['database']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script src="/boke/public/static/css/layui/layui/layui.js"></script>
<!-- <script src="custom/js/admin.js"></script> -->
<script>
    //JavaScript代码区域
     layui.use(['layer','element'], function () {
        var layer = layui.layer, element = layui.element();

        //监听折叠
        element.on('collapse(collapse)', function(data){
            layer.msg('展开状态：'+ data.show);
        });


        // you code ...


    });
      $(function(){
            $(window.parent.document).find('#righttitle').text($('title').text());
       });
</script>

</body>
</html>