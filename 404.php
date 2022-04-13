<?php get_header(); ?>
<main>
	<div class="container">
		<?php include('bread.php'); ?>
		<h1>404 Not Found</h1>
		<div class="content_wrap">
			<div class="main">
				<p>リクエストされたページは見つかりませんでした。</p>
				<p><a href="<?php echo site_url(); ?>">＞ホームに戻る</a></p>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>