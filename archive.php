<?php get_header(); ?>
<main>
	<?php include('bread.php'); ?>
	<h1><?php single_cat_title(); ?></h1>
	<div class="archive-list">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
				<article>
					<p><a href="<?php echo the_permalink(); ?>"><?php echo $post->post_title; ?></a></p>
					<time><?php echo get_post_time('Y.n.j(D)'); ?></time>
				</article>
			<?php
			endwhile;
		else :
			?>
			<p>記事がありません。</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>