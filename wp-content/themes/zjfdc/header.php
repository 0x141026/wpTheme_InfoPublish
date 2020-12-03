<?php
/**
 * The template for displaying the header
 */

?>
<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
		<meta name="renderer" content="webkit">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<title>镇江房地产信息网</title>

		<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?php bloginfo('template_url'); ?>/assets/libs/layui/css/layui.css" rel="stylesheet" type="text/css">
		<link href="<?php bloginfo('template_url'); ?>/assets/module/admin.css" rel="stylesheet" type="text/css">
		<link href="<?php bloginfo('template_url'); ?>/css/base.css" rel="stylesheet" type="text/css">
		<link href="<?php bloginfo('template_url'); ?>/css/index.css" rel="stylesheet" type="text/css">
		<link href="<?php bloginfo('template_url'); ?>/css/list_wz.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/base.js"></script>
        <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
        <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>

		<style>
			.news_tzgg_title{
				width: 100%;
				height: 28px;
				border-bottom: 1px solid #d8d8d8;
			}
			#content_news {
				float:left;
				display:inline;
				width: 500px;
				font-family: "Microsoft Yahei";
				font-size: 14px;
				color: #666666;
				padding-left: 10px;
				margin: 0px;
				padding-top: 0px;
				padding-right: 0px;
				padding-bottom: 0px;
			}
			.slideBox{ width:300px; height:250px; overflow:hidden; position:relative;}
			.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:5px; bottom:25px; z-index:1; }
			.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
			.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
			.slideBox .hd ul li.on{ background:#f00; color:#fff; }
			.slideBox .bd{ position:relative; height:100%; z-index:0;   }
			.slideBox .bd li{ zoom:1; vertical-align:middle; }
			.slideBox .bd img{ width:300px; height:230px; display:block;  }


			.slideBox1{ width:300px; height:250px; overflow:hidden; position:relative;}
			.slideBox1 .hd{ height:15px; overflow:hidden; position:absolute; right:5px; bottom:25px; z-index:1; }
			.slideBox1 .hd ul{ overflow:hidden; zoom:1; float:left;  }
			.slideBox1 .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
			.slideBox1 .hd ul li.on{ background:#f00; color:#fff; }
			.slideBox1 .bd{ position:relative; height:100%; z-index:0;   }
			.slideBox1 .bd li{ zoom:1; vertical-align:middle; }
			.slideBox1 .bd img{ width:300px; height:230px; display:block;  }
			/* 列后面清除浮动 */
			.row:after {
			content: "";
			display: table;
			clear: both;
			}
			


		</style>
        <style>
        /** 应用快捷块样式 */
        .console-app-group {
            width: 92px;
            padding: 16px;
            border-radius: 4px;
            text-align: center;
            background-color: #fff;
            cursor: pointer;
            display: block;
        }

        .console-app-group .console-app-icon {
            width: 32px;
            height: 32px;
            line-height: 32px;
            margin-bottom: 6px;
            display: inline-block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 32px;
            color: #69c0ff;
        }

        .console-app-group:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, .08);
        }

        /** //应用快捷块样式 */

        /** 小组成员 */
        .console-user-group {
            position: relative;
            padding: 10px 0 10px 60px;
        }

        .console-user-group .console-user-group-head {
            width: 32px;
            height: 32px;
            position: absolute;
            top: 50%;
            left: 12px;
            margin-top: -16px;
            border-radius: 50%;
        }

        .console-user-group .layui-badge {
            position: absolute;
            top: 50%;
            right: 8px;
            margin-top: -10px;
        }

        .console-user-group .console-user-group-name {
            line-height: 1.2;
        }

        .console-user-group .console-user-group-desc {
            color: #8c8c8c;
            line-height: 1;
            font-size: 12px;
            margin-top: 5px;
        }

        /** 卡片轮播图样式 */
        .admin-carousel .layui-carousel-ind {
            position: absolute;
            top: -41px;
            text-align: right;
        }

        .admin-carousel .layui-carousel-ind ul {
            background: 0 0;
        }

        .admin-carousel .layui-carousel-ind li {
            background-color: #e2e2e2;
        }

        .admin-carousel .layui-carousel-ind li.layui-this {
            background-color: #999;
        }

        /** 广告位轮播图 */
        .admin-news .layui-carousel-ind {
            height: 45px;
        }

        .admin-news a {
            display: block;
            line-height: 70px;
            text-align: center;
        }

        /** 最新动态时间线 */
        .layui-timeline-dynamic .layui-timeline-item {
            padding-bottom: 0;
        }

        .layui-timeline-dynamic .layui-timeline-item:before {
            top: 16px;
        }

        .layui-timeline-dynamic .layui-timeline-axis {
            width: 9px;
            height: 9px;
            left: 1px;
            top: 7px;
            background-color: #cbd0db;
        }

        .layui-timeline-dynamic .layui-timeline-axis.active {
            background-color: #0c64eb;
            box-shadow: 0 0 0 2px rgba(12, 100, 235, .3);
        }

        .dynamic-card-body {
            box-sizing: border-box;
            overflow: hidden;
        }

        .dynamic-card-body:hover {
            overflow-y: auto;
            padding-right: 9px;
        }

        /** 优先级徽章 */
        .layui-badge-priority {
            border-radius: 50%;
            width: 20px;
            height: 20px;
            padding: 0;
            line-height: 18px;
            border-width: 2px;
            font-weight: 600;
        }
    </style>
	</head>

	<body >
				
		<div class="main">
			<div class="main_box" style="width: 1100px;">

				<div class="logo"  style="background-size: 100% 100%;"></div>

				<div class="banner">
					<ul>
                        <li class="right_border"><a href="<?php echo site_url() ?>">网站首页</a></li>
						<li class="right_border"><a href="<?php echo site_url() ?>/?cat=2">通知公告</a></li>
                        <li class="right_border"><a href="<?php echo site_url() ?>/?cat=3">政策法规</a></li>
                        <li class="right_border"><a href="http://221.6.146.72:9080/estate2/publish/" target="_blank">商品房交易信息</a></li>
                        <li class="right_border"><a href="http://221.6.146.71:9080/shestate2/publish/publishMng.action" target="_blank">存量房交易信息</a></li>
                        <!-- <li class="right_border"><a href="http://wssq.zjbdcdj.cn/wsyy/login_keyuser.jsp" target="_blank">不动产网上办事大厅</a></li> -->
                        <li class="right_border"><a href="http://www.jskdhf.com/fc/" target="blank">一站导航</a></li>
                        <!-- <li class="right_border"><a href="http://localhost:801/wp/?cat=5">政务公开</a></li> -->
                        <!-- <li class="right_border"><a href="http://localhost:801/wp/?cat=6">党务公开</a></li> -->
                        
                    </ul>

				</div>
				<!-- address 开始 -->
				