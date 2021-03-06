<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\boke\public/../application/admin\view\author\edit.html";i:1528080462;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
	<link rel="stylesheet" href="/boke/public/static/css/style.css">
    <link rel="stylesheet" href="/boke/public/static/webuploader/webuploader.css">
	<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
    <script type="text/javascript" src="/boke/public/static/js/jquery.min.js"></script>  <!-- 引用jquery -->  
    <script type="text/javascript" src="/boke/public/static/webuploader/webuploader.js"></script>    <!-- 引用插件js -->
	<style>
        body{
            height: 1000px;
        }
    </style>
</head>
<body>
	<form class="layui-form" onsubmit='return check();' action="<?php echo url('author/update'); ?>" method="post" >
        <div class="layui-form-item">
            <label class="layui-form-label">管理员账号</label>
            <div class="layui-input-inline">
                <input type="text" name="username" readonly="readonly" required  placeholder="请输入账号"  class="layui-input" value="<?php echo $author['username']; ?>">不允许修改账号
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">真实姓名</label>
            <div class="layui-input-inline">
                <input type="text" name="realname" required  placeholder="请输入真实姓名"  class="layui-input" value="<?php echo $author['realname']; ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">头像</label>
            <div class="layui-input-inline">
                <div id="uploader-demo">
                <!-- 用来存放item -->
                    <div id="fileList" class="uploader-list">
                    </div>
                    <div id="filePicker">选择图片</div>
                </div>
            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-inline">
                <input type="text" id='password' name="password" required placeholder="请输入密码"  class="layui-input"  value="<?php echo $author['password']; ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">电子邮箱</label>
            <div class="layui-input-inline">
                <input type="text" id='password' name="email" required placeholder="请输入电子邮箱"  class="layui-input"  value="<?php echo $author['email']; ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">创建时间</label>
            <div class="layui-input-inline">
                <input type="text" id='password' name="create_time"   class="layui-input" readonly='readonly' value="<?php echo date('Y-m-d H:i:s',$author['create_time']); ?>">不许修改
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">更新时间</label>
            <div class="layui-input-inline">
                <input type="text" id='password' name="update_time"   class="layui-input" readonly='readonly' value="<?php echo date('Y-m-d H:i:s',$author['update_time']); ?>">不许修改
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
                <input class="layui-btn" type='submit' lay-submit lay-filter="formDemo" value='修改' onclick="tiao()"></input>
            </div>
        </div>
    </form>
	<script src="/boke/public/static/css/layui/layui/layui.js"></script>
	<script src="/boke/public/static/js/jquery.min.js"></script>
    <script type="text/javascript">
           var $list=$("#fileList");   //这几个初始化全局的百度文档上没说明，好蛋疼
           var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
           var thumbnailHeight = 100;  
           var uploader = WebUploader.create({
            // 选完文件后，是否自动上传。
           auto: true,
            // swf文件路径
           swf: '/boke/public/static/webuploader/Uploader.swf', //加载swf文件，路径一定要对
            // 文件接收服务端。
            server: '<?php echo url("author/upload"); ?>',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });
      //上传完成事件监听
        uploader.on( 'fileQueued', function(file) {
            var $li = $(
                    '<div id="' + file.id + '" class="file-item thumbnail">' +
                        '<img>' +
                        '<div class="info">' + file.name + '</div>' +
                    '</div>'
                    ),
                $img = $li.find('img');
            // $list为容器jQuery实例
                   $list.append( $li );
            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }
                $img.attr( 'src', src );
            }, thumbnailWidth, thumbnailHeight );
        });
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
    <script>
        function tiao()
        {
            window.top.location.reload();
        }
    </script>
</body>
</html>