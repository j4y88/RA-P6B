<?php
get_header(); ?>
this is archieve-products.php
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
		echo "<div class='flex flex-col flex-center-a'>";
		if(have_posts()) {
			echo "<header class='flex flex-col flex-center-a margin10 horizontalLine width90'>";
			echo "<h2 class='margin5'>SHOP STUFF</h2>";
			$terms = get_terms( 'type', array('hide_empty' => false));
			echo "<div class='flex marginB20'>";
    		foreach ($terms as $term) {
    			echo "<a href='../type/$term->name' class='marginH20'>$term->name</a>";
    		}
    		echo "</div></header>";
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
