<?php

register_nav_menu( 'header-menu', '头部导航菜单'); // 允许自定义导航

add_theme_support( 'post-formats', array( 'link' ) ); // 日志形式

add_theme_support('post-thumbnails'); // 支持封面图片功能

add_image_size('thumb_index', 880, 390, true); // 首页活动封面 尺寸为 880x390 的设定
add_image_size('thumb_event', 658, 292, true); // 活动列表页活动封面 尺寸为 658x292 的设定
// add_image_size('thumb_event_item', 450, 200, true); // 活动详情页活动封面 尺寸为 450x200 的设定
add_image_size('thumb_event_item', 510, 226, true); // 活动详情页活动封面 尺寸为 510x226 的设定


?>