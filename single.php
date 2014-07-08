<?php get_header(); ?>

  <div id="content">
  <!----content_xq---->
  	<div class="content_xq">
    <!-- 面包屑导航 -->
        <div class="breadcrumbs">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &raquo;
          <?php
          if( is_single() ){
          $categorys = get_the_category();
          $category = $categorys[0];
          echo( get_category_parents($category->term_id,true,' &raquo; ') );
          the_title();
          } elseif ( is_page() ){
          the_title();
          } elseif ( is_category() ){
          single_cat_title();
          } elseif ( is_tag() ){
          single_tag_title();
          } elseif ( is_attachment() ) {
            single_attachment_title();
          } elseif ( is_day() ){
          the_time('Y年Fj日');
          } elseif ( is_month() ){
          the_time('Y年F');
          } elseif ( is_year() ){
          the_time('Y年');
          } elseif ( is_search() ){
          echo $s.' 的搜索结果';
          }
          ?>
        </div>
    <!-- 面包屑导航结束 -->
        <div class="left_xq">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">
            	<div class="bt">
                    <span class="tit">第 <?php echo get_post_meta($post->ID, "Event_Vol",true);?> 期：</span><span class="title"><?php the_title(); ?></span>
                </div>

                <p class="tupimg"><?php the_post_thumbnail('thumb_event_item');?></p>

                <div class="bt_2">
                    <span class="">关于活动</span>
                </div>

                <p><?php echo get_post_meta($post->ID, "Event_About",true);?></p>

                <div class="bt_3">
                    <span class="">行程详细安排</span>
                </div>

                <p><?php the_content(); ?></p>

                <!-- <div class="bt_3">
                    <span class="">活动图片</span>
                </div> -->
                
                <div class="tup">
                </div>
            </div>

            <?php endwhile; ?>
            <?php else: ?>
            <div class="post">
                <h2><?php _e('Not Found'); ?></h2>
            </div>
            <?php endif; ?>
        </div>
   
    
    <div class="right_xq">
    	<div class="time">
            	<ul>
                	<li>出发时间：<?php echo get_post_meta($post->ID, "Event_StartDate",true);?></li>
                    <li>活动天数：<?php echo get_post_meta($post->ID, "Event_Days",true);?></li>
                    <li>出发地点：<?php echo get_post_meta($post->ID, "Event_From",true);?></li>
                    <li>目的地点：<?php echo get_post_meta($post->ID, "Event_To",true);?></li>
                    <li>活动人数：<?php echo get_post_meta($post->ID, "Event_Peoples",true);?></li>
                    <li>活动费用：<?php echo get_post_meta($post->ID, "Event_Price",true);?></li>
                    <li>活动期数：<?php echo get_post_meta($post->ID, "Event_Vol",true);?></li>
                </ul>
            </div>
            <div class="bm">
            	<a href="<?php echo get_post_meta($post->ID, "Event_SignUp",true);?>" target="_blank" title="点击这里，立即报名">立即报名</a>
            </div>
         <div class="sns"><!------------------wx--->
            	<span class="sns_img"><a href="#"><img src="/wp-content/themes/zacpark/img/weixin.jpg"  width="60"/></a></span>
                <span>微信简介</span>
                <span class="sns_img"><a href="#"><img src="/wp-content/themes/zacpark/img/weibo.jpg" width="60"/></a></span>
                <span style="width:100px; margin-right:0;;">新浪微博@杂草公园 第一时间获取精彩活动！</span>
                <div class="clear"></div>
            </div><!------------------wx---end-->
         <div class="comments" style=""><?php comments_template('', true);?></div> 
         <div class=""></div>   
    </div>
   		<div class="clear"></div>
	</div><!----content_xq--end-->
  </div>
<div class="clear"></div>
<?php get_footer(); ?>