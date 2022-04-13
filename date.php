<?php get_header(); ?>
<main>
	<div class="container">
		<?php include('bread.php'); ?>
		<h1><?php echo get_the_date('Y年n月'); ?>の記事</h1>
		<div class="content_wrap">
			<div class="main">
				<div class="archive-list">
					<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
					?>
							<article>
								<p><a href="<?php echo the_permalink(); ?>"><?php echo $post->post_title; ?></a></p>
							</article>
						<?php
						endwhile;
					else :
						?>
						<p>記事がありません。</p>
					<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>