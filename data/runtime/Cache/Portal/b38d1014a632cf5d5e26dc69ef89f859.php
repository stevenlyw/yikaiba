<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>壹凯巴欢迎您光临</title>
<link rel="shortcut icon" type="image/x-icon" href="index.htmlfavicon.png" />
<meta name="keywords" content="壹凯巴" />
<meta name="description" content="壹凯巴" />
<link type="text/css" href="/yikaiba.com/themes/simplebootx/Public/assets/css/common.css" rel="stylesheet">
<link type="text/css" href="/yikaiba.com/themes/simplebootx/Public/assets/css/index.css" rel="stylesheet">
<script type="text/javascript" src="/yikaiba.com/themes/simplebootx/Public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/yikaiba.com/themes/simplebootx/Public/assets/js/slide.js"></script>
</head>
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
<div class="box_one fn-clear">
  <div class="fcous">
    <div class="ck-slide">
    <?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
      <ul class="ck-slide-wrapper">
      
        <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
          <a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt="<?php echo ($vo["slide_name"]); ?>"></a>
        </li><?php endforeach; endif; ?>
      </ul>
      <a href="javascript:" class="ctrl-slide ck-prev">上一张</a> <a href="javascript:" class="ctrl-slide ck-next">下一张</a>
      <div class="ck-slidebox">
        <div class="slideWrap">
          <ul class="dot-wrap">
          <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li <?php if($key == 0): ?>class="current"<?php endif; ?>><em>1</em></li><?php endforeach; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="hot_arc">
    <h2><a href="index.php?g=portal&m=list&a=index&id=3" class="more">更多&raquo;</a><span>最新文章</span></h2>
    <div class="inhot">
      <ul>
      <?php $lastnews=sp_sql_posts("cid:3;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:4;"); ?>
	<?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
        <li><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"  ><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>
     </ul>
    </div>
  </div>
</div>
<div class="uicontent">
  <h2 class="fn-clear">
    <span><a href="index.php?g=portal&m=list&a=index&id=4">更多作品</a></span>
    <em>最新企业推荐</em>
    <?php $where = array("recommended"=>"1"); $lastnews_qy=sp_sql_posts("cid:4;field:post_hits,post_title,post_excerpt,tid,smeta;order:listorder asc;limit:4;",$where); ?>
  </h2>
  <ul class="uibox fn-clear">
  <?php if(is_array($lastnews_qy)): foreach($lastnews_qy as $key=>$vo): $smeta_qy=json_decode($vo['smeta'],true); ?>
    <li>
      <a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"  >
        <img src="<?php echo sp_get_asset_upload_path($smeta_qy['thumb']);?>" width="275" height="190" alt="<?php echo ($vo["post_title"]); ?>" />
      </a>
      <div class="lion">
        <div class="lititle"><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"  ><?php echo ($vo["post_title"]); ?></a></div>
        <div class="lides">
          <p>
           <?php echo ($vo["post_excerpt"]); ?>          <br/>
           <?php echo date('Y年m月d日  H:i',strtotime($vo['post_modified']));?> 发布
            <br/>
            <span class="cf30"><?php echo ($vo["post_hits"]); ?></span> 点击
          </p>
        </div>
      </div>
    </li><?php endforeach; endif; ?>
      </ul>
</div>
<div class="uicontent">
  <h2 class="fn-clear">
    <span><a href="index.php?g=portal&m=list&a=index&id=8">更多作品</a></span>
    <em>最新商城推荐</em>
    <?php $lastnews_sc=sp_sql_posts("cid:8;field:post_hits,post_title,post_excerpt,tid,smeta;order:listorder asc;limit:4;"); ?>
  </h2>
  <ul class="uibox fn-clear">
  <?php if(is_array($lastnews_sc)): foreach($lastnews_sc as $key=>$vo): $smeta_sc=json_decode($vo['smeta'],true); ?>
    <li>
      <a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"  >
        <img src="<?php echo sp_get_asset_upload_path($smeta_sc['thumb']);?>" width="275" height="190" alt="<?php echo ($vo["post_title"]); ?>" />
      </a>
      <div class="lion">
        <div class="lititle"><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"  ><?php echo ($vo["post_title"]); ?></a></div>
        <div class="lides">
          <p>
            <?php echo ($vo["post_excerpt"]); ?><br/>
           <?php echo date('Y年m月d日  H:i',strtotime($vo['post_modified']));?> 发布
            <br/>
            <span class="cf30"><?php echo ($vo["post_hits"]); ?></span> 点击
          </p>
        </div>
      </div>
    </li><?php endforeach; endif; ?>
      </ul>
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