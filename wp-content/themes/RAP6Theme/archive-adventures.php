<?php
get_header();
?>
<div class='flex flex-col flex-center-a'>
	<div class='flex flex-col width90 flex-center-a'>
		<h1 class="horizontalLine width100 center-text paddingB40">Latest Adventures</h1>
		<div class='flex flex-row flex-center-j justify-space-between'>
		<?php
		if( have_posts() ) :
			while( have_posts() ) : the_post();
				$img = get_field("banner-image");
				echo "<div class='adventure-cell' style=\"background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url('".$img."') center center / cover no-repeat;\">";
				echo "<h3>".get_the_title()."</h3>";
				echo "<a href='".get_permalink()."' class='btn-white'>Read More</a>";
				echo "</div>";
			endwhile;
		endif;
		?>
		</div>
	</div>
</div>
<?php get_footer(); ?>