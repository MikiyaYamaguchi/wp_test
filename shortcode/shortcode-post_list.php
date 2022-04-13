<?php
function post_list($atts)
{
	extract(shortcode_atts(array(
		'slug' => null,
		'per' => '3',
	), $atts));
	$paged = get_query_var('paged');
	$args = array(
		'posts_per_page' => $per,
		'paged' => $paged,
		'category_name' => $slug,
		'post_type' => 'post'
	);
	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :
		ob_start();
?>
		<div class="post_list_wrap">
			<ul class="post_list">
				<?php
				while ($the_query->have_posts()) :
					$the_query->the_post()
				?>
					<li><a href="<?php echo the_permalink(); ?>"><?php echo get_the_time('Y/m/d'); ?>　<br class="sp-only"><?php echo the_title(); ?></a></li>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</ul>
			<p class="more text-right"><a href="<?php echo site_url(); ?>/category/<?php echo $slug; ?>">もっと見る</a></p>
		</div>
<?php
		return ob_get_clean();
	endif;
}
add_shortcode('post_list', 'post_list');
