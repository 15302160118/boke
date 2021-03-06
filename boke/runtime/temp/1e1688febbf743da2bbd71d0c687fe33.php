<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy1\WWW\boke\public/../application/admin\view\category\index.html";i:1528339131;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>类别列表</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
  <link rel="stylesheet" href="/boke/public/font-awesome/css/font-awesome.min.css">
</head>
 <style>
   .anniu{
    display: inline-block;
   }
    #select{
      width:250px;
      margin: 0 0 0 30px;
      display: inline-block;
    }
    form{
      display: inline-block;
    }
    .add{
      margin: 0 0 0 10px;
    }
    .layui-table{
      margin: 20px 0 0 10px;
      width:90%;
    }
 </style>
 <script>
    function check()
    {
      var select=document.getElementById('select').value;
      if(select=='')
      {
        alert('查询值不能为空');
        return false;
      }
    }
 </script>
  <style>
    .layui-btn-green{
      background: #5cb85c;
    }
 </style>
<body>
<fieldset class='layui-elem-field layui-field-title' >
  <legend>类别列表 <a class="layui-btn layui-btn-radius layui-btn-danger layui-btn-sm" href="<?php echo url(''); ?>"> excel批量导入 </a><a class="layui-btn layui-btn-radius layui-btn-warm layui-btn-sm" href="<?php echo url('author/expuser'); ?>"> excel批量导出 </a></legend>
</fieldset>
    <a href="<?php echo url('add'); ?>"><button class="layui-btn layui-btn-green anniu add" type='submit'><i class="fa fa-plus" aria-hidden="true"></i>新增</button></a> 

  <form action="search" onsubmit="return check()"; method='post'>
    <input type="text" id='select' name="categoryname"  placeholder="请输入要查询的文章类别或其关键字" autocomplete="off" class="layui-input" value=''>
    <button class="layui-btn layui-btn-primary anniu" type='submit'><i class="fa fa-search" aria-hidden="true"></i></button> 
  </form>
    
	<table class="layui-table" lay-size="sm">
    <colgroup>
      <col width="10">
      <col width="150">
      <col width="10">
      <col width='100'>
      <col width='10'>
    </colgroup>

    <thead>
      <tr>
        <th>ID</th>
        <th>文章类别</th>
        <th>状态</th>
        <th>创建时间</th>
        <th>操作</th>
      </tr> 
    </thead>
    <tbody>
      <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tr>
        <td><?php echo $vo['id']; ?></td>
        <td><?php echo $vo['categoryname']; ?></td>
        <td><?php if($vo['status'] == '1'): ?><span class="layui-btn layui-btn-radius layui-btn-green layui-btn-sm">正常</span><?php else: ?><span class="layui-btn layui-btn-radius layui-btn-danger layui-btn-sm">锁定</span><?php endif; ?></td>
        <td><?php echo $vo['create_time']; ?></td>

        
        <td><a href="<?php echo url('edit?id='.$vo['id']); ?>" class='layui-btn layui-btn-warm layui-btn-sm'>编辑</a><a href="<?php echo url('delete?id='.$vo['id']); ?>" class='layui-btn layui-btn-danger layui-btn-sm del'>删除</a></td>

      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
     
    </tbody>
</table>
  <?php echo $category->render(); ?>
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