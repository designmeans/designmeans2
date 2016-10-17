<div id="sidebar">
	<div class="writing_body_blog">
		<h3>Categories</h3>
		<ul>
		    <?php wp_list_cats(); ?>
		</ul>	

		<h3>Archives</h3>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
</div>
