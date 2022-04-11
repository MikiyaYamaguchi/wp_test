<?php get_header(); ?>
<main>
	<?php include('bread.php'); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
</main>
<?php get_footer(); ?>