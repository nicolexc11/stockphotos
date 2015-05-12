<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  


	<div class= "col-xs-12>"
		   <div class="navbar-xs">
			   <div class="navbar-primary">
			       <nav class="navbar navbar-static-top navbar-right" role="navigation">
			          <div class="navbar-header">
			             
			          </div>
			          <div class="collapse navbar-collapse">
			              <ul class="nav navbar-nav">
			              		<li><a href="<?php bloginfo('url'); ?>/home">Home</a></li>
			                  <li><a href="#">Sign In | Sign Up</a></li>
			                   <li><a href="#">Cart</a></li>
			              </ul>
			          </div>
			      </nav>
			  </div>
	</div>



<div class="col-xs-12">
		<div class="navbar-xs">
		   <div class="navbar-primary">
		       <nav class="navbar navbar-static-top navbar-right" role="navigation">
		          <div class="navbar-header">
		             
		          </div>
		          <div class="collapse navbar-collapse">
		              <ul class="nav navbar-nav">

		              	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav">

 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Photos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php bloginfo('url'); ?>/chairs">Chairs</a></li>
            <li class="divider"></li>
            <li><a href="<?php bloginfo('url'); ?>/tables">Tables</a></li>
             <li class="divider"></li>
            <li><a href="<?php bloginfo('url'); ?>/livingrooms">Living Rooms</a></li>
            <li class="divider"></li>
            <li><a href="<?php bloginfo('url'); ?>/bathrooms">Bathrooms</a></li>
            <li class="divider"></li>
            <li><a href="<?php bloginfo('url'); ?>/kitchens">Kitchens</a></li>
          </ul>
        </li>

 <li class="active"><a href="<?php bloginfo('url'); ?>/about">About <span class="sr-only">(current)</span></a>
        <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
         <li class="active"><a href="<?php bloginfo('url'); ?>/terms">Terms<span class="sr-only">(current)</span></a></li>
</ul>
		          </div>
		      </nav>
		  </div>
</div>








