<?php
get_header(); ?>
this is page-about.php
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="flex flex-col flex-center-a">
					<div id="aboutInfo" class="width75 marginB40">
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>