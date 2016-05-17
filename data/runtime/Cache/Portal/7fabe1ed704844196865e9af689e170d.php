<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($post_title); ?> <?php echo ($site_name); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="index.htmlfavicon.png" />
<meta name="keywords" content="壹凯巴" />
<meta name="description" content="壹凯巴" />
<link type="text/css" href="/yikaiba.com/themes/simplebootx/Public/assets/css/common.css" rel="stylesheet">
<link type="text/css" href="/yikaiba.com/themes/simplebootx/Public/assets/css/index.css" rel="stylesheet">
<script type="text/javascript" src="/yikaiba.com/themes/simplebootx/Public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/yikaiba.com/themes/simplebootx/Public/assets/js/slide.js"></script>
</head>
<?php $photo = $smeta['photo']; ?>
<body>
<div class="header">
  <div class="w1200 fn-clear">
    <div class="logo"><a href="/yikaiba.com/"><img src="/yikaiba.com/themes/simplebootx/Public/assets/img/logo.fw.png" width="300" height="80"  alt=""/></a></div>
    <div class="nav">
      <a href="index.php">首页</a>
      <a href="index.php?g=portal&m=list&a=index&id=3">文章</a>
      <a href="index.php?g=portal&m=list&a=index&id=4">企业官网</a>
      <a href="index.php?g=portal&m=list&a=index&id=8">商城系统</a>
      <a href="index.php?g=portal&m=list&a=index&id=13">APP</a>
      <a href="index.php?g=portal&m=list&a=index&id=14">微信</a>
    </div>
    <div class="formbox">
      <form action="<?php echo U('portal/search/index');?>" method="post" class="fn-clear">
        <input type="text" name="keyword" value="<?php echo I('get.keyword');?>" class="stext fn-left" placeholder="请输入关键词" value="" />
        <button type="submit" name="sbut" class="sbut fn-left"></button>
      </form>
    </div>
    <!--
    <div class="uinfo">
      <a href="index.html#" class="login">登录</a><a href="index.html#" class="reg">注册</a>
    </div>
    -->
  </div>
</div>
<div class="showcontent">
  <div class="wtitle">
    <h1><?php echo ($post_title); ?></h1>
    <div class="oinfo">
      <span>时间：<?php echo ($post_date); ?></span><span class="ml10">浏览：<?php echo ($post_hits); ?> 次</span>
    </div>
  </div>
  <div class="incontent">
    <div class="imgcenter">
      <?php if(empty($photo)): ?><p><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" alt="" /></p>
      <?php else: ?>
      <p></p>
                详细展示
            <!-- 轮播图开始  -->   
<link href="/yikaiba.com/themes/simplebootx/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="/yikaiba.com/themes/simplebootx/Public/bootstrap/js/jquery-2.1.4.min.js"></script>
<script src="/yikaiba.com/themes/simplebootx/Public/bootstrap/js/bootstrap.min.js"></script>
<div id="myCarousel" class="carousel slide" style="margin:0 auto;width:900px;">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
   <?php if(is_array($photo)): foreach($photo as $key=>$vo): ?><li data-target="#myCarousel" data-slide-to="<?php echo ($key); ?>" <?php if($key == 0): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; ?>
   </ol>
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <?php if(is_array($photo)): foreach($photo as $key=>$vo): ?><div class="item <?php if($key == 0): ?>active<?php endif; ?>">
         <img src="<?php echo sp_get_asset_upload_path($vo['url']);?>" style="margin:0 auto;" alt="<?php echo ($vo["alt"]); ?>">
      </div><?php endforeach; endif; ?>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
   <!-- 控制按钮 -->
   <div style="text-align:center;">
      <!-- <input type="button" class="btn start-slide" value="开始"> -->
      <input type="button" class="btn pause-slide" value="停止轮播">
      <!-- <input type="button" class="btn prev-slide" value="上一张">
      <input type="button" class="btn next-slide" value="下一张"> -->
      <?php if(is_array($photo)): foreach($photo as $key=>$vo): ?><input type="button" class="btn slide-<?php echo ($key); ?>" value="<?php echo ($vo["alt"]); ?>">&nbsp;&nbsp;<?php endforeach; endif; ?>    
   </div>
   <!--高速版-->
<div id="SOHUCS"></div>
<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
    window.changyan.api.config({
        appid: 'cyskK8R8y',
        conf: 'prod_5b4155fe1c0d905b94054ad181fa842a'
    });
</script>        

</div> 
<script>
   $(function(){
      // 初始化轮播
      $(".start-slide").click(function(){
         $("#myCarousel").carousel('cycle');
      });
      // 停止轮播
      $(".pause-slide").click(function(){
         $("#myCarousel").carousel('pause');
      });
      // 循环轮播到上一个项目
      $(".prev-slide").click(function(){
         $("#myCarousel").carousel('prev');
      });
      // 循环轮播到下一个项目
      $(".next-slide").click(function(){
         $("#myCarousel").carousel('next');
      });
   	  // 循环轮播到某个特定的帧 
   	  <?php if(is_array($photo)): foreach($photo as $key=>$vo): ?>$(".slide-<?php echo ($key); ?>").click(function(){
         $("#myCarousel").carousel(<?php echo ($key); ?>);
      });<?php endforeach; endif; ?>
   });
</script>
                <!-- 轮播图结束  --><?php endif; ?>
                </div>
  </div>
  <div class="btbox fn-clear">
    <div class="wface fn-left">
      <?php if(!empty($prev)): ?><p>上一篇：<a href="<?php echo U('article/index',array('id'=>$prev['tid']));?>"><?php echo ($prev["post_title"]); ?></a></p><?php endif; ?>
      
      <?php if(!empty($next)): ?><p>下一篇：<a href="<?php echo U('article/index',array('id'=>$next['tid']));?>"><?php echo ($next["post_title"]); ?></a></p><?php endif; ?>
    </div>
  </div>
</div>
<div class="wfooter">
  <div class="links">
    <h2>友情链接</h2>
    <?php $links=sp_getlinks(); ?>
<?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
  </div>
  <div class="aboutweb">
      站长统计：<span style="margin-bottom:5px;"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257155230'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1257155230%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></span>
  <span style="color:#B4A0AA">声明：本站部分截图版权归原作者所有，在此加以分享。如有冒犯，请来信说明。529988248@qq.com</span>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
	$(".category").hover(
	    function(){
		    $('.typebox').slideDown("fast");
		},
		function(){
		    $('.typebox').stop(true).slideUp("fast");
		}
	);
	$(".typebox").find('li').click(function(){
	    $(".catetext").text($(this).text());
		$("#catid").val($(this).attr("data-id"));
		$('.typebox').stop(true).slideUp("fast");
	});
	$('.ck-slide').ckSlide();
});
</script>
</body>
</html>