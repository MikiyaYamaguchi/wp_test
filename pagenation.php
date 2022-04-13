<?php
$paginationhtml = get_the_posts_pagination(
	array(
		'mid_size' => 2,
		'prev_next' => true,
		'prev_text' => __('前へ'),
		'next_text' => __('次へ'),
		'type' => 'list',
	)
);
echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $paginationhtml);
