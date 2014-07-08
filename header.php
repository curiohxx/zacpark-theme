<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="<?php bloginfo("description")?>"/>
  <title>
  <?php
    wp_title( '|', true, 'right' );
    bloginfo('name');
  ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php
    wp_head(); 
  ?>
  <script language="JavaScript">
function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
{
    var arVersion = navigator.appVersion.split("MSIE")
    var version = parseFloat(arVersion[1])
    if ((version >= 5.5) && (document.body.filters))
    {
       for(var j=0; j<document.images.length; j++)
       {
          var img = document.images[j]
          var imgName = img.src.toUpperCase()
          if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
          {
             var imgID = (img.id) ? "id='" + img.id + "' " : ""
             var imgClass = (img.className) ? "class='" + img.className + "' " : ""
             var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
             var imgStyle = "display:inline-block;" + img.style.cssText
             if (img.align == "left") imgStyle = "float:left;" + imgStyle
             if (img.align == "right") imgStyle = "float:right;" + imgStyle
             if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
             var strNewHTML = "<span " + imgID + imgClass + imgTitle
             + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
             + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
             + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
             img.outerHTML = strNewHTML
             j = j-1
          }
       }
    }    
}
window.attachEvent("onload", correctPNG);
</script>
  <script src="http://127.0.0.1/con/assets/js/f5.js"></script>
</head>

<body <?php body_class(); ?>>

	<div id="header">
    <div class="header_1">
      <span class="logo"><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt="杂草公园" title="杂草公园" class="tou"/></a></span>
      <ul>
        <?php
          wp_nav_menu('header-menu');
        ?>
        <div class="clear"></div>
      </ul>
      <div class="dengl">
      <!-- 判断是否登录，如果登录，则输出欢迎词和头像；如未登录，则出现登陆注册链接 -->
      <?php
        if ( is_user_logged_in() ) {
          echo '欢迎你，';
          // 输出用户名
          global $current_user;
            get_currentuserinfo();
            echo $current_user->display_name;
          // 输出头像 
          global $user_email; 
            get_currentuserinfo();
            echo get_avatar($user_email,30);
        } else {
          echo '<a href="wp-login.php">登录</a>
          <a href="wp-signup.php">注册</a>';
        }
      ?>
	</div>
      <div class="clear"></div>
    </div>
    <div class="header_2"></div>
  </div>