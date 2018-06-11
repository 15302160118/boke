<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\boke\public/../application/admin\view\author\logo.html";i:1527515758;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改头像</title>
</head>
<body>
	<p>请上传您的个人头像：
		<form action="<?php echo url('upload'); ?>" enctype="multipart/form-data" method="post">
			<input type="file" name="image" /> <br> 
			<input type="submit" value="上传" /> 
		</form> 
	</p>
</body>
</html>