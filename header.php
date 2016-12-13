<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#ffffff ">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class('background-gradient-yellow'); ?>>

<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <!-- off-canvas title bar for 'small' screen -->
    <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>

        <a href="/" class="logo-anchor"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Year Of Open Logo" /></a>
      </div>
    </div>

    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <?php
        wp_nav_menu(array(
            'container' => false,
            'menu' => __( 'Drill Menu', 'textdomain' ),
            'menu_class' => 'vertical menu',
            'theme_location' => 'main',
            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s</ul>',
            //Recommend setting this to false, but if you need a fallback...
            'fallback_cb' => 'f6_drill_menu_fallback',
            'walker' => new F6_DRILL_MENU_WALKER(),
        ));
      ?>
    </div>

    <!-- "wider" top-bar menu for 'medium' and up -->
    <div>
        <div class="row header show-for-medium">
          <div class="medium-2 columns logo-container">
            <a href="/" class="logo-anchor"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Year Of Open Logo" /></a>
          </div>

          <div class="medium-10 columns">
            <?php
                wp_nav_menu(array(
                    'container' => false,
                    'menu' => __( 'Top Bar Menu', 'textdomain' ),
                    'menu_class' => 'dropdown menu',
                    'theme_location' => 'main',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                    //Recommend setting this to false, but if you need a fallback...
                    'fallback_cb' => 'f6_topbar_menu_fallback',
                    'walker' => new F6_TOPBAR_MENU_WALKER(),
                ));
            ?>
          </div>
        </div>
    </div>
