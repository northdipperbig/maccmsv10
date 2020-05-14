<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:42:"template/default_wap/html/index/index.html";i:1588578914;s:72:"/www/wwwroot/www.m9628.com/template/default_wap/html/public/include.html";i:1588574038;s:69:"/www/wwwroot/www.m9628.com/template/default_wap/html/public/head.html";i:1588574038;s:69:"/www/wwwroot/www.m9628.com/template/default_wap/html/public/foot.html";i:1588574038;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
    <link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/jquery.glide.js"></script>
    <script type="text/javascript">
        //var jq=jQuery.noConflict();
    </script>
</head>
<body>
<!-- 页头 -->
<input type="checkbox" id="navSwitch">
<header class="g_nav trans">
    <ul class="g_wrap_p">
        <li><a href="<?php echo $maccms['path']; ?>">首页</a></li>
        <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li><a href="<?php echo mac_url('topic/index'); ?>">影视专题</a></li>
        <li><a href="<?php echo mac_url('map/index'); ?>">热门排行</a></li>
    </ul>
    <div class="g_wrap_p">
        <div class="ui-search">
            <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
                <input type="text" id="wd" name="wd" class="search-input" value="请输入影片名或演员名称" onfocus="if(this.value=='请输入影片名或演员名称'){this.value='';}" onblur="if(this.value==''){this.value='请输入影片名或演员名称';};" />
                <input type="submit" id="searchbutton"  class="search-button" value="搜索" />
            </form>
        </div>
        <div class="resou">
            <?php $_5eafca6655c6f=explode(',',$maccms['search_hot']); if(is_array($_5eafca6655c6f) || $_5eafca6655c6f instanceof \think\Collection || $_5eafca6655c6f instanceof \think\Paginator): if( count($_5eafca6655c6f)==0 ) : echo "" ;else: foreach($_5eafca6655c6f as $key2=>$vo2): ?>
            <a href="<?php echo mac_url('vod/search',['wd'=>$vo2]); ?>"><?php echo $vo2; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</header>
<header class="g_header">
    <h1 class="s_l g_logo"><a href="<?php echo $maccms['path']; ?>"><img src="<?php echo mac_url_img($maccms['site_logo']); ?>"></a></h1>
    <label for="navSwitch" href="javascript:;" class="s_c mac_user"><i class="i_user"><span></span></i></label>
    <label for="navSwitch" href="javascript:;" class="s_r s_bt"><i class="i_bread"><span></span></i></label>
</header>
<!-- banner 开始 -->
<div class="slider">
    <ul class="slides">
        <?php $__TAG__ = '{"num":"5","level":"9","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="slide"><div class="boxb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>  <?php echo $vo['vod_remarks']; ?>"><img src="<?php echo $vo['vod_pic_slide']; ?>" alt="<?php echo $vo['vod_name']; ?>  <?php echo $vo['vod_remarks']; ?>"/></a></div></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<script type="text/javascript">
    var glide = $('.slider').glide({
        //autoplay:true,//是否自动播放 默认值 true如果不需要就设置此值
        animationTime:500, //动画过度效果，只有当浏览器支持CSS3的时候生效
        arrows:true, //是否显示左右导航器
        arrowsWrapperClass: "arrowsWrapper",//滑块箭头导航器外部DIV类名
        arrowMainClass: "slider-arrow",//滑块箭头公共类名
        arrowRightClass:"slider-arrow--right",//滑块右箭头类名
        arrowLeftClass:"slider-arrow--left",//滑块左箭头类名
        arrowRightText:">",//定义左右导航器文字或者符号也可以是类
        arrowLeftText:"<",
        nav:true, //主导航器也就是本例中显示的小方块
        navCenter:true, //主导航器位置是否居中
        navClass:"slider-nav",//主导航器外部div类名
        navItemClass:"slider-nav__item", //本例中小方块的样式
        navCurrentItemClass:"slider-nav__item--current" //被选中后的样式
    });
</script>
<!-- 图标导航 -->
<nav class="menuNavList">
    <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a href="<?php echo mac_url_type($vo); ?>"><i class="menuNavIcon <?php switch($vo['type_id']): case "1": ?>dyIcon<?php break; case "2": ?>dsjIcon<?php break; case "3": ?>zyIcon<?php break; case "4": ?>dmIcon<?php break; case "5": ?>dspIcon<?php break; endswitch; ?>"></i><span class="sTit"><?php echo $vo['type_name']; ?></span></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <a href="<?php echo mac_url('map/index'); ?>"><i class="menuNavIcon bdIcon"></i><span class="sTit">排行</span></a>
</nav>
<!-- 最新电影资源 -->
<section class="box">
    <section class="title"><i class="iLine"></i>
        <h2>最新电影</h2>
        <?php $__TAG__ = '{"ids":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>"><em>更多</em></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </section>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"12","type":"1","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><span><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/></span><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</section>
<!--最新电视剧资源-->
<div class="box">
    <div class="title"><i class="iLine"></i>
        <h2>最新电视剧</h2>
        <?php $__TAG__ = '{"ids":"2","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>"><em>更多</em></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"12","type":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><span><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/></span><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集 / 共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!--最新动画片资源-->
<div class="box">
    <div class="title"><i class="iLine"></i>
        <h2 class="mar">最新动画片</h2>
        <?php $__TAG__ = '{"ids":"4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>"><em>更多</em></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"12","type":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><span><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/></span><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集 / 共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!--最新综艺节目资源-->
<div class="box">
    <div class="title"><i class="iLine"></i>
        <h2 class="mar">最新综艺节目</h2>
        <?php $__TAG__ = '{"ids":"3","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>"><em>更多</em></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"12","type":"3","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><span><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/></span><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>期</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!--最新影视资讯-->
<div class="box">
    <div class="title"><i class="iLine"></i>
        <h2 class="mar">最新影视资讯</h2>
        <?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo mac_url_type($vo); ?>"><em>更多</em></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="box_news pianyi">
        <ul>
            <?php $__TAG__ = '{"num":"12","type":"5","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="clear"></div>
        </ul>
    </div>
</div>
<!-- 友情链接 -->
<div id="link" class="block">
    <div id="title">友情链接 LINK</div>
    <ul>
        <?php $__TAG__ = '{"num":"10","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </ul>
</div>
<!-- 页脚 -->
<footer class="footer">
    Copyright &#169; 2012-2018 <?php echo $maccms['site_wapurl']; ?>. All Rights Reserved.
</footer>

</body>
</html>
