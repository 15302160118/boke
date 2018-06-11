<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy1\WWW\boke\public/../application/admin\view\author\logo.html";i:1527948496;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改头像</title>
	<link rel="stylesheet" href="/boke/public/static/webuploader/webuploader.css">
	<script type="text/javascript" src="/boke/public/static/js/jquery.min.js"></script>  <!-- 引用jquery -->  
	<script type="text/javascript" src="/boke/public/static/webuploader/webuploader.js"></script>    <!-- 引用插件js -->
</head>
<body>
	<!-- <p>请上传或更新您的个人头像：
		<form action="<?php echo url('upload'); ?>" enctype="multipart/form-data" method="post">
			<input type="file" name="logo" /> <br> 
			<input type="submit" value="上传" /> 
		</form> 
	</p> -->

	<div id="uploader-demo">
    <!--用来存放item-->
        <div id="fileList" class="uploader-list">
        </div>
    	<div id="filePicker">选择图片</div>
	</div>

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
</body>
</html>