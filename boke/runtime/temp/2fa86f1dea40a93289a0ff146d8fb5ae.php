<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\boke\public/../application/admin\view\index\index.html";i:1528340127;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>双语企业网站后台</title>
    <link rel="stylesheet" href="/boke/public/static/css/style.css">
    <link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
    <style>
        .img-logo{
            width: auto;
            height: 80px;
        }
        .logo-wei{
            text-align: center;
        }
    </style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo"><span class="layui-hide-xs">博客</span>网站后台系统</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item layui-hide-xs">
                <a href="javascript:;">
                    欢迎您：<i class="layui-icon" style="font-size: 1.2rem;">&#xe612;</i>
                <?php echo $username; ?>
                </a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 1.2rem;">&#xe620;</i>
                    设置
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Author/logo'); ?>" target="_content">头像修改</a></dd>
                    <dd><a href="<?php echo url('author/setpass'); ?>" target="_content">密码修改</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?php echo url('login/logout'); ?>">退出</a></li>
        </ul>
    </div>

    <?php if($account): ?><!-- 如果common表中account有传内容过来的话就进if语句 -->
    <!--  管理员所看到页面 -->
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                
                <li class="layui-nav-item layui-nav-itemed logo-wei">
                    <img src="" alt="请添加您的个人头像"  class='img-logo'>
                </li>
                {/volist}
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="<?php echo url('index/system'); ?>" target="_content">后台首页</a>
                  
                </li>
                <li class="layui-nav-item">
                   
                    <a href="<?php echo url('author/admin_index'); ?>" target="_content">用户列表</a></dd>
                     
  
                </li>


                <li class="layui-nav-item">
                    <a href="<?php echo url('article/article_admin'); ?>" target="_content">文章列表</a>
                     
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">文章类别</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('category/add'); ?>" target="_content">增加类别</a></dd>
                        <dd><a href="<?php echo url('Category/index'); ?>" target="_content">类别列表</a></dd>
                    </dl>
                </li>

                <li class="layui-nav-item ">
                    <a class="" href="javascript:;">管理员</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('admin/Manager/add'); ?>" target="_content">添加管理员</a></dd>
                        <dd><a href="<?php echo url('admin/Manager/index'); ?>" target="_content">管理员列表</a></dd>
                        
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    

    <?php else: ?>
    <!-- 用户所看的页面即它的html -->
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                
                <li class="layui-nav-item layui-nav-itemed logo-wei shua">
                    <?php if(is_array($logo) || $logo instanceof \think\Collection || $logo instanceof \think\Paginator): $i = 0; $__LIST__ = $logo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <img src="/boke/public/uploads/<?php echo $vo['logo']; ?>" alt="请添加您的个人头像"  class='img-logo'>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
                
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="<?php echo url('index/system'); ?>" target="_content">后台首页</a>
                  
                </li>
                

                <li class="layui-nav-item">
                    <a href="<?php echo url('author/edit'); ?>" target='_content'>修改个人资料</a>
                </li>


                <li class="layui-nav-item">
                    <a href="javascript:;">文章管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('Article/article_author'); ?>" target="_content">我的文章</a></dd>
                        <dd><a href="<?php echo url('Article/add'); ?>" target="_content">发表文章</a></dd>
                    </dl>
                </li>

            </ul>
        </div>
    </div>
    <?php endif; ?>
    


    <div class="layui-body" id="layui-body" style="overflow: hidden;">
        <!-- 内容主体区域 -->
        <div class="title ly-right-title" style='background:#ccc;height: 40px;line-height:40px;'><span class="actived" style='background: white;padding:10px;'><i class="layui-icon">&#xe68e;</i><span id="righttitle">基本信息</span></span></div>
        <iframe id="_content" name="_content" src="<?php echo url('index/system'); ?>" scrolling="yes" frameborder="no" width="100%" height="100%"></iframe>
    </div>

</div>
<script src="/boke/public/static/js/jquery.min.js"></script>
<script src="/boke/public/static/css/layui/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;
		
    });

</script>

</body>
</html>