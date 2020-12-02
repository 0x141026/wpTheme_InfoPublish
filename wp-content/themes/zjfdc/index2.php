<?php get_header(); ?>

<style>
.slideBox{ width:300px; height:250px; overflow:hidden; position:relative;}
.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:5px; bottom:25px; z-index:1; }
.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
.slideBox .hd ul li.on{ background:#f00; color:#fff; }
.slideBox .bd{ position:relative; height:100%; z-index:0;   }
.slideBox .bd li{ zoom:1; vertical-align:middle; }
.slideBox .bd img{ width:300px; height:230px; display:block;  }


.slideBox1{ width:300px; height:250px; overflow:hidden; position:relative;}
.slideBox1 .hd{ height:15px; overflow:hidden; position:absolute; right:5px; bottom:25px; z-index:1; }
.slideBox1 .hd ul{ overflow:hidden; zoom:1; float:left;  }
.slideBox1 .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
.slideBox1 .hd ul li.on{ background:#f00; color:#fff; }
.slideBox1 .bd{ position:relative; height:100%; z-index:0;   }
.slideBox1 .bd li{ zoom:1; vertical-align:middle; }
.slideBox1 .bd img{ width:300px; height:230px; display:block;  }
</style>

<script type="text/javascript" src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/easytabs.js"></script>
<script type="text/javascript" src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/superslide/jquery.SuperSlide.2.1.1.js"></script>


<!-- 幻灯片 -->
<div class="banner">
<img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/indexbanner/1.jpg">
</div>

<div id="page" class="hfeed site grid-container container grid-parent">
<div id="content" class="content">
<?php do_action('generate_inside_container'); ?>

<div id="indexPage_btn_nav">
<ul>
    <li><a href="http://www.jskdhf.com/fc/" target="_blank"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/systemInput2.jpg"/></a></li>
    <li><a href="http://www.jskdhf.com/fc/" target="_blank"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/systemInput3.jpg"/></a></li>
    <li><a href="http://www.jskdhf.com/fc/" target="_blank"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/systemInput4.jpg"/></a></li>
    <li><a href="http://www.jskdhf.com/fc/" target="_blank"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/systemInput5.jpg"/></a></li>
    <li><a href="http://www.jskdhf.com/fc/" target="_blank"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/systemInput6.jpg"/></a></li>
    <li><a href="http://www.jskdhf.com/fc/" target="_blank"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/systemInput7.jpg"/></a></li>
</ul>
</div>


<!--Start of the Tabmenu1 -->
<div class="newsmenu">
<ul>
    <li>
    <a href="#" onmouseover="easytabs('1', '1');" onfocus="easytabs('1', '1');" onclick="return false;"  id="tablink1">公司新闻</a>
    </li>
    <li>
    <a href="#" onmouseover="easytabs('1', '2');" onfocus="easytabs('1', '2');" onclick="return false;"  id="tablink2">行业新闻 </a>
    </li>
</ul>
<div id="btn_more">
	<a href="/?cat=35"><img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/more.jpg"></a>
</div>
</div>
<!--End of the Tabmenu1 -->

<!--Start Tabcontent 1 -->
<div id="tabcontent1">
	<div id="content_pic">
    	<div id="slideBox" class="slideBox">
			<div class="bd">
				<ul>
				  <?php
                    $slidesnum=1;
                    query_posts('showposts=20&cat=36'); //showposts=10表示10篇
                    while(have_posts()): the_post();
                    if ( has_post_thumbnail() && $slidesnum<=6) { // check if the post has a Post Thumbnail assigned to it.
                  ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" target="_blank" title="<?php echo wp_trim_words( get_the_title(), 20, '...' ); ?>" >
                        <?php the_post_thumbnail(array(300,200));?><?php echo wp_trim_words( get_the_title(), 20, '...' ); ?>
                        </a>
                    </li>
                  <?php $slidesnum++;} endwhile; ?>
				</ul>
                <div class="hd">
                    <ul>
						<?php
                        for ($i=1; $i<$slidesnum; $i++) {
                          echo "<li>".$i."</li>";
                        } 
                        ?>
                    </ul>
				</div>
			</div>
		</div>
    </div><!--end content_pic -->
    <script id="jsID" type="text/javascript">
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,interTime:5000});
	</script>
    


    <div id="content_news">
        <ul style="line-height:2">
            <?php
                query_posts('showposts=9&cat=36'); //showposts=10表示10篇
				$i=0;
                while(have_posts()): the_post();
            ?>
                <li>
                <a href="<?php the_permalink(); ?>" target="_blank">
                <img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/sico.png" border="0" align="absmiddle"/>
                <?php echo wp_trim_words( get_the_title(), 18, '...' ); ?>
                </a> 
                <?php
					if(cal_news(get_the_time('Y-m-d'))<=30){ ?>
                		<img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/new.jpg" />
                <?php } ?>
                
                <span class="news_time"><?php the_time('Y-m-d') ?></span>
               </li> 
            <?php $i=$i+1; endwhile; ?>
        </ul>
    </div>
</div>
<!--End Tabcontent 1-->

<!--Start Tabcontent 2-->
<div id="tabcontent2">
	<div id="content_pic">
    	<div id="slideBox1" class="slideBox1">
			<div class="bd">
				<ul>
				  <?php
                    $slidesnum=1;
                    query_posts('showposts=20&cat=37'); //showposts=10表示10篇
                    while(have_posts()): the_post();
                    if ( has_post_thumbnail() && $slidesnum<=6) { // check if the post has a Post Thumbnail assigned to it.
                  ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" target="_blank" title="<?php echo wp_trim_words( get_the_title(), 20, '...' ); ?>" >
                        <?php the_post_thumbnail(array(300,200));?><?php echo wp_trim_words( get_the_title(), 20, '...' ); ?>
                        </a>
                    </li>
                  <?php $slidesnum++;} endwhile; ?>
				</ul>
                <div class="hd">
                    <ul>
						<?php
                        for ($i=1; $i<$slidesnum; $i++) {
                          echo "<li>".$i."</li>";
                        } 
                        ?>
                    </ul>
				</div>
			</div>
		</div>
    </div>
    <script id="jsID" type="text/javascript">
		jQuery(".slideBox1").slide({mainCell:".bd ul",autoPlay:true,interTime:5000});
	</script>
    
    
    
    
    <div id="content_news">
        <ul style="line-height:2">
            <?php
                query_posts('showposts=9&cat=37'); //showposts=10表示10篇
				$i=0;
                while(have_posts()): the_post();
            ?>
                <li>
                <a href="<?php the_permalink(); ?>" target="_blank">
                <img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/sico.png" border="0" align="absmiddle"  />
                <?php echo wp_trim_words( get_the_title(), 18, '...' ); ?>
                </a> 
                <?php if(cal_news(get_the_time('Y-m-d'))<=30){ ?>
                	<img src="<?php echo GET_TEMPLATE_DIRECTORY_URI() ?>/custom/new.jpg" />
                <?php }?>
                
                <span class="news_time"><?php the_time('Y-m-d') ?></span>
               </li> 
            <?php $i=$i+1; endwhile; ?>
        </ul>
    </div>
</div>
<!--End Tabcontent 2 -->

<div class="clear"></div>

<?php get_footer(); ?>