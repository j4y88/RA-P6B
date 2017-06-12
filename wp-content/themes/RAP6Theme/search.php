<?php
get_header(); ?>
this is search.php
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class='flex flex-col flex-center-a'>
				<div class='flex flex-row width90'>
					<div class="flex flex-col width75 verticalLine">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="paddingR30 marginB40">
							<?php get_template_part( 'template-parts/content', 'search' ); ?>
							<a href="<?php echo the_permalink(); ?>" class="">
						    	<button type="button" name="READ MORE" class="journalListButton journalListTxt" ng-click="">READ MORE <i class="fa fa fa-arrow-right" aria-hidden="true"></i></button>
							</a>
							</div>
						<?php endwhile; ?>

						<?php red_starter_numbered_pagination(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
					</div>
					<div class="paddingH10">
						<?php dynamic_sidebar('sidebar'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>
