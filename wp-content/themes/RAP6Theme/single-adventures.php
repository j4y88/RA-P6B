<?php
get_header();
?>
<div class="flex flex-center-j">
	<section id="adventureArticle" class="flex width50">
		<?php if (have_posts()) { 
			while (have_posts()) : the_post();?>
			  	<div id="adventureInfo" class="flex flex-col marginB25">
					<h2 class=""><?php echo get_the_title(); ?></h2>
					<h5 class="">BY <?php echo get_the_author(); ?></h5>
					<p class="journalContentTxt"><?php echo get_the_content(); ?></p>
					<div class="flex marginB40">
						<a href='#' class='btn-black'><i class='fa fa-facebook' aria-hidden='true'></i> Like</a>
						<a href='#' class='btn-black marginH10'><i class='fa fa-twitter' aria-hidden='true'></i> Tweet</a>
						<a href='#' class='btn-black'><i class='fa fa-pinterest' aria-hidden='true'></i> Pin</a>
					</div>
				</div>
			<?php endwhile; 
		}?>
	</section>
</div>
<?php get_footer(); ?>