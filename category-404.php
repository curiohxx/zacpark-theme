<?php get_header(); ?>

   
  <div id="content">
    <!-- 面包屑导航开始 -->
      <div class="breadcrumbs">
      	<div class="breadcrumbs_1" >
        	<div>
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
        </div>
      </div>
    <!-- 面包屑导航结束 -->
    <!-- 分类列表(左侧) -->
    <div class="left1">
      <ul><?php wp_list_cats("child_of=3&hide_empty=0");?></ul>
    </div>
    <div class="right1">
    	<div class="err">
        		阿噢，这个分类貌似还没有内容唷 !&nbsp;&nbsp;&nbsp;  <span class="err_1" > ╮(╯_╰)╭</span>
        </div>
    </div>
    
  </div>
  
<div class="clear"></div>
<?php get_footer(); ?>