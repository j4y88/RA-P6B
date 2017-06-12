<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();
$args = array(
'posts_per_page' => 5,
'orderby' => 'post_date',
'order' => 'DESC',
'post_status' => 'publish', 
);

$query = new WP_Query( $args );
?>
this is home.php
<div class="flex flex-center-j">
	<section id="latestjournals" class="flex width90">
		<div class="width75">
			<div class="flex flex-col verticalLine">
				<h1>LATEST JOURNAL POST</h1>
				<?php if ($query->have_posts()) { $i=0; while ($query -> have_posts()) : $query -> the_post(); $i++; ?>
			  	<div class="width90 marginB25">
			  		<style>
			  		<?php echo ".journalImage".$i."{"; ?>
			  			background:url('<?php echo get_the_post_thumbnail_url(); ?>') center center;
			  			background-size: cover;
			  			}
			  		</style>
			  		<div class='journalImageCell <?php echo "journalImage".$i; ?>'>
						<p class="journalTitleTxt"><?php echo get_the_title(); ?></p>
						<p class="journalDateTxt"><?php echo get_the_date(); ?></p>
					</div>
					<p class="journalContentTxt"><?php 
					echo first25words(substr(get_the_content(), 0, 250)) . '[...]'; ?></p>
				    <a href="<?php echo the_permalink(); ?>">
				    	<button type="button" name="READ MORE" class="journalListButton journalListTxt marginB40" ng-click="">READ MORE <i class="fa fa fa-arrow-right" aria-hidden="true"></i></button>
				    </a>
				</div>
				<?php endwhile; }?>
			</div>
		</div>
		<div class="flex flex-col marginH10">
			<?php dynamic_sidebar('sidebar'); ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>