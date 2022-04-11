<?php get_header(); ?>
<main>
	<div class="container">
		<?php include('bread.php'); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</main>
<?php get_footer(); ?>