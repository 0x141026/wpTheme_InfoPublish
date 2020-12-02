<?php get_header(); ?>


				<!-- list_main 开始 -->
				<div class="list_main">
					
                    
<?php 
    /**
     *根据分类ID获取父类别名，然后调用对应的侧边栏。
     */
    get_sidebar(get_category_root_slug($cat)); ?>


					<!-- list_con 开始 -->
					<div class="list_con">
						<div class="list_con_title">
							<font><?php single_cat_title(); ?></font>
						</div>
						<div class="list_con_content">
							<ul>
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query( 'cat='.$cat.'&paged=' . $paged );
  if ( $the_query->have_posts());
  while ( $the_query->have_posts() ) : $the_query->the_post();
?>
    <li>
    <img src="<?php bloginfo('template_url'); ?>/img/list_con_ico.png">
    <a href="<?php echo get_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
    <span><?php the_time('Y-m-d') ?></span>
    </li>
<?php endwhile;?>
							</ul>
							<div class="page">
                            <?php wp_pagenavi();?>
							</div>
						</div>
					</div>
					<!-- hot 结束 -->
				</div>
				<!-- list_main 结束 -->
                
<?php wp_reset_query();  // Restore global post data ?>

<?php get_footer(); ?>