<div class="flex flex-col flex-center-a">
<h2 class="center-text">SHOP STUFF</h2>


<?php
$terms = get_terms( 'type', array(
    'hide_empty' => false,
) );
echo "<div class='flex flex-center-j width90'>";
foreach ($terms as $term) {
	echo "<div class='flex flex-col flex-center-j home-shop-cell'>";
	echo "<img src='".get_bloginfo("stylesheet_directory")."/assets/images/product-type-icons/".$term->name.".svg' class='height30px'>";
	echo "<p>$term->description</p>";
	echo "<a href='".get_term_link($term->term_id)."' class='center-text'><button class='home-shop-button'>$term->name Stuff</button></a>";
	echo "</div>";
}
echo "</div>";
?>
</div>