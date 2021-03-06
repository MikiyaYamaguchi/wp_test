<ul class="bread">
	<a href="<?php bloginfo('url'); ?>">HOME</a>
	&nbsp;>&nbsp;
	<?php if (is_category()) : ?>
		<?php $cat = get_the_category();
		echo $cat[0]->cat_name; ?>
	<?php elseif (is_tag()) :
		echo single_tag_title(); ?>
	<?php elseif (is_date()) :
		echo get_the_date('Y年n月'); ?>
	<?php elseif (is_single()) : ?>
		<?php $cat = get_the_category();
		echo get_category_parents($cat[0], true, '&nbsp;>&nbsp;'); ?>
		<?php the_title(''); ?>
	<?php elseif (is_search()) : ?>
		検索結果：<?php echo get_search_query(); ?>
	<?php elseif (is_404()) : ?>
		404 Not Found
	<?php else : ?>
		<?php the_title(); ?>
	<?php endif; ?>
</ul>