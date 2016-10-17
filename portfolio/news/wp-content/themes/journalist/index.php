<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	<p class="comments"><?php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); ?></p>

	<div class="main">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>

	<br class="clearfloat" />

	<div class="meta group">
		<div class="signature">
    		<p>Posted in <?php the_category(',') ?></p>
		</div>	
		<div class="tags">
    		<?php if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>
		</div>
	</div>

	<?php if ( comments_open() ) comments_template(); ?>

	<?php endwhile; else: ?>
	<div class="warning">
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
	<?php endif; ?>

	<div class="navigation group">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

</div>

<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1", { useFixedPanelHeights: false, defaultPanel: -1 });
//-->
</script>

</body>
</html>
