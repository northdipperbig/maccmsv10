<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:39:"template/m1938pc/html9/index/index.html";i:1588574038;s:69:"/www/wwwroot/www.m9628.com/template/m1938pc/html9/public/include.html";i:1588574038;s:66:"/www/wwwroot/www.m9628.com/template/m1938pc/html9/public/head.html";i:1588574038;s:73:"/www/wwwroot/www.m9628.com/template/m1938pc/html9/public/block_slide.html";i:1588574038;s:73:"/www/wwwroot/www.m9628.com/template/m1938pc/html9/public/block_video.html";i:1588574038;s:66:"/www/wwwroot/www.m9628.com/template/m1938pc/html9/public/foot.html";i:1588574038;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!--[if lt IE 9]>
<script src="<?php echo $maccms['path_tpl']; ?>images/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>images/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="<?php echo $maccms['path_tpl']; ?>images/css/bootstrap.min.css" rel="stylesheet" type="text/css" />				
<link href="<?php echo $maccms['path_tpl']; ?>images/css/swiper.min.css" rel="stylesheet" type="text/css" >		
<link href="<?php echo $maccms['path_tpl']; ?>images/font/iconfont.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>images/css/blackcolor.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>images/css/style.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path_tpl']; ?>images/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>images/js/bootstrap.min.js"></script>		
<script src="<?php echo $maccms['path_tpl']; ?>images/js/function.js"></script>
<script type='text/javascript' src="<?php echo $maccms['path_tpl']; ?>images/js/LazyLoad.js"></script>
<script type='text/javascript' src="<?php echo $maccms['path_tpl']; ?>images/js/swiper.min.js"></script>
<script type="text/javascript " src="<?php echo $maccms['path_tpl']; ?>images/js/history.js "></script>	
<style type="text/css">

body:before{
background: url(<?php echo $maccms['path_tpl']; ?>images/20181220/20181220221130_31598.jpg) center 0 no-repeat; background-attachment: fixed;background-size: cover;  
    overflow: hidden;
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; attachment-attachment: fixed;background-size: cover;} 
}


</style>

	</head>
	<body>		
		<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo">
					<a class="hidden-sm hidden-xs" href="<?php echo $maccms['path']; ?>" style="width:280px;"><img src="<?php echo $maccms['path_tpl']; ?>images/logo.png" style="width:100%;margin-top:15px;"/></a>
		  			<a class="visible-sm visible-xs" href="<?php echo $maccms['path']; ?>"><img src="<?php echo $maccms['path_tpl']; ?>images/logo_min.png" /></a>											  
				</div>	
				<div class="search">
<form id="ff-search" role="search" action="<?php echo mac_url('vod/search'); ?>" method="post">
                            <input class="form-control" placeholder="输入影片关键词..." type="text" id="ff-wd" name="wd" required="">
                            <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" onClick="$('#ff-search').submit();"><i class="icon iconfont icon-sou"></i></a></form>
			   </div>			   
			   <ul class="menulist hidden-xs">
					<li <?php if($maccms['aid'] == 1): ?>class="active"<?php endif; ?>><a href="<?php echo $maccms['path']; ?>">首页</a></li>
					 <?php $__TAG__ = '{"ids":"1,2,4,3","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>					
					<li  <?php echo $vo['type_id']; ?>=<?php echo $vo['type_pid']; if(($vo['type_id'] == MAC_TYPE_ID || $vo['type_id'] == MAC_TYPE_PID)): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"> <?php echo $vo['type_name']; ?></a></li>						  
					<?php endforeach; endif; else: echo "" ;endif; ?>	
						<li class="act6"><a href="<?php echo mac_url('label/zhibo'); ?>" target="_blank">直播</a></li>
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>


		<style type="text/css">

	.weixin-tip{display: none; position: fixed; left:0; top:0; bottom:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80);  height: 100%; width: 100%; z-index: 99999;}
	.weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}
	</style>	
		<!--main-->

<div class="container">
<div class="row"  style="margin-top:10px"></div>
  <div class="row">
		<div class="hy-layout clearfix">
			<div class="col-lg-7 col-md-6 col-sm-12">
				<div class="swiper-container hy-slide">
					<div class="swiper-wrapper">
					
					<?php $__TAG__ = '{"num":"3","type":"all","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	            				<div class="swiper-slide">
	<div class="hy-video-slide">
		<a class="videopic" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" style="padding-top: 60%; background: url(<?php echo mac_url_img($vo['vod_pic']); ?>)  no-repeat; background-position:50% 50%; background-size: cover;">	
			<span class="title"><?php echo $vo['vod_name']; ?></span>
	    </a>
	</div>	            					
</div>
	            				<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<div class="swiper-button-next hidden-xs">
						<i class="icon iconfont icon-xiangyou"></i>
					</div>
					<div class="swiper-button-prev hidden-xs">
						<i class="icon iconfont icon-xiangzuo"></i>
					</div>
					<div class="swiper-pagination">
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12 padding-0">
				<div class="hy-index-menu clearfix">
					<div class="item">
						<ul class="clearfix">
                            <li><a href="<?php echo mac_url('user/index'); ?>d"><i class="icon iconfont icon-zhibo  text-color"></i><span>电视直播</span></a></li>						
							<li><a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>"><i class="icon iconfont icon-vip text-color"></i><span>会员影院</span></a></li>
							<li><a href="<?php $__TAG__ = '{"ids":"2","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>"><i class="icon iconfont icon-tv_icon text-color"></i><span>电视剧</span></a></li>
							<li><a href="<?php echo mac_url('user/index'); ?>"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu- text-color"></i><span>会员中心</span></a></li>
							                  
						</ul>
					</div>
				</div>
				<div class="hy-index-tags hidden-md clearfix">
					<div class="item">
						<ul class="clearfix">
													<?php $__TAG__ = '{"ids":"6,7,8,9,10,11,12,13","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>															
									<li><a class="text-overflow" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>					</ul>
					</div>
				</div>
				<div class="hy-right-qrcode hidden-sm hidden-xs">
					<div class="item">
						<dl class="clearfix">
							<dt>	<img class="pic-responsive" src="/static/images/code.png" alt="扫描二维码" /></dt>
							<dd>
							<h4>众乐乐影院</h4>
							<p class="text-muted">
								按住键盘左下角Ctrl再按D键保存此网站！
							</p>
							<p class="margin-0 text-muted">
								<div id="takeurl"></div>						</p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
<!--抢先看-->
<script type="text/javascript">
 var takeurl = window.location.host
 var tu = document.getElementById("takeurl")
 tu.innerText = takeurl
</script>

<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<h3 class="margin-0"><i class="icon iconfont icon-vip text-color"></i> 会员影院</h3>
				
				<ul class="pull-right"> <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="text-muted hidden-md hidden-sm hidden-xs">			
				<a href="<?php echo mac_url_type($vo); ?>" class="text-muted border-right" /><?php echo $vo['type_name']; ?></a> /</li><?php endforeach; endif; else: echo "" ;endif; ?>
	<li class="active"><a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
			</ul>
			</div>
			<div class="clearfix">
				<div class="hy-video-list cleafix">
					<div class="item">
					    
                 <?php $__TAG__ = '{"num":"12","type":"all","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							    <div class="col-md-2 col-sm-3 col-xs-4 {if-A:<?php echo $key; ?> > 6}visible-sm{endif-A}">						    	
						    		﻿<a class="videopic lazy" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" style="background: url(<?php echo $maccms['path_tpl']; ?>css/load.gif) no-repeat; background-position:50% 50%; background-size: cover;" >								
		<span class="play hidden-xs"></span>										
		<span class="score"><?php echo $vo['vod_hits']; ?></span> 						
</a>
<div class="title">
	<h5 class="text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
</div>
<div class="subtitle text-muted text-muted text-overflow hidden-xs">
	主演：<?php echo $vo['vod_actor']; ?>
</div>							    				    						
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>	
				
			</div></div></div>
			<div class="hy-video-footer visible-xs clearfix">
				<a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
			</div>
		</div>
		<!--抢先看-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<!--电影-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<?php $__TAG__ = '{"parent":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="<?php echo mac_url_type($vo); ?>" class="text-muted border-right"><?php echo $vo['type_name']; ?></a> /</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<li class="active"><a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-caidanicondianyinghui text-color"></i>电影</h3>
			</div>
			<div class="clearfix">
  <?php $__TAG__ = '{"num":"12","type":"1","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							    <div class="col-md-2 col-sm-3 col-xs-4 {if-A:<?php echo $key; ?> > 6}visible-sm{endif-A}">						    	
						    		﻿<a class="videopic lazy" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" style="background: url(<?php echo $maccms['path_tpl']; ?>css/load.gif) no-repeat; background-position:50% 50%; background-size: cover;" >								
		<span class="play hidden-xs"></span>										
		<span class="score"><?php echo $vo['vod_hits']; ?></span> 						
</a>
<div class="title">
	<h5 class="text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
</div>
<div class="subtitle text-muted text-muted text-overflow hidden-xs">
	主演：<?php echo $vo['vod_actor']; ?>
</div>							    				    						
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>	
		

				<div class="hy-video-footer visible-xs clearfix">
					<a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
				</div>
			</div>
		</div>		<!--电影-->
		<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<!--电视剧-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<?php $__TAG__ = '{"parent":"2","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="<?php echo mac_url_type($vo); ?>" class="text-muted border-right"><?php echo $vo['type_name']; ?></a> /</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<li class="active"><a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-tv_icon text-color"></i>电视剧</h3>
			</div>
			<div class="clearfix">
 <?php $__TAG__ = '{"num":"12","type":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							    <div class="col-md-2 col-sm-3 col-xs-4 {if-A:<?php echo $key; ?> > 6}visible-sm{endif-A}">						    	
						    		﻿<a class="videopic lazy" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" style="background: url(<?php echo $maccms['path_tpl']; ?>css/load.gif) no-repeat; background-position:50% 50%; background-size: cover;" >								
		<span class="play hidden-xs"></span>										
		<span class="score"><?php echo $vo['vod_hits']; ?></span> 						
</a>
<div class="title">
	<h5 class="text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
</div>
<div class="subtitle text-muted text-muted text-overflow hidden-xs">
	主演：<?php echo $vo['vod_actor']; ?>
</div>							    				    						
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>	
			</div>
		</div>		<!--电视剧-->
						<!--综艺-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<?php $__TAG__ = '{"parent":"3","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="<?php echo mac_url_type($vo); ?>" class="text-muted border-right"><?php echo $vo['type_name']; ?></a> /</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<li class="active"><a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-jiemu text-color"></i>综艺</h3>
			</div>
			<div class="clearfix">
				   <?php $__TAG__ = '{"num":"12","type":"3","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							    <div class="col-md-2 col-sm-3 col-xs-4 {if-A:<?php echo $key; ?> > 6}visible-sm{endif-A}">						    	
						    		﻿<a class="videopic lazy" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" style="background: url(<?php echo $maccms['path_tpl']; ?>css/load.gif) no-repeat; background-position:50% 50%; background-size: cover;" >								
		<span class="play hidden-xs"></span>										
		<span class="score"><?php echo $vo['vod_hits']; ?></span> 						
</a>
<div class="title">
	<h5 class="text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
</div>
<div class="subtitle text-muted text-muted text-overflow hidden-xs">
	主演：<?php echo $vo['vod_actor']; ?>
</div>							    				    						
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>		<!--综艺-->
										<!--动漫-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<?php $__TAG__ = '{"parent":"4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="<?php echo mac_url_type($vo); ?>" class="text-muted border-right"><?php echo $vo['type_name']; ?></a> /</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<li class="active"><a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-liebiaodaohang_dongman text-color"></i>动漫</h3>
			</div>
			<div class="clearfix">
				   <?php $__TAG__ = '{"num":"12","type":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							    <div class="col-md-2 col-sm-3 col-xs-4 {if-A:<?php echo $key; ?> > 6}visible-sm{endif-A}">						    	
						    		﻿<a class="videopic lazy" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" style="background: url(<?php echo $maccms['path_tpl']; ?>css/load.gif) no-repeat; background-position:50% 50%; background-size: cover;" >								
		<span class="play hidden-xs"></span>										
		<span class="score"><?php echo $vo['vod_hits']; ?></span> 						
</a>
<div class="title">
	<h5 class="text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
</div>
<div class="subtitle text-muted text-muted text-overflow hidden-xs">
	主演：<?php echo $vo['vod_actor']; ?>
</div>							    				    						
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>		<!--动漫-->
		<script>
	    var swiper = new Swiper('.hy-slide', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        autoplay: 3000,
	        nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
	    });	    
	    </script>
		
		<div class="hy-gototop hidden-sm hidden-xs">
   <ul class="item clearfix">
    <li><a href="<?php echo mac_url('user/index'); ?>" title="会员中心"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu-"></i></a></li>
    <li><a href="<?php echo mac_url('gbook/index'); ?>" title="留言求片"><i class="icon iconfont icon-qiu"></i></a></li>
	<li><a href="javascript:()" title="观看记录"><i class="icon iconfont icon-icon-"></i></a><div class="history clearfix" style="width:200px">
				<div class="head">
					<h5 class="margin-0 text-muted">观看历史</h5>
				</div>
<script type="text/javascript ">
					$MH.limit = 5;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '<?php echo $obj['vod_name']; ?>',
						link: '<?php echo mac_url_vod_play($obj); ?>',
						pic: '<?php echo mac_url_img($obj['vod_pic']); ?>'
					})
				</script>

			</div>	</li>		
    <li><a class="" href="javascript:#" title="扫码手机观看" onclick="ewm()" style="z-index:9999999;"><i class="icon iconfont icon-erweima"></i></a></li>
    <li><a data-toggle="tooltip" data-placement="top" class="" href="javascript:scroll(0,0)" title="TOP"><i class="icon iconfont icon-top02"></i></a></li>   </ul>
  </div>
<div class="tabbar visible-xs">
		<a href="<?php echo $maccms['path']; ?>" class="item ">
        <i class="icon iconfont icon-shouye"></i>
        <p class="text">首页</p>
    </a>
	<a href="<?php $__TAG__ = '{"ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="item ">
        <i class="icon iconfont icon-caidanicondianyinghui"></i>
        <p class="text">电影</p>
    </a><a href="<?php $__TAG__ = '{"ids":"2","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="item ">
        <i class="icon iconfont icon-tv_icon"></i>
        <p class="text">剧集</p>
    </a><a href="<?php $__TAG__ = '{"ids":"4","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="item ">
        <i class="icon iconfont icon-liebiaodaohang_dongman"></i>
        <p class="text">动漫</p>
    </a><a href="<?php $__TAG__ = '{"ids":"3","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><?php echo mac_url_type($vo); endforeach; endif; else: echo "" ;endif; ?>" class="item ">
        <i class="icon iconfont icon-jiemu"></i>
        <p class="text">综艺</p>
    </a>    </div>
	<div style="position:fixed;width:300px;height:350px;top:50%;left:0%;margin-left:-150px;margin-top:-175px;display: none;z-index: 9999999;" id="gbewm" onclick="ewmgb()">
	<div style="text-align:center;line-height: 50px;background-color: #2db2ea;color: #fff;font-size: 20px;font-weight: bold;border-radius: 5px 5px 0px 0px;">扫码二维码，手机观看！</div>
	<img src="http://s.jiathis.com/qrcode.php?url=http://www.m1938.com" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;"/>
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><span style="color:#fff;text-align:center;"><div style="text-align:center;">
	<span style="color:#d2d3d6;">本网站内容收集于互联网 众乐乐视频影院不承担任何由于内容的合法性及健康性所引起的争议和法律责任</span> 
</div>
<span style="color:#d2d3d6;"> 
<div style="text-align:center;">
	Copyright &copy;&nbsp; 众乐乐视频影院 版权所有
</div>
</span></span>
					 	<p class="MsoNormal">
		<span><a href="<?php echo mac_url('rss/baidu'); ?>"><span>
		<span style="color:rgba(0,0,0,0.5);">百度</span>
		<span style="color:rgba(0,0,0,0.5);">地图</span></span>
		<span style="color:rgba(0,0,0,0.5);">sitemap</span></a>
		<span style="color:rgba(0,0,0,0.5);"> &nbsp;</span>
		<a href="<?php echo mac_url('rss/google'); ?>">
		<span style="color:rgba(0,0,0,0.5);">google</span>
		<span style="color:rgba(69,82,135,0.5);">地图</span>
		<span style="color:rgba(0,0,0,0.5);">sitemap</span></a>
		<span style="color:rgba(0,0,0,0.5);"> &nbsp;</span>
		<a href="<?php echo mac_url('rss/baidu'); ?>">
		<span style="color:rgba(0,0,0,0.5);">urllist</span></a></span> 
	</p>

					 </p>
				 </div>
			 </div>
	     </div>
<div style="display:none;"><?php echo $maccms['site_tj']; ?> 
</div>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $(".videopic.lazy").lazyload({effect: "fadeIn"});  
        $("[data-toggle='tooltip']").tooltip();
    });
	function ewm(){
		var url = "http://qr.liantu.com/api.php?text="+window.location.href;
		$("#ewmtp").attr('src',url);
		$("#gbewm").css("display","block");
		$("#gbewm").animate({left:'50%'});
	}
	function ewmgb(){
		$("#gbewm").animate({left:'100%'});
		$("#gbewm").css("display","none");
	}
</script>	
		<script type="text/javascript" charset="utf-8">
    $(function() {
        $(".videopic.lazy").lazyload({effect: "fadeIn"});  
        $("[data-toggle='tooltip']").tooltip();
    });
	function ewm(){
		var url = "http://qr.liantu.com/api.php?text="+window.location.href;
		$("#ewmtp").attr('src',url);
		$("#gbewm").css("display","block");
		$("#gbewm").animate({left:'50%'});
	}
	function ewmgb(){
		$("#gbewm").animate({left:'100%'});
		$("#gbewm").css("display","none");
	}
</script>	
</body>
</html>
