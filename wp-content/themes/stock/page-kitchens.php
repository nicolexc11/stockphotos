<?php get_header();
/*
Template Name: kitchens Page
*/
?>


	<div class="title"><h1><?php
		the_title(); ?></h1></div>

<?php 
$args = [
	'post_type'=>'place'

];

$chairs = new WP_Query( $args );


	if ($chairs->have_posts()) : while ($chairs->have_posts()) : $chairs->the_post(); ?>

	<?php the_content(); ?>

	




<div class="areas col-xs-12 col-sm-6 col-md-4">
	<div class="chairimg"></div>
	<div class="chairimg"></div>
	<div class="chairimg"></div>

	<a href="<?php the_field('link');?>">
		<img src="<?php the_field('photo');?>" class="thumbnail img-responsive">

		<figcaption>
			<h3> <?php the_title(); ?></h3>
		</figcaption>
				
	</a>
</div>


<?php endwhile; else: ?>
	<p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?> 