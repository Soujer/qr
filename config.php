<?php

/**
 * 收款啦应用程序配置
 * http://qr.fxw.la
 */
return [

	// 应用调试模式
	// 'app_debug'              => true,

	// 视图输出字符串内容替换
	'view_replace_str'       => [
		//修改成自己的域名
	    '__PUBLIC__' => 'https://qr.fxw.la/static/',
	],

	// 站点标题
	'title' => '收款啦',
	
	// 站点副标题
	'siteinfo' => '在线免费生成支付宝QQ微信三合一收款码_我爱分享网旗下网站',

	// 描述
	'description' => '收款啦(qr.fxw.la)在线免费生成支付宝QQ微信三合一收款码',

	// 关键字
	'keywords' => '收款啦,支付宝收款码在线生成,微信收款码在线生成,QQ收款码在线生成,三合一付款码在线生成',

	// 二维码识别接口
	'distinguish' => 'https://www.sojson.com/qrcode/deqrByImages.shtml',

	// 识别结果截取正则
	'reg' => '/{"txt":"(.*?)","/',

	// 二维码生成接口
	'generate' => 'http://qr.liantu.com/api.php?w=600&text=',

	// 导航
	'link' => [
		'打赏本站' => 'http://yaofan.fxw.la/',
		'我爱分享网' => 'https://www.fxw.la/',
		'分享网技术导航' => 'https://qq.fxw.la/',
		'源码下载' => 'https://www.fxw.la/news/7223.html',
	],
	
	//是否开启站点统计 on/off
	'statis' => 'on', 

	//是否显示底部一堆废话 on/off
	'explain' => 'on',

	// 底部信息 支持HTML代码
	'footerinfo' => '<script src="https://s22.cnzz.com/z_stat.php?id=1264336722&web_id=1264336722" language="JavaScript"></script>',

	//保留它是对作者的最大支持
	'copyright' => 'Powered by <a target="_blank" href="http://qr.fxw.la/">收款啦三合一平台</a>'
];
?>