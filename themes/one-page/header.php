<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <?php if (onepage_get_option('onepage_favicon') != '') { ?>
            <link rel="shortcut icon" href="<?php echo onepage_get_option('onepage_favicon'); ?>" />
        <?php } else {
            
        } ?>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- ******************top Social icon wrapper********* -->
        <div class="social_wrapper">
            <div class="container_24">
                <div class="grid_24">				
                    <div id="call_us">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/images/phone_icon.png"></div><div>
                            <?php if (onepage_get_option('onepage_contact_number') != '') { ?>
                                <p><?php _e('Call us on&nbsp;&nbsp;','onepage'); ?><?php echo onepage_get_option('onepage_contact_number'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('Call us on 2514578498','onepage'); ?></p>
<?php } ?>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- *********************Header Logo and menu Wrapper************************************** -->


        <!-- Header condition1 starts here -->

        <div class="clear"></div>
        <!-- Header condition2 starts here -->	

        <div class="header_wrapper">
            <div class="container_24">
                <div class="grid_24">
                    <div class="grid_6 alpha">
                        <div id="logo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php if (onepage_get_option('onepage_logo') != '') { ?><?php echo onepage_get_option('onepage_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
                    </div>
                    <div class="grid_18 omega">
                        <div id="MainNav">
                            <?php if (onepage_get_option('onepage_nav') != '') { ?><a href="#" class="mobile_nav closed"><?php echo stripslashes(onepage_get_option('onepage_nav')); ?><span></span></a>
                            <?php } else { ?> <a href="#" class="mobile_nav closed"><?php _e('Mobile Menu','onepage'); ?><span></span></a>
<?php } ?>
<?php onepage_nav(); ?> 
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

