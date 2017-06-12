<article id="post-<?php the_ID(); ?>" 
	<?php post_class(); ?>>
	<div class="entry-header">
		<?php 
		if (the_field('image')) {
			echo "<img src='".the_field('image')."' class=''>";
			the_title( sprintf( '<img src=', the_field('image')) );
		}
		echo "<p class='entry-title'><a href='".esc_url(get_permalink())."'>".the_title()."</a></p>";
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / 
			<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / 
			<?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
