<?php get_header(); ?>

   
  <div id="content">
    <!-- 面包屑导航开始 -->
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
    <!-- 分类列表(左侧) -->
    <div class="left1">
      <ul><?php wp_list_cats("child_of=3&hide_empty=0");?></ul>
    </div>

    <!-- 主循环开始 -->
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <div class="right2">
      <div class="post" id="post-<?php the_ID();?>">
      		
            <div class="zuo">
              <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="img_a">
                  <!-- 周刊封面 -->
                  <div><?php the_post_thumbnail('thumb_event');?></div>
                   
                    <div class="wenz2">

                          <!-- <h3><?php the_title();?></h3> -->
                          
                    </div>
              </a>
            </div>
            <div class="you">
              <!-- 活动期数 -->
              <h1><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h1>
              <div class="zz">
			  		<span>美编：于小婷</span>
                            <span>撰字：乐小逸</span>
                            <span class="num">1024</span>
                            <div class="clear"></div>
			  </div>
              <p><?php the_excerpt();?></p>
            </div>
            <div class="clear"></div>
     </div>
    <?php endwhile; ?>
    <?php else:?>
      <div class="post">
        <h2><?php_e('Not Found');?></h2>
      </div> 
    <?php endif; ?>
    <!-- 主循环结束 -->
  </div>
</div>
<div class="clear"></div>

<?php get_footer(); ?>