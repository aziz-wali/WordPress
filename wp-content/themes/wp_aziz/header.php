<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	  <head>
<meta charset="utf-8" <?php bloginfo("charset"); ?> />
	  <title><?php wp_title('|' ,'true','right');
		  bloginfo("name"); ?> </title>
<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
<?php wp_head(); ?>
</head>
<body>
	
	<nav class="navbar  navbar-expand-lg  navbar-light bg-light ">
  <a class="navbar-brand " href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	  </button>
	 
	  <div class="collapse navbar-collapse navbar-right"  id="navbarSupportedContent">
	  <?php navbar(); ?>
		</div>
  
	</nav>
	