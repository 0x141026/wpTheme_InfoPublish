<?php
/**
 * The template for the sidebar containing the main widget area
 *
 */
?>
<!-- hot 开始 -->
					<div class="hot">
						<div class="hot_title">
							<?php echo get_category_root_name($cat); ?>
						</div>
						<div class="hot_content">
							<div class="hot_content_box">
								<div class="hot_content_box_content">
									<ul>
<?php
if(is_single()||is_category()){
$args=array(
	'child_of' => get_category_root_id($cat),
	'hide_empty' =>0,
	'orderby' => 'id',
	'order' => 'ASC'
);
$categories=get_categories($args);
foreach($categories as $category) {
$cid=$category->term_id;
?><li><a href="<?php echo get_category_link($cid);?>" ><?php echo $category->name;?></a></li>

<?php 
} 
}
?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- hot 结束 -->
                    
                    
