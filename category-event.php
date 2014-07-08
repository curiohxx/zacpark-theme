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
      <ul><?php wp_list_cats("child_of=2&hide_empty=0");?></ul>
    </div>

    <!-- 主循环开始 -->
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <div class="right1">
      <div class="post" id="post-<?php the_ID();?>">
      		
            <div class="zuo">
              <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="img_a">
                  <!-- 活动封面 -->
                  <div><?php the_post_thumbnail('thumb_event');?></div>
                    <div class="touming"></div>
                    <div class="wenz">
                      <!-- 活动标题 -->
                      <h2><?php the_title();?></h2>
                      <!-- 活动描述 -->
                      <p><?php the_excerpt();?></p>
                    </div>
              </a>
            </div>
            <div class="you">
              <!-- 活动期数 -->
              <span class="sz"><?php echo get_post_meta($post->ID, "Event_Vol",true);?></span>
            </div>
            <div class="clear"></div>
      </div>
    <?php endwhile; ?>
    <?php else:?>
      <div class="post">
        <h2><?php_e('Not Found');?></h2>
      </div> 
    <?php endif; ?>
    <!---- 主循环结束 -->
    <div class="clear"></div>
  </div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php get_footer(); ?>
