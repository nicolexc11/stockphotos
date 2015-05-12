<?php get_header();
/*
Template Name: Chairs Page
*/
?>


	<div class="title"><h1><?php
		the_title(); ?></h1></div>

<?php 
$args = [
	'post_type'=>'chair'

];

$chair = new WP_Query( $args );


	if ($chair->have_posts()) : while ($chair->have_posts()) : $chair->the_post(); ?>

	<?php the_content(); ?>



	<div class="areas col-xs-12 col-md-6">


		<img src="<?php the_field('image');?>" class="thumbnail img-responsive">

		<figcaption>
			<h3> <?php the_title(); ?></h3>
		</figcaption>
				
			</figure>
	</a>
</div>

	






<?php endwhile; else: ?>
	<p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?> 