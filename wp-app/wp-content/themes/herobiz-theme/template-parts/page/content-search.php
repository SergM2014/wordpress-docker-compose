<?php
/**
 * Template for displaying search results.
 */
?>
<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" >', esc_url(get_permalink())), '</a>'); ?>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<div class="entry-footer">
		<?php
		printf('<a href="%s">Read More</a>', esc_url(get_permalink()));
		?>
	</div>
</article>
