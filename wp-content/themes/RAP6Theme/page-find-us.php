<?php
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="findUsInfo" class="flex flex-col flex-center-a">
				<div class="flex flex-center-j width90">
					<div class="flex flex-col width75 verticalLine">
						<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'find' ); ?>
						<?php endwhile; // End of the loop. ?>
					</div>
					<div class="flex flex-col">
						<?php dynamic_sidebar('sidebar'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>