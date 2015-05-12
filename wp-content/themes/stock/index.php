<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

      <h2>
      	<a href="<?php the_permalink() ?>"> 
      		<?php the_title(); ?>
      	</a>
      </h2>

      





<div class="col-xs-12 statement">
Your BEST stop for modern house stock photos...
</div>

<div class="col-xs-4"></div>
<div class="col-xs-4 search">
  	<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">search</button>
      </form>
</div>
<div class="col-xs-4"></div>

<row>
<div class="col-xs-12"><div class="black">Subscribe to one of our three package deals...</div></div>
</row>






<div class="col-xs-12 options">
	<div class="col-xs-3 deals"><h2>Monthly</h2><br><h3>$260</h3><h6>All you photos you want.</h6></div>
	<div class="col-xs-3 deals"><h2>Yearly</h2><br><h3>$2,550</h3><h6>Save $50 a month!</h6></div>
	<div class="col-xs-3 deals"><h2>Per Photo</h2><br><h3>$20</h3><h6>All you photos you want.</h6></div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>