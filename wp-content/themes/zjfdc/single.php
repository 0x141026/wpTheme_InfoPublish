<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); 
?>
<!-- list_main 开始 -->

<div class="content_main">
      <div class="content_main_title"> <?php the_title(); ?> </div>
      <div class="content_main_dis">  发布时间：<?php the_time('Y年n月j日') ?> &nbsp;&nbsp;&nbsp;&nbsp;
             版块：<?php $i=0; foreach((get_the_category()) as $category){ $i++; if($i>1){echo " 、 ";} echo $category->cat_name;} ?>
      </div>
  
      <div class="content_main_con">
      	
        <?php echo $post->post_content;?>
        <!-- <?php the_content();?> -->
        
      </div>

</div>
<!-- list_main 结束 -->

<?php get_footer(); ?>



