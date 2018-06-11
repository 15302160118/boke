<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy1\WWW\boke\public/../application/admin\view\article\search.html";i:1527991116;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的个人文章</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
  <link rel="stylesheet" href="/boke/public/font-awesome/css/font-awesome.min.css">
</head>
 <style>

.anniu{
  display: inline-block;
 }
  .layui-table{
    margin: 10px 10px;
    width:90% ;
  }
  .add{
    color:white;
  }
   #select{
    width:250px;
    margin: 0 0 0 30px;
    display: inline-block;
  }
  button{
    margin: 0 10px;
  }
  form{
    display: inline-block;margin: 20px 0;
  }
 </style>
<body>
  <button class='layui-btn layui-btn-green anniu'><a href="<?php echo url('add'); ?>" class='add'>新增</a></button>
  <form action="search" onsubmit="return check()"; method='post'>
    <input type="text" id='select' name="title"  placeholder="请输入要查询的文章标题或其关键字" autocomplete="off" class="layui-input" value="<?php echo input('post.title'); ?>">
    <button class="layui-btn layui-btn-primary anniu" type='submit'><i class="fa fa-search" aria-hidden="true"></i></button><button class="layui-btn layui-btn-primary anniu"><i class="fa fa-undo" aria-hidden="true"><a href="<?php echo url('article_author'); ?>">返回</a></i></button>   
  </form>
	<table class="layui-table" lay-size="sm">
    <colgroup>
      <col width="150">
      <col width="150">
      <col width='10'>
      <col width='100'>
      <col width="10">
    </colgroup>

    <thead>
      <tr>
        <th>文章标题</th>
        <th>文章类别</th>
        <th>状态</th>
        <th>创建时间</th>
        <th>操作</th>
      </tr> 
    </thead>
    <tbody>
      <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tr>
        <td><?php echo $vo['title']; ?></td>
        <td><?php echo $vo['Category']['categoryname']; ?></td>
        
        <td><?php if($vo['status'] == '1'): ?><span class="layui-btn layui-btn-radius layui-btn-green layui-btn-sm">正常</span><?php else: ?><span class="layui-btn layui-btn-radius layui-btn-danger layui-btn-sm">锁定</span><?php endif; ?></td>
        <td><?php echo $vo['create_time']; ?></td>
        <td><a href="<?php echo url('edit?id='.$vo['id']); ?>" class='layui-btn layui-btn-warm layui-btn-sm'>编辑</a><a href="<?php echo url('delete?id='.$vo['id']); ?>" class='layui-btn layui-btn-danger layui-btn-sm del'>删除</a></td>

      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
     
    </tbody>
</table>
  <?php echo $articles->render(); ?>
	<script src="/boke/public/static/css/layui/layui/layui.js"></script>
	<script src="/boke/public/static/js/jquery.min.js"></script>
	<script>
    
    layui.use('layer', function(){
        var layer = layui.layer;
        // $('.del').on('click',function () {
        //     var url=$(this).attr('href');
        //     layer.confirm('确定要删除该管理员吗?', {icon: 3, title:'温馨提示'}, function(index){
        //         //do something
        //         location.href=url;
        //         layer.close(index);
        //     });
        //     return false;
        // })
    });
         

  	    $(function(){
  	        $(window.parent.document).find('#righttitle').text($('title').text());
  	   });
	</script>
</body>
</html>