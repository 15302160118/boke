<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy1\WWW\boke\public/../application/admin\view\boke\learn.html";i:1528549591;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>博客网站</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/boke/public/static/qianduan/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


		<!-- 下面是引入滑动背景效果 -->
		<link href="/boke/public/static/huadongbg/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
		<link href="/boke/public/static/huadongbg/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
		<link href="/boke/public/static/huadongbg/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link rel="stylesheet" href="/boke/public/static/css/layui/layui/css/layui.css">
		<style>
		body{
			margin: 0;
			padding: 0;
		}
			.pagination a{
				padding:2px 12px 27px 12px!important;

		
			}
			.pagination p{
				padding:2px 12px 26px 12px!important;
			}
			.content p:first-child{
				display: block;
				display: -webkit-box;
			    -webkit-line-clamp: 3;
			    -webkit-box-orient: vertical;
			    overflow: hidden;
			
			}
			.content p{
				display: none;
			}
			table img{
				padding: 0;
				margin: 0;
			}
			.logo1{
				width:40%;
				border-radius: 100%;
				/*height: auto;*/
			}
			.hot{
				font-size: 30px;
				text-align: center;
				font-weight: bolder;
			}
			.demo{
				border-radius: 10px;
			    background:rgba(255,255,255,.3);
				width:70%;
				padding: 20px;
				margin: 0 auto;
				overflow: hidden;
			}
			.title{
				margin: 0 auto;
				font-weight: bolder;
				font-size: 30px;
				font-family: 'YouYuan';
			}
			.author-time{
				float: right;
				font-family: 'STXingkai';
				font-size: 20px;
			}
			.content1{
				margin: 100px 0 0  0!important;
				
			}
			.description1
			{
				margin: 10px 0 0 0;
			}
			.cover img{
				width:100%;
			}
		</style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?php echo url('index'); ?>">博客网站</a></h1>
						<nav class="links">
							<ul>
								<li><a href="<?php echo url('index'); ?>">首页</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Log In</a></li>
								</ul>
							</section>

					</section>
      	</div>
      		
      			<!-- 
	      				
		      				<p class='wenzi'></p> --><!-- 不要对此div做出任何padding、margin修改，因为遍历出的有许多是空的，如果是空的给他们一个padding,就会扰乱格式. -->
			
	      			<!--  -->
      						
		<!-- 	<section class="our-services " id="service"> -->
			
				<div class="demo">
					
						<span class='author-time'><?php if(is_array($author) || $author instanceof \think\Collection || $author instanceof \think\Paginator): $i = 0; $__LIST__ = $author;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id'] == $article['author_id']): ?><?php echo $vo['realname']; endif; endforeach; endif; else: echo "" ;endif; ?> | <?php echo $article['update_time']; ?></span>

						<span class='title'><?php echo $article['title']; ?></span>
						<p class='description1'><?php echo $article['description']; ?></p>
						<div class='cover'><img src="/boke/public/uploads/<?php echo $article['logo']; ?>" alt=""></div>
						<div class='content1'><?php echo $article['content']; ?></div>
				</div>

			<!-- </section>

			<section class="our-events " id="events">
	
			</section>
			
			<section class="our-testimonials slideanim" id="testimonials">

			</section>

			<section class="our-contacts slideanim" id="contact">
			</section> -->

					
			


		<!-- Scripts -->
			<script src="/boke/public/static/qianduan/assets/js/jquery.min.js"></script>
			<script src="/boke/public/static/qianduan/assets/js/skel.min.js"></script>
			<script src="/boke/public/static/qianduan/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/boke/public/static/qianduan/assets/js/main.js"></script>


			<script src="/boke/public/static/huadongbg/js/jquery.min.js"></script>
			<script src="/boke/public/static/huadongbg/js/bootstrap.min.js"></script>
			<script src="/boke/public/static/huadongbg/js/SmoothScroll.min.js"></script>
			<script src="/boke/public/static/huadongbg/js/darkbox.js"></script>
			<script src="/boke/public/static/huadongbg/js/main.js"></script>
			<script>
			$(document).ready(function(){
			  // Add smooth scrolling to all links in navbar + footer link
			  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

			  // Store hash
			  var hash = this.hash;

			  // Using jQuery's animate() method to add smooth page scroll
			  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			  $('html, body').animate({
			    scrollTop: $(hash).offset().top
			  }, 900, function(){

			    // Add hash (#) to URL when done scrolling (default click behavior)
			    window.location.hash = hash;
			    });
			  });
			})
			</script>
			<script>
			$(window).scroll(function() {
			  $(".slideanim").each(function(){
			    var pos = $(this).offset().top;

			    var winTop = $(window).scrollTop();
			    if (pos < winTop + 600) {
			      $(this).addClass("slide");
			    }
			  });
			});
			</script>
	</body>
</html>