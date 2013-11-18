<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
	<script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="app-head">
    <div class="container">
        <?php if( is_home() ){?>
        <h1 class="app-logo"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
        <?php } else {?>
        <h1 class="app-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
        <?php } ?>
        <nav class="main-nav" role="navigator">
            <ul class="nav nav-pills">
                <li><a href="###">发现频道</a></li>
                <li><a href="###">优惠导航</a></li>
                <li><a href="###">精品推荐</a></li>
                <li id="ec_nav_trigger" <?php if(is_home()) echo 'class="active"'?>><a href="###">商家导航</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="ec_nav" <?php if(!is_home()) echo 'class="hidden"'?>>
    <div class="container">
        <div class="categories">
            <ul class="nav nav-pills">
                <li class="active"><a href="###" data-content-id="#_grid_0_">热门网站</a></li>
                <li><a href="###" data-content-id="#_grid_1_">综合购物</a></li>
                <li><a href="###" data-content-id="#_grid_2_">服装鞋包</a></li>
                <li><a href="###" data-content-id="#_grid_3_">团购美妆</a></li>
                <li><a href="###" data-content-id="#_grid_4_">银行</a></li>
                <li><a href="###" data-content-id="#_grid_5_">金融理财</a></li>
            </ul>
        </div>
        <div class="content">
            <section id="_grid_0_" class="grid">
                <div class="grid-item"><a class="baidu" href="http://www.baidu.com/" title="百度" target="_blank"></a></div>
                <div class="grid-item"><a class="weibo" href="http://weibo.com/" title="新浪微博" target="_blank"></a></div>
                <div class="grid-item"><a class="sina" href="http://www.sina.com.cn/" title="新浪" target="_blank"></a></div>
                <div class="grid-item"><a class="qq" href="http://www.qq.com/" title="腾讯" target="_blank"></a></div>
                <div class="grid-item"><a class="wangyi" href="http://www.163.com/" title="网易" target="_blank"></a></div>
                <div class="grid-item"><a class="sohu" href="http://www.sohu.com/" title="搜狐" target="_blank"></a></div>
                <div class="grid-item"><a class="jd" href="http://click.union.jd.com/JdClick/?unionId=22242&t=1&to=http://www.jd.com" title="京东" target="_blank"></a></div>
                <div class="grid-item"><a class="taobao" href="http://ai.taobao.com/?pid=mm_29068093_2606639_9576712&eventid=101329" title="淘宝网" target="_blank"></a></div>
                <div class="grid-item"><a class="youku" href="http://www.youku.com/" title="优酷" target="_blank"></a></div>
                <div class="grid-item"><a class="qidian" href="http://www.qidian.com/" title="起点中文" target="_blank"></a></div>
                <div class="grid-item"><a class="autohome" href="http://www.autohome.com.cn/" title="汽车之家" target="_blank"></a></div>
                <div class="grid-item"><a class="huochepiao" href="http://www.12306.cn/mormhweb/kyfw/ypcx/" title="火车票" target="_blank"></a></div>
            </section>
            <section id="_grid_1_" class="grid">
                <div class="grid-item"><a class="tmall" href="http://s.click.taobao.com/t?e=m%3D2%26s%3Di3EQgvt8zMYcQipKwQzePCperVdZeJviK7Vc7tFgwiFRAdhuF14FMdxkHb85RKIgMMgx22UI05YzpH5qLwGyc6N%2ByHKF3YGS5UoOeRlV%2BcG%2Bh63zuUZMYYgaseAKBk0cDPtbhjM5VDw%3D" title="天猫" target="_blank"></a></div>
                <div class="grid-item"><a class="jd" href="http://click.union.jd.com/JdClick/?unionId=22242&t=1&to=http://www.jd.com" title="京东" target="_blank"></a></div>
                <div class="grid-item"><a class="yhd" href="http://www.yhd.com/?tracker_u=10295112229" title="1号店" target="_blank"></a></div>
                <div class="grid-item"><a class="amazon" href="http://www.amazon.cn/?_encoding=UTF8&camp=536&creative=3200&linkCode=ur2&tag=myxiami-23" title="亚马逊" target="_blank"></a></div>
                <div class="grid-item"><a class="yixun" href="http://p.yiqifa.com/c?s=a7cf2d67&w=435184&c=4330&i=4984&l=0&e=&t=http://www.yixun.com" title="易迅" target="_blank"></a></div>
                <div class="grid-item"><a class="suning" href="http://u.suning.com/15811062178" title="苏宁易购" target="_blank"></a></div>
                <div class="grid-item"><a class="taobao" href="http://ai.taobao.com/?pid=mm_29068093_2606639_9576712&eventid=101329" title="淘宝" target="_blank"></a></div>
                <div class="grid-item"><a class="dangdang" href="http://p.yiqifa.com/c?s=deead68e&w=435184&c=247&i=159&l=0&e=&t=http://www.dangdang.com" title="当当网" target="_blank"></a></div>
                <div class="grid-item"><a class="gome" href="http://p.yiqifa.com/c?s=128d7e05&w=435184&c=5579&i=14922&l=0&e=&t=http://www.gome.com.cn/ec/homeus/index.html" title="国美在线" target="_blank"></a></div>
                <div class="grid-item"><a class="newegg" href="http://p.yiqifa.com/c?s=11601957&w=435184&c=280&i=240&l=0&e=&t=http://www.newegg.com.cn" title="新蛋网" target="_blank"></a></div>
                <div class="grid-item"><a class="paipai" href="http://re.paipai.com/tws/etgcl/click?fu=http%3A%2F%2Fte.paipai.com%2Fcps_fresher.shtml&pps=etg.0_55562_22_0" title="拍拍网" target="_blank"></a></div>
                <div class="grid-item"><a class="meituan" href="http://r.union.meituan.com/url/visit/?a=1&key=jPgH1lOxapD54Nf3QrbSZVGBcvJ7Ym0t&url=http://www.meituan.com" title="美团" target="_blank"></a></div>
            </section>
            <section id="_grid_2_" class="grid">
                <div class="grid-item"><a class="vancl" href="http://www.vancl.com/?source=kyotang&sourcesuninfo=ad-0-4-0-0-1" title="凡客诚品" target="_blank"></a></div>
                <div class="grid-item"><a class="vipshop" href="http://p.yiqifa.com/c?s=48890522&w=435184&c=4018&i=2882&l=0&e=&t=http://shop.vipshop.com" title="唯品会" target="_blank"></a></div>
                <div class="grid-item"><a class="lamiu" href="http://p.yiqifa.com/c?s=c847c268&w=435184&c=4220&i=4482&l=0&e=&t=http://www.lamiu.com" title="兰缪内衣" target="_blank"></a></div>
                <div class="grid-item"><a class="moonbasa" href="http://p.yiqifa.com/c?s=80baa3b9&w=435184&c=298&i=20483&l=0&e=&t=http://www.moonbasa.com" title="梦芭莎" target="_blank"></a></div>
                <div class="grid-item"><a class="banggo" href="http://p.yiqifa.com/c?s=6eac1527&w=435184&c=5858&i=16562&l=0&e=&t=http://www.banggo.com/" title="邦购网" target="_blank"></a></div>
                <div class="grid-item"><a class="yohobuy" href="http://p.yiqifa.com/c?s=f26c6694&w=435184&c=3601&i=2642&l=0&e=&t=http://www.yohobuy.com/" title="YOHO有货" target="_blank"></a></div>
                <div class="grid-item"><a class="vjia" href="http://p.yiqifa.com/c?s=a0785ce8&w=435184&c=4753&i=7082&l=0&e=&t=http://www.vjia.com/" title="凡客V+" target="_blank"></a></div>
                <div class="grid-item"><a class="yougou" href="http://track.weiyi.com/sr.aspx?m=yougou&w=A100061162&d=0000&u=&t=http%3A%2F%2Fwww.yougou.com" title="优购" target="_blank"></a></div>
                <div class="grid-item"><a class="aimer" href="http://p.yiqifa.com/c?s=85dbfe3f&w=435184&c=5125&i=9222&l=0&e=&t=http://www.aimer.com.cn/" title="爱慕内衣" target="_blank"></a></div>
                <div class="grid-item"><a class="junph" href="http://p.yiqifa.com/c?s=632136c3&w=435184&c=6854&i=24362&l=0&e=&t=http://www.junph.com/" title="铁血军品行" target="_blank"></a></div>
                <div class="grid-item"><a class="mbaobao" href="http://p.yiqifa.com/c?s=96a18c88&w=435184&c=272&i=137&l=0&e=&t=http://www.mbaobao.com" title="麦包包" target="_blank"></a></div>
                <div class="grid-item"><a class="okbuy" href="http://www.okbuy.com?from=trackingid_myxiami-25250" title="好乐买" target="_blank"></a></div>
            </section>
            <section id="_grid_3_" class="grid">
                <div class="grid-item"><a class="meituan" href="http://r.union.meituan.com/url/visit/?a=1&key=jPgH1lOxapD54Nf3QrbSZVGBcvJ7Ym0t&url=http://www.meituan.com" title="美团" target="_blank"></a></div>
                <div class="grid-item"><a class="dianpingtuan" href="http://p.yiqifa.com/c?s=ff586087&w=435184&c=6198&i=17902&l=0&e=&t=http://t.dianping.com" title="大众点评团" target="_blank"></a></div>
                <div class="grid-item"><a class="nuomi" href="http://p.yiqifa.com/c?s=d8661cf3&w=435184&c=6226&i=17402&l=0&e=&t=http://www.nuomi.com/" title="糯米网" target="_blank"></a></div>
                <div class="grid-item"><a class="lashou" href="http://p.yiqifa.com/c?s=0a75ca58&w=435184&c=5298&i=10942&l=0&e=&t=http://www.lashou.com/" title="拉手网" target="_blank"></a></div>
                <div class="grid-item"><a class="wowotuan" href="http://p.yiqifa.com/c?s=13086553&w=435184&c=5318&i=13922&l=0&e=&t=http://www.55tuan.com/" title="窝窝团" target="_blank"></a></div>
                <div class="grid-item"><a class="gaopeng" href="http://p.yiqifa.com/c?s=14c32e57&w=435184&c=6685&i=25282&l=0&e=&t=http://www.gaopeng.com/" title="高朋网" target="_blank"></a></div>
                <div class="grid-item"><a class="jumei" href="http://p.yiqifa.com/c?s=2325f17f&w=435184&c=5227&i=10462&l=0&e=&t=http://www.jumei.com/" title="聚美优品" target="_blank"></a></div>
                <div class="grid-item"><a class="lefeng" href="http://p.yiqifa.com/c?s=8d0cbd81&w=435184&c=227&i=196&l=0&e=&t=http://www.lefeng.com/" title="乐蜂网" target="_blank"></a></div>
                <div class="grid-item"><a class="tiantian" href="http://p.yiqifa.com/c?s=a27ee4a4&w=435184&c=4422&i=5423&l=0&e=&t=http://www.tiantian.com" title="天天网" target="_blank"></a></div>
                <div class="grid-item"><a class="nala" href="http://p.yiqifa.com/c?s=d0d6c132&w=435184&c=5724&i=15402&l=0&e=&t=http://www.nala.com.cn/" title="NALA" target="_blank"></a></div>
                <div class="grid-item"><a class="strawberrynet" href="http://p.yiqifa.com/c?s=1f7aa797&w=435184&c=6105&i=16802&l=0&e=&t=http://www.strawberrynet.com/landPage.aspx" title="草莓网" target="_blank"></a></div>
                <div class="grid-item"><a class="xifuquan" href="http://p.yiqifa.com/c?s=c6845bd2&w=435184&c=4712&i=6802&l=0&e=&t=http://www.xifuquan.com" title="皙肤泉" target="_blank"></a></div>
            </section>
            <section id="_grid_4_" class="grid">
                <div class="grid-item"><a class="icbc" href="http://www.icbc.com.cn/" title="工行" target="_blank"></a></div>
                <div class="grid-item"><a class="boc" href="http://www.boc.cn/" title="中行" target="_blank"></a></div>
                <div class="grid-item"><a class="ccb" href="http://www.ccb.com/" title="建行" target="_blank"></a></div>
                <div class="grid-item"><a class="abchina" href="http://www.abchina.com/" title="农行" target="_blank"></a></div>
                <div class="grid-item"><a class="bankcomm" href="http://www.bankcomm.com/" title="交行" target="_blank"></a></div>
                <div class="grid-item"><a class="psbc" href="http://www.psbc.com/" title="邮政储蓄" target="_blank"></a></div>
                <div class="grid-item"><a class="cmbchina" href="http://www.cmbchina.com/" title="招行" target="_blank"></a></div>
                <div class="grid-item"><a class="ecitic" href="http://bank.ecitic.com/" title="中信" target="_blank"></a></div>
                <div class="grid-item"><a class="hxb" href="http://www.hxb.com.cn/" title="华夏" target="_blank"></a></div>
                <div class="grid-item"><a class="cmbc" href="http://www.cmbc.com.cn/" title="民生" target="_blank"></a></div>
                <div class="grid-item"><a class="cebbank" href="http://www.cebbank.com/" title="光大" target="_blank"></a></div>
                <div class="grid-item"><a class="pingan" href="http://bank.pingan.com/" title="平安银行" target="_blank"></a></div>
            </section>
            <section id="_grid_5_" class="grid">
                <div class="grid-item"><a class="alipay" href="http://www.alipay.com/" title="支付宝" target="_blank"></a></div>
                <div class="grid-item"><a class="tenpay" href="http://www.tenpay.com/" title="财付通" target="_blank"></a></div>
                <div class="grid-item"><a class="unionpay" href="https://online.unionpay.com/" title="银联在线" target="_blank"></a></div>
                <div class="grid-item"><a class="baifa" href="http://8.baidu.com/" title="百度理财" target="_blank"></a></div>
                <div class="grid-item"><a class="baifubao" href="https://www.baifubao.com/" title="百度钱包" target="_blank"></a></div>
                <div class="grid-item"><a class="lufax" href="http://affiliate.lufax.com/action/Mv2eya" title="陆金所" target="_blank"></a></div>
                <div class="grid-item"><a class="cib" href="http://www.cib.com.cn/" title="兴业银行" target="_blank"></a></div>
                <div class="grid-item"><a class="cgbchina" href="http://www.cgbchina.com.cn/" title="广东发展银行" target="_blank"></a></div>
                <div class="grid-item"><a class="spdb" href="http://www.spdb.com.cn/" title="浦东发展银行" target="_blank"></a></div>
                <div class="grid-item"><a class="citibank" href="http://www.citibank.com.cn/" title="花旗银行" target="_blank"></a></div>
                <div class="grid-item"><a class="wangyicaipiao" href="http://track.weiyi.com/sr.aspx?m=caipiao_wy&w=A100061162&d=0000&u=&t=http%3A%2F%2Fcaipiao.163.com%2F" title="网易彩票" target="_blank"></a></div>
                <div class="grid-item"><a class="fund123" href="http://p.yiqifa.com/c?s=508a3afb&w=435184&c=17418&i=40042&l=0&e=&t=http://www.fund123.cn" title="数米基金网" target="_blank"></a></div>
            </section>
        </div>
    </div>
</div>
<div class="app-body">
    <div class="container">
        <div class="layout-container">
            <div class="primary">
                <div class="inner">
                    <nav class="category-nav" role="navigator">
                        <?php wp_nav_menu( array( 'theme_location' => 'category_nav', 'container' => '', 'menu_class' => 'nav nav-pills nav-stacked') ); ?>
                    </nav>
