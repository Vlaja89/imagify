<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <meta charset="UTF-8">
        <title><?php wp_title(''); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<div class="page-holder">
    

        <?php
        $ptype = get_post_type();
        if (is_home() || is_front_page()) {
            $topClass = 'top-menu';
        } else {
            $topClass = 'top-menu inner-menu';
//                $secLogo = get_field('secondary_logo', 'option');
        }
        ?>
        <div class="<?php echo $topClass; ?>">

            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg float-right d-flex justify-content-between align-items-center navbar-light w-100">
                        
                        <!-- Desktop Menu -->
                        <?php the_custom_logo(); ?>

                        <div class="collapse navbar-collapse mobile-menu justify-content-end">
                            <div class="menu-links">
                                <div class="menu-center">
                                    <?php
                                        if (has_nav_menu('menu_center')) {
                                            wp_nav_menu(array(
                                                'theme_location' => 'menu_center',
                                                'menu_class' => 'navbar-nav justify-content-center justify-content-md-end align-items-center',
                                                'container' => 'ul'
                                            ));
                                        }
                                    ?>
                                </div>
                                <div class="menu-right">
                                    <?php
                                        if (has_nav_menu('menu_right')) {
                                            wp_nav_menu(array(
                                                'theme_location' => 'menu_right',
                                                'menu_class' => 'navbar-nav justify-content-center justify-content-md-end align-items-center',
                                                'container' => 'ul'
                                            ));
                                        }
                                    ?>
                                </div>
                            </div>
                           
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mob-block">
                            <div class="mobile">
                                <div class="hamburger-menu">
                                    <div class="bar"></div>	
                                </div>
                            </div>  
                            <div class="mobile-nav hide">
                                <div class="menu-center">
                                    <?php
                                        if (has_nav_menu('menu_center')) {
                                            wp_nav_menu(array(
                                                'theme_location' => 'menu_center',
                                                'menu_class' => 'navbar-nav justify-content-center justify-content-md-end align-items-center',
                                                'container' => 'ul'
                                            ));
                                        }
                                    ?>
                                </div>
                                <div class="menu-right">
                                    <?php
                                        if (has_nav_menu('menu_right')) {
                                            wp_nav_menu(array(
                                                'theme_location' => 'menu_right',
                                                'menu_class' => 'navbar-nav justify-content-center justify-content-md-end align-items-center',
                                                'container' => 'ul'
                                            ));
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </nav>
                    
                </div>
            </div>
        </div>
