<?php get_header(); ?>
<main>
	<div class="container">
		<?php include('bread.php'); ?>
		<h1><?php the_title(); ?></h1>
		<div class="content_wrap">
			<div class="main">
				<?php the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>