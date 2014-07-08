<?php
        $post = $wp_query->post;
        if(in_category('2')) {
        include(TEMPLATEPATH.'/category-event.php');
        }
        else if (in_category('5')){
        include(TEMPLATEPATH.'/category-event.php');
        }
        else if (in_category('6')){
        include(TEMPLATEPATH.'/category-event.php');
        }
        else if (in_category('3')){
        include(TEMPLATEPATH.'/category-weekly.php');
        }
        else if (in_category('7')){
        include(TEMPLATEPATH.'/category-weekly.php');
        }
        else {
        include(TEMPLATEPATH.'/category-404.php');
        }?>