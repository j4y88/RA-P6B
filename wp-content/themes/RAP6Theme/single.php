<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>
<div class="flex flex-center-j">
	<section id="latestjournals" class="flex width90">
		<div class="width75">
			<div class="flex flex-col verticalLine">
				<?php if (have_posts()) { 
					while (have_posts()) : the_post();?>
			  	<div class="width90 marginB25">
			  		<style>
			  		.journalImage {
			  			background:url('<?php echo get_the_post_thumbnail_url(); ?>') center center;
			  			background-size: cover;
			  			}
			  		</style>
			  		<div class='journalImageCell journalImage'>
						<p class="journalTitleTxt"><?php echo get_the_title(); ?></p>
						<p class="journalDateTxt"><?php echo get_the_date(); ?></p>
					</div>
					<p class="journalContentTxt"><?php echo get_the_content(); ?></p>
				</div>
				<?php endwhile; 
				}
				echo "<div class='flex'>";
				echo red_starter_entry_footer();
				echo "</div>";
				?>
				<div id="social" class="flex">
					<a href='#' class='btn-black'><i class='fa fa-facebook' aria-hidden='true'></i> Like</a>
					<a href='#' class='btn-black marginH10'><i class='fa fa-twitter' aria-hidden='true'></i> Tweet</a>
					<a href='#' class='btn-black'><i class='fa fa-pinterest' aria-hidden='true'></i> Pin</a>
				</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			</div>
		</div>
		<div class="flex flex-col marginH10">
			<?php dynamic_sidebar('sidebar'); ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>