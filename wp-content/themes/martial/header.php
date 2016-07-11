<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/favicon.png">
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav.png">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
</head>

<body>
<header>
<div class="container">
<div class="row">
    
 <!--SIMPLE NAV-->
            <nav class="navbar">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo site_url();?>" class="navbar-brand"><img src="<?php echo get_option_tree('logo');?>" alt="logo" /></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">

                        <ul class="nav navbar-nav navbar-right">
                            <?php

		$defaults = array(
		'theme_location'  => '',
		'menu'            => 'header',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '%3$s',
		'depth'           => 0,
		'walker'          => ''
		);

		wp_nav_menu( $defaults );

		?> 
                            <li>
							 <form role="search" method="get" id="searchform" class="search-form form-inline menu-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    
                        <input type="text" class="form-control" placeholder="Search" name="s" id="s" value="<?php echo get_search_query(); ?>">
							<button><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
							
					</li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->
    </nav>
 <!--SIMPLE NAV-->
 </div>
 </div>
</header>
