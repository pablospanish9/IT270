<!DOCTYPE html>
	
<html <?php language_attributes() ;?> >
<head>
<!-- Hello everyone reading this HTML code. If you are reading
this you are probably curious how I built this website.
Well, this is part of a Wordpress course that I am curretly
taking at Seattle Central College with professor Olga Szemetylo.
I have used WordPress to build pages and posts within their 
dashboard. And I use HTML and CSS to generate anchor pages
and to create my own template. I have also used some PHP 
to add functions and functionality to the pages to make 
active web pages. If you have any questions, please contact 
me. My contact information is at the bottom of the 
footer. Thank you! Pablo -->
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">

<!-- This function will allow my plugin information, stylesheets,
javascript, etc, to display BEFORE the closing head: -->
<?php wp_head();  ?>
</head>
<body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>
<header>
    <div id="top">
    <?php get_search_form(); ?>
    </div>   <!-- end top -->

     <div id="inner-header">
        <a href="<?php echo get_home_url();?>">
            <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo" id="logo">
    </a>
    <!-- our main navigation: -->

    <nav id="site-navigation" class="main-navigation">
<button class="nav-button">Toggle Navigation</button>
<?php
$args_primary = array(
'theme_location' => 'primary',
'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
);?>
<?php wp_nav_menu($args_primary); ?>
</nav>

    </div>  <!-- close inner-header -->

</header>