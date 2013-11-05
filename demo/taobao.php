<!doctype html>
<html>
<head>
<?php 
	$key = '淘宝网';
	include('_include/header.php'); 
?>
<link rel="stylesheet" href="css/taobao.css" />
<style>
.zxx_body .zxx_constr {
	width: 1190px;
	background: url(img/taobao/bg.png) no-repeat 0 12px;
}
</style>
</head>

<body>
<?php 
	include('_include/nav.php'); 
?>

<div class="zxx_body">
	<div class="zxx_constr zxx_taobao_constr">
    	<!--  body of taobao.php -->
        <div class="tb_top_body">
        	<div class="tb_main_slide">
            	<div id="adSlideBox" class="tb_slide_box tb_slide_ad">
                	<img id="adSlideImg1" src="http://gtms01.alicdn.com/tps/i1/T1d_UqFmVfXXXbwKP7-520-280.png" class="tb_slide_img">
                    <img id="adSlideImg2" data-src="http://i.mmcdn.cn/simba/img/T1lycrFbpcXXb1upjX.jpg" class="tb_slide_img" style="display:none;">
                    <img id="adSlideImg3" data-src="http://i.mmcdn.cn/simba/img/T1.Pv9Ff4XXXb1upjX.jpg" class="tb_slide_img" style="display:none;">
                    <img id="adSlideImg4" data-src="http://i.mmcdn.cn/simba/img/T1lCz.FhJdXXb1upjX.jpg" class="tb_slide_img" style="display:none;">
                    <img id="adSlideImg5" data-src="http://gtms01.alicdn.com/tps/i1/T1meZjXc4hXXazuKP7-520-280.jpg" class="tb_slide_img" style="display:none;">
                    <div id="adSlideBtn" class="tb_slide_btn">
                    	<a href="javascript:" class="tb_slide_on" data-rel="adSlideImg1"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="adSlideImg2"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="adSlideImg3"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="adSlideImg4"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="adSlideImg5"></a>
                    </div>
                </div>
                <div id="tmallSlideBox" class="tb_slide_box tb_slide_brand">
                	<i class="tb_icon_tmall">天猫Tmall</i>
                    <div id="tmallSlideImg1" class="tb_slide_tmall">
                		<img src="http://gtms01.alicdn.com/tps/i1/T16YgBFkpbXXX.wFPC-260-125.jpg"
                        ><img src="http://gtms01.alicdn.com/tps/i1/T1u8DQFadhXXX.wFPC-260-125.jpg"
                        ><img src="http://gtms01.alicdn.com/tps/i1/T1wBgAFftaXXX.wFPC-260-125.jpg"
                        ><img src="http://gtms01.alicdn.com/tps/i1/T1xysAFbJaXXX.wFPC-260-125.jpg">
                    </div>
                    <div id="tmallSlideImg2" class="tb_slide_tmall" style="display:none;">
                    	<img data-src="http://gtms01.alicdn.com/tps/i1/T1GK3uFcRaXXanhZrl-250-125.jpg">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T1PYgbFl4eXXc2jIrl-250-125.png">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T1o57wFixcXXanhZrl-250-125.jpg">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T1r3IpFatgXXc2jIrl-250-125.png">
                        <i class="tb_slide_line_v"></i><i class="tb_slide_line_h"></i>
                    </div>
                    <div id="tmallSlideImg3" class="tb_slide_tmall" style="display:none;">
                    	<img data-src="http://gtms01.alicdn.com/tps/i1/T14ekpFbXfXXanhZrl-250-125.jpg">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T1gasjFnBfXXc2jIrl-250-125.png">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T1JkT_FcXXXXc2jIrl-250-125.png">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T18_LKFaVkXXc2jIrl-250-125.png">
                        <i class="tb_slide_line_v"></i><i class="tb_slide_line_h"></i>
                    </div>
                    <div id="tmallSlideImg4" class="tb_slide_tmall" style="display:none;">
                    	<img data-src="http://gtms01.alicdn.com/tps/i1/T1Vi.vXfVhXXc2jIrl-250-125.png">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T15SMpFn4cXXc2jIrl-250-125.png">
                    	<img data-src="http://gtms01.alicdn.com/tps/i1/T1sH.AFeVbXXanhZrl-250-125.jpg">
                        <img data-src="http://gtms01.alicdn.com/tps/i1/T1gRMnFXhbXXanhZrl-250-125.jpg">
                        <i class="tb_slide_line_v"></i><i class="tb_slide_line_h"></i>
                    </div>
                    <div id="tmallSlideImg5" class="tb_slide_tmall" style="display:none;">
                    	<img src="img/taobao/brand.png">
                    </div>
                    <div id="tmallSlideBtn" class="tb_slide_btn">
                    	<a href="javascript:" class="tb_slide_on" data-rel="tmallSlideImg1"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="tmallSlideImg2"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="tmallSlideImg3"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="tmallSlideImg4"></a>
                        <a href="javascript:" class="tb_slide_a" data-rel="tmallSlideImg5"></a>
                    </div>
                </div>
                <div class="tb_ad_aside">
                    <img src="http://gtms01.alicdn.com/tps/i1/T1WDnhFdRiXXaAdGT4-200-280.png" width="200" height="280">
                    <img border="0" src="http://img2.tbcdn.cn/tfscom/T1L9HSFhxdXXb1upjX.jpg" width="200" height="250">
                </div>
            </div>
            
            <!-- 右侧选项卡等厮 -->
            <div class="tb_quick_panel">
            	<div class="tb_tab_notice">
                	<ul id="tabNoticeBox" class="tb_tab_notice_ul">
                      <li class="tb_tab_notice_li selected" data-rel="tabPanel1"><a href="#" class="tb_tab_notice_a">公告</a></li>
                      <li class="tb_tab_notice_li" data-rel="tabPanel2"><a href="#" class="tb_tab_notice_a">规则</a></li>
                      <li class="tb_tab_notice_li" data-rel="tabPanel3"><a href="#" class="tb_tab_notice_a">论坛</a></li>
                      <li class="tb_tab_notice_li" data-rel="tabPanel4"><a href="#" class="tb_tab_notice_a">安全</a></li>
                      <li class="tb_tab_notice_li" data-rel="tabPanel5"><a href="#" class="tb_tab_notice_a">公益</a></li>
                    </ul>
                    <ul id="tabPanel1" class="tb_tab_panel" style="display:block;">
                    	<li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a h">李克强赞许新经济</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">淘宝家电招优质配送商</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">壹基金携来往推温暖包</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">店铺好设计大赛开锣！</a></li>
                    </ul>
                    <ul id="tabPanel2" class="tb_tab_panel">
                    	<li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[重要] <span class="h">限制换宝贝</span></a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[重要] 淘字号上线</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[重要] 导购类网站</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[重要] 二维码广告链！</a></li>
                    </ul>
                    <ul id="tabPanel3" class="tb_tab_panel">
                    	<li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[政策] <span class="h">寻找你的奥斯卡</span></a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[1212] 虚假交易之我见</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[聚焦] 卖家互助来袭</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">[话题] 淘家装的需知点！</a></li>
                    </ul>
                    
                    <ul id="tabPanel4" class="tb_tab_panel">
                    	<li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a h">双11买家网购安全提醒</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">抢货更安全还送集分宝</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">集分宝悬赏防骗达人</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">二维码扫描有风险！</a></li>
                    </ul>
                    <ul id="tabPanel5" class="tb_tab_panel">
                    	<li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">拯救生命，战旗不倒</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">阿里巴巴获消除贫困奖</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">支持水公益投票赢公仔</a></li>
                        <li class="tb_tab_panel_li"><a href="#" class="tb_tab_panel_a">中国网络捐赠研究报告！</a></li>
                    </ul>
                </div>
                <img class="tb_my_info" src="img/taobao/my-info.png">
                <div class="tb_service">
                
                </div>
            </div>
        </div>
        
        <!-- 版权提示 -->
        <p class="zxx_remind">本实例所有图片资源为淘宝网版权所有，这里仅为共享学习之用！</p>
    </div>
</div>

<?php 
	include('_include/footer.php'); 
?>
<script>
// 第一个大图广告slide
$("#adSlideBtn a").powerSwitch({
	autoTime: 4000,
	animation: "translate",
	classAdd: "tb_slide_on",
	classRemove: "tb_slide_a",
	classPrefix: "tb_slide",
	container: $("#adSlideBox"),
	onSwitch: function(image) {
		if (!image.attr("src")) {
			image.attr("src", image.attr("data-src"));	
		}
	}
});

// 第二个天猫广告
$("#tmallSlideBtn a").powerSwitch({
	autoTime: 4000,
	animation: "translate",
	classAdd: "tb_slide_on",
	classRemove: "tb_slide_a",
	classPrefix: "tb_slide",
	container: $("#tmallSlideBox"),
	onSwitch: function(slide) {
		slide.find("img").each(function() {
			if (!this.src) {
				this.src = $(this).attr("data-src");	
			}
		});
	}
});	

$("#tabNoticeBox li").powerSwitch({
	eventType: "hover",
	classAdd: "selected"
});
</script>
</body>
</html>