<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<title><?php bloginfo('name')?></title>
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
  <!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<?php wp_head(); ?>
	</head>
	
	<body>
	<header class="padded">
      <div class="container">
        <div class="row">
          <div class="one half">
			<h2 class="logo"><a href="/" target="_parent"><img src="<?php bloginfo('template_url'); ?>../images/curriculum.svg" alt="GroundworkCSS"></a><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h2>
			
          </div>
          <div class="one half">
            <p class="small double-pad-top no-pad-small-tablet align-right align-left-small-tablet"><a href="https://github.com/champseo2017?tab=repositories" target="_parent">Github</a></p>
          </div>
        </div>
        <nav role="navigation" class="nav gap-top">
       <?php
      if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container' => 'ul',
          'role' => 'menubar',
        ) );
      }
    ?>
        </nav>
      </div>
	</header>


	
