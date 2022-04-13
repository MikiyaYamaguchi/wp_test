<form action="<?php bloginfo('url'); ?>" class="search">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="キーワード検索" />
	<input type="submit" id="searchsubmit" value="検索" />
</form>