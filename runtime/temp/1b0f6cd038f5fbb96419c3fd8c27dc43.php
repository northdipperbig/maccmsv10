<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/youku_wap/html/index/index.html";i:1588576294;s:70:"/www/wwwroot/www.m9628.com/template/youku_wap/html/public/include.html";i:1588576294;s:67:"/www/wwwroot/www.m9628.com/template/youku_wap/html/public/head.html";i:1588576294;s:67:"/www/wwwroot/www.m9628.com/template/youku_wap/html/public/foot.html";i:1588576294;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
    <link href="<?php echo $maccms['path_tpl']; ?>youku_m/css/aui.css?3.9.180725" rel="stylesheet"/>
<link href="<?php echo $maccms['path_tpl']; ?>youku_m/css/main.css?3.9.180725" rel="stylesheet"/>
<link href="<?php echo $maccms['path_tpl']; ?>youku_m/css/system.css" rel="stylesheet"/>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku_m/js/common.js?3.9.180725" ></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku_m/js/main.js?3.9.180725"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku_m/js/aui-popup.js?3.9.180725"></script> 
<script type="text/javascript" src="https://cdn.bootcss.com/flickity/2.0.9/flickity.pkgd.min.js"></script> 
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku_m/js/system.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>

	
<script type="text/javascript">
	(function (designW) {
		var docEl = document.documentElement,
			resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
			recalc = function () {
				var clientWidth = docEl.clientWidth;
				if (!clientWidth) return;
				docEl.style.fontSize = 40 * (clientWidth / designW) + 'px';
			};
		if (!document.addEventListener) return;
	        recalc();
		window.addEventListener(resizeEvt, recalc, false);
		document.addEventListener('DOMContentLoaded', recalc, false);
	})(750);
</script>
  
    <script type="text/javascript">
        //var jq=jQuery.noConflict();
    </script>
</head>
<body>
<!--头部 -->
 <div id="topTips"></div>  
<header class="header">
	<div class="aui-bar aui-bar-nav">
		<a href="/" class="logo aui-pull-left"></a>
		<div class="search">
			<div class="text mac_wd " onclick="openSearch()">请在此处输入影片名或演员名称</div>
			<div class="icon mac_search"><i class="aui-iconfont aui-icon-search"></i></div>
		</div>
	    <div id="member_info">
		<a class="aui-pull-right aui-btn ff-user mac_user" >
		 <span class="aui-iconfont aui-icon-my " style="background-image: url(<?php echo $maccms['path_tpl']; ?>youku_m/images/usre.png);"></span>
	</a>
</div>
</div>
</header>

<section class="headerTopNav">
	<div class="navWrap">
		<div class="shadow-le"></div>
		<div class="shadow-ri"></div>
		<div id="headerTopNav" class="warp">
			<ul class="swiper-wrapper">
			<li class="swiper-slide" id="nav-index"><a class="item" href="/" title="首页">首页</a></li>
			 <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="swiper-slide" id="nav-<?php echo $vo['type_en']; ?>"><a class="item" href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>  
			</ul>
		</div>
	</div>
</section>
<!--搜索框-->
<section class="searchPop">
	<div class="searchCon">
		<div class="sSearchInput">
         
		    <form class="search-form  ff-search"  id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
			 <input type="text" name="wd" id="wd" class="searchInput mac_wd" autocomplete="off" placeholder="请在此处输入影片名或演员名称" />
             <input type="submit" id="searchbutton"  style="display: none;"class="mac_search" value="搜索" />
			  
			</form>
		</div>
		<a href="javascript:;" onclick="closeSearch()" class="cancelInput">取消</a>
	</div>
	<div class="aui-search"></div>

<section class="mod aui-margin-t-0">
	<div class="mod-head clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">热门搜索</span>
		</div>
		
	</div>
	<div class="mod-main clearfix">
				<div class="mod-row">
			<ul class="search-list clearfix">
             <?php $__TAG__ = '{"order":"desc","by":"level","num":"20","type":"all","level":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key < 4): ?>
	<li class="aui-ellipsis-1"> <span class="colred<?php echo $key; ?>"><?php echo $key; ?></span><a href="/search/-------------.html?wd=<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><em class="up"></em></li>
               <?php if($key == 1): endif; else: ?>
		 
	<li class="aui-ellipsis-1"><span><?php echo $key; ?></span><a href="/search/-------------.html?wd=<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><em class="up"></em></li>
                   <?php endif; endforeach; endif; else: echo "" ;endif; ?> 
	 						</ul>
		</div>
			</div>
</section>  
</section>
 <script>$("#nav-<?php echo $obj['type_en']; ?>").addClass("active");</script>
  <script type="text/javascript">
	$("#headerTopNav li").each(function(index){
		if($(this).hasClass("active")){
        	var videoSelectWrap = new Swiper('#headerTopNav',{freeMode : true,slidesPerView : 'auto',initialSlide:index});
       	}else{
       		var videoSelectWrap = new Swiper('#headerTopNav',{freeMode : true,slidesPerView : 'auto'});
       	}
	});

</script> 
	
<!--幻灯片-->
 

<section class="mod">
             <section class="row">
            <div class="swiper-container focus_banner  js-swiper-container" id="js-swiper-focus-banner">
                <div class="swiper-wrapper focus_banner_list">
				<?php $__TAG__ = '{"order":"desc","by":"time","num":"4","paging":"false","ids":"all","type":"all","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<div class="swiper-slide focus_banner_item">
                        <a href="<?php echo mac_url_vod_detail($vo); ?>"   class="v_pic">
                            <img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="" title="<?php echo $vo['vod_name']; ?>"  class="swiper-lazy">
                            <span class="s_tit"><em><?php echo $vo['vod_name']; ?></em></span>
                        </a>
                    </div> 
 <?php endforeach; endif; else: echo "" ;endif; ?>
					 
					</div>
					
                <div class="swiper-pagination focus_banner_point"></div>
            </div>
        </section>
</section>
<!-- banner 开始 -->
 <script type="text/javascript">
$(function(){
  $('.js-swiper-container').each(function(){
    if($(this).find('.swiper-slide').length > 1 && !$(this).attr('development')){
      new Swiper('#' + $(this).attr('id'), {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        lazy: {
          loadPrevNext: true,
        }
      });
    }
  })

})
</script>
 
<!-- 图标导航 -->
<section class="mod aui-margin-t-0">
	<div class="mod-head aui-clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">猜你喜欢</span>
		</div>
	  <span class="change">今日更新<em>【<?php echo mac_data_count($obj['type_id'],'today','vod'); ?>】</em><!--部, 共有<em>【<?php echo mac_data_count($obj['type_id'],'all','vod'); ?>】</em>-->部影片</span>
	</div>
	<div class="mod-main clearfix">
		<div class="mod-row">
			<ul class="m-list aui-clearfix" m-list-skin="small">
			<?php $__TAG__ = '{"order":"desc","by":"rnd","num":"4","paging":"false","ids":"all","type":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="m-item">
					<a class="thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
						<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;">
						<i class="mask"></i>
						<div class="icon-br"><span class="label"><?php echo $vo['vod_remarks']; ?></span></div>
					</a>
					<div class="text">
						<h3 class="stitle ellipsis-2"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h3>
					</div>
				</li>
				
				<?php endforeach; endif; else: echo "" ;endif; ?>
				 
			</ul>
		</div>
	</div>
</section>

<!--为你推荐-->
<section class="mod aui-margin-t-0">
	<div class="mod-head clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">为你推荐</span>
		</div>
	</div>
	<div class="mod-main clearfix">
		<div class="mod-row">
			<ul class="m-list clearfix" m-list-skin="film">
			<?php $__TAG__ = '{"num":"6","type":"1,2,3,4","level":"8","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                  <li class="m-item">
					<a class="thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
						<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" >
						<i class="mask"></i>
						<div class="icon-br"><span class="label"><?php echo $vo['vod_remarks']; ?></span></div>
					</a>
					<div class="text">
						<h3 class="stitle aui-ellipsis-1"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h3>
						<p class="des">主演:<?php echo $vo['vod_actor']; ?> </p>
					</div>
				</li> 
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</section> 
<!-- 最新电影资源 -->
<section class="mod aui-margin-t-0">
	<div class="mod-head clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">电影</span>
		</div>
        <?php $__TAG__ = '{"ids":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>" class="change">更多</a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
	<div class="mod-main clearfix">
		<div class="mod-row">
			<ul class="m-list clearfix" m-list-skin="film">
 

            <?php $__TAG__ = '{"num":"6","type":"1","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="m-item">
					<a class="thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
						<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" >
						<i class="mask"></i>
						<div class="icon-br"><span class="label"><?php echo $vo['vod_remarks']; ?></span></div>
					</a>
					<div class="text">
						<h3 class="stitle aui-ellipsis-1"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h3>
						<p class="des">主演:<?php echo $vo['vod_actor']; ?></p>
					</div>
				</li> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
		</div>
	</div>
</section> 
<!--最新电视剧资源-->
<section class="mod aui-margin-t-0">
	<div class="mod-head clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">电视剧</span>
		</div>
        <?php $__TAG__ = '{"ids":"2","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>" class="change">更多</a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
	<div class="mod-main clearfix">
		<div class="mod-row">
			<ul class="m-list clearfix" m-list-skin="film">
 

            <?php $__TAG__ = '{"num":"6","type":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="m-item">
					<a class="thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
						<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" >
						<i class="mask"></i>
						<div class="icon-br"><span class="label"><?php echo $vo['vod_remarks']; ?></span></div>
					</a>
					<div class="text">
						<h3 class="stitle aui-ellipsis-1"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h3>
						<p class="des">主演:<?php echo $vo['vod_actor']; ?></p>
					</div>
				</li> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
		</div>
	</div>
</section>

<!--最新综艺节目资源-->
<section class="mod aui-margin-t-0">
	<div class="mod-head clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">综艺</span>
		</div>
        <?php $__TAG__ = '{"ids":"3","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>" class="change">更多</a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
	<div class="mod-main clearfix">
		<div class="mod-row">
			<ul class="m-list clearfix" m-list-skin="film">
 

            <?php $__TAG__ = '{"num":"6","type":"3","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="m-item">
					<a class="thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
						<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" >
						<i class="mask"></i>
						<div class="icon-br"><span class="label"><?php echo $vo['vod_remarks']; ?></span></div>
					</a>
					<div class="text">
						<h3 class="stitle aui-ellipsis-1"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h3>
						<p class="des">主演:<?php echo $vo['vod_actor']; ?></p>
					</div>
				</li> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
		</div>
	</div>
</section>

<!--最新动画片资源-->
<section class="mod aui-margin-t-0">
	<div class="mod-head clearfix">
		<div class="mod-head-title">
			<span class="mod-head-name">动画片</span>
		</div>
        <?php $__TAG__ = '{"ids":"4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>" class="change">更多</a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
	<div class="mod-main clearfix">
		<div class="mod-row">
			<ul class="m-list clearfix" m-list-skin="film">
 

            <?php $__TAG__ = '{"num":"6","type":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="m-item">
					<a class="thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
						<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" >
						<i class="mask"></i>
						<div class="icon-br"><span class="label"><?php echo $vo['vod_remarks']; ?></span></div>
					</a>
					<div class="text">
						<h3 class="stitle aui-ellipsis-1"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h3>
						<p class="des">主演:<?php echo $vo['vod_actor']; ?></p>
					</div>
				</li> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
		</div>
	</div>
</section>
<!--最新影视资讯-->
<section class="mod aui-margin-t-0">
		<div class="mod-head">
		<div class="mod-head-title">
			<span class="mod-head-name">资讯·预告</span>
		</div><?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_type($vo); ?>" class="change">更多</a> 
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
		<div class="mod-main clearfix">
			<div class="m-a-list">
			 <?php $__TAG__ = '{"num":"12","type":"6","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<article class="news-card card-type-news">
					<a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
						<div class="news-pic">
							<img class="ff-img" data-original="<?php echo $vo['art_pic']; ?>" src="<?php echo $vo['art_pic']; ?>" >
						</div>
						<div class="news-info">
							<h3 class="title"><?php echo $vo['art_name']; ?></h3>
							<div class="detail">
								<span><?php echo $vo['art_time_add']; ?></span>
								<span><?php echo $vo['art_hits']; ?></span>
							</div>
						</div>
					</a>
				</article>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				
 	</div>
		</div>
	</section>
</volist> 
<script type="text/javascript">
$(function(){
  $('.js-swiper-container').each(function(){
    if($(this).find('.swiper-slide').length > 1 && !$(this).attr('development')){
      new Swiper('#' + $(this).attr('id'), {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        lazy: {
          loadPrevNext: true,
        }
      });
    }
  })

})
</script>

 

 

<script src="<?php echo $maccms['path_tpl']; ?>youku_m/js/jquery.cookie.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>youku_m/js/wap_appdown.js"></script>
<div class="to-top">
<div class="scroll-to-top"><i class="aui-iconfont aui-icon-top"></i></div>
<div class="scroll-to-comment"><a href="/gbook.html" target="_blank"><i class="aui-iconfont aui-icon-edit"></i></a></div>
</div>
 <!--
<footer class="yk-footer footer">
    	<div class="footer-copyright">
		Copyright&copy;2018 <?php echo $maccms['site_name']; ?>  版权所有<br />
          联系QQ：<?php echo $maccms['site_qq']; ?> - 联系Emali:<?php echo $maccms['site_email']; ?>  <br />
		 
		 <?php echo $maccms['site_icp']; ?> <?php echo $maccms['site_tj']; ?>
		 
	</div>
</footer>-->
 

<!-- 页脚 -->

<footer class="footer">
	<div class="footer-copyright">Copyright&copy;2018 <?php echo $maccms['site_name']; ?> 版权所有 <?php echo $maccms['site_tj']; ?><br />
   
</footer>
<div class="aui-bar aui-bar-tab" id="footer">
<div class="aui-bar-tab-item" id="ftindex" tapmode="">
	<a href="/" title="首页">
	        <i class="aui-icon-index"></i>
        <div class="aui-bar-tab-label">首页</div>
		</a>
    </div><div class="aui-bar-tab-item" id="ftdianshiju" tapmode="">
	<a href="/tv" title="电视剧">
	<div class="aui-dot"></div>        <i class="aui-icon-dianshiju"></i>
        <div class="aui-bar-tab-label">电视剧</div>
		</a>
    </div><div class="aui-bar-tab-item" id="ftdianying" tapmode="">
	<a href="/dy" title="电影">
	        <i class="aui-icon-dianying"></i>
        <div class="aui-bar-tab-label">电影</div>
		</a>
    </div><div class="aui-bar-tab-item" id="ftdongman" tapmode="">
	<a href="/dm" title="动漫">
	        <i class="aui-icon-dongman"></i>
        <div class="aui-bar-tab-label">动漫</div>
		</a>
    </div><div class="aui-bar-tab-item" id="ftzongyi" tapmode="">
	<a href="/zy" title="综艺">
	        <i class="aui-icon-zongyi"></i>
        <div class="aui-bar-tab-label">综艺</div>
		</a>
    </div></div>
<script>$("#ft").addClass("aui-active");</script>

</body>
</html>
