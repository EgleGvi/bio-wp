<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="UTF-8" />
        <title>
            <?php if (is_home()) { echo bloginfo('name');
            } elseif (is_front_page()) {
                echo bloginfo('name');
            } elseif (is_404()) {
                _e("404 error nothing found", "itb");
            } elseif (is_category()) {
                _e("Category", "itb"); wp_title('');
            } elseif (is_search()) {
                _e("Search", "itb");
            } elseif ( is_day() || is_month() || is_year() ) {
                _e("Archive", "itb"); wp_title('');
            } else {
                echo wp_title('');
            }
            ?>
        </title>
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php wp_head(); ?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/itbextra.css" media="screen" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>


    <body <?php body_class( $class ); ?>>
    <header>
        <div class="header-block">
            <div class="header-top">
                <div class="main-top-background"></div>
                <div class="main-top-shadow"></div>
                <div class="main-top-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-padding-right">
                                    <a href="#" class="cart-shop"><img class="cart-shop-img" src="<?php bloginfo('template_directory'); ?>/images/cart.png" alt="<?php bloginfo('name'); ?>">Cart</a>
                                    <ul class="subheader-menu">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="logo-container">
                                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                        <div class="menu-wrapper">
                            <?php
                            $args = array(
                                'container'       => 'div',
                                'container_class' => '',
                                'container_id'    => 'main-navigation',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'theme_location' => 'main_navigation'
                            );

                            wp_nav_menu($args); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!--        <div class="show-desctop">
                        <?php
                        $args = array(
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                            'container_id'    => 'main-navigation',
                            'menu_class'      => 'nav navbar-nav navbar-left',
                            'menu_id'         => '',
                            'theme_location' => 'main_navigation'
                        );

                        wp_nav_menu($args); ?>
                    </div>
                    <div class="show-mobile">
                        <div class="navbar-ex2-collapse collapse mob-men" aria-expanded="false">
                            <?php
                            $args = array(
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse ',
                                'container_id'    => 'cssmenu',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'theme_location' => 'mobile_navigation'
                            );

                            wp_nav_menu($args); ?>
                        </div>
                    </div>
                    -->


    </header>







		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		