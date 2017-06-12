<?php 
get_header();
?>
this is the single-products.php
<body class='page-fit'>
<div class='flex flex-center-j marginB40 marginT40'>
	<div class='width90 flex marginB40'>
		<div class='width50'>
			<?php echo "<img src='".get_field('image')."' class='marginB40'>"; ?>
		</div>
		<div id="productInfo" class='width50 paddingL30 marginB40'>
		<?php
			while(have_posts()) : the_post();
				echo "<h1>".get_the_title()."</h1>";
				echo "<h3>$".get_field('price')."</h3>";
				echo "<p>".get_field('description')."</p>";
			endwhile;
		?>
		<a href='#' class='btn-black'><i class='fa fa-facebook' aria-hidden='true'></i> Like</a>
		<a href='#' class='btn-black'><i class='fa fa-twitter' aria-hidden='true'></i> Tweet</a>
		<a href='#' class='btn-black'><i class='fa fa-pinterest' aria-hidden='true'></i> Pin</a>
		</div>
	</div>
</div>

<?
get_footer();
?>
</body>