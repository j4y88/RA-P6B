<?php
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
		echo "<div class='flex flex-col flex-center-a'>";
		if(have_posts()) {
			$terms = get_terms( 'type', array('hide_empty' => false));
			echo "<header class='flex margin10 flex flex-col flex-center-a horizontalLine width90'>";
			echo "<h2 class='margin5'>".strtoupper($term)."</h2>";
			echo "<p class='marginB40'>".get_queried_object()->description."</p>";
    		echo "</header>";
    	}
    	echo "<section class='flex flex-row flex-space-between width90'>";
		while (have_posts()) : the_post();
			echo "<a href='".get_permalink()."'><div class='productCell margin10'>";
			echo "<div class='productThumbCell productThumb'><img src='".get_field('image')."' class='productThumb'></div>";
			echo "<div class='flex flex-space-between greyBox'>";
			echo "<div>".get_field('name')."</div>";
			echo "<div>".get_field('price')."</div>";
			echo "</div></div></a>";
		endwhile;
		?>
		
		</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
