<?php
/*
 * This theme styles the visual editor to resemble the theme style,
 */


/**********************************************************************************/
//category function
/**********************************************************************************/
//通过子分类id获取父分类id
function get_category_root_id($cat){
$this_category = get_category($cat); // 取得当前分类
while($this_category->category_parent) // 若当前分类有上级分类时，循环
{
$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）
}
return $this_category->term_id; // 返回根分类的id号
}
//通过子分类id获取父分类name
function get_category_root_name($cat){
$this_category = get_category($cat); // 取得当前分类
while($this_category->category_parent) // 若当前分类有上级分类时，循环
{
$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）
}
return $this_category->name; // 返回根分类的name
}
//通过子分类id获取父分类别名
function get_category_root_slug($cat){
	$this_category = get_category($cat); // 取得当前分类
	while($this_category->category_parent) // 若当前分类有上级分类时，循环
	{
	$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）
	}
	return $this_category->slug; // 返回根分类的别名
}

/**********************************************************************************/
//日期计算函数
/**********************************************************************************/
function cal_news($olddate){
	//$olddate = '2016-02-11';
	$oldtime = strtotime($olddate);   
	$passtime = time()-$oldtime; //经过的时间戳。   
	return floor($passtime/(24*60*60)); //N天。
}


/**********************************************************************************/
//分页函数
/**********************************************************************************/
function wp_pagenavi() {   
    //先申明两个全局变量   
    global $wp_query, $wp_rewrite;   
    //判断当前页面   
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;   
     $total_page=$wp_query->max_num_pages;
	 $total_page_count=$wp_query->post_count;
	 $total_count=$wp_query->found_posts;
    $pagination = array(   
        'base' => @add_query_arg('paged','%#%'),   
        'format' => '',   
        'total' => $total_page,   
        'current' => $current,   
        'show_all' => true,   
        'type' => 'plain',   
        'end_size'=>'1',   
        'mid_size'=>'3',   
        'prev_text' => '上一页',   
        'next_text' => '下一页'   
    );   
       
    if( $wp_rewrite->using_permalinks() )   
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');   
    if( !empty($wp_query->query_vars['s']) )   
        $pagination['add_args'] = array('s'=>get_query_var('s'));   
    echo "<div class='clear'>&nbsp;</div><div align='center'>".$current."/".$total_page."页,每页10条,共".$total_count."条记录&nbsp;&nbsp;&nbsp;&nbsp;".paginate_links($pagination)."</div>";   
}  
