<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name='description' content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
  <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">

        <div class="maincontent">

        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
            wp_nav_menu(
              array(
                'menu' => 'mymenu',
                'container_class' => 'nav-collapse collapse',
                'menu_class' => 'nav',
                'fallback_cb' => '',
                'menu_id' => 'mymenu'       
              )    
            ); ?>
          </div>
        </div>
      </div>
    </div>
    