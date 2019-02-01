<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- SEO Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="pingback" type="text/css" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <?php
        /*Get theme options*/
        $ac_options = get_option('ac_option_name');
    ?>
    <!-- HEADER STARTS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="box-modular brand-style">
                    <div class="row">
                        <div class="col-md-6">
                            <a  href="<?php echo home_url();?>">
                                <?php if( "" != $ac_options['ac_logo']) : ?>
                                    <img class="logo  pull-left img-responsive" src="<?php echo esc_url($ac_options['ac_logo']); ?>" alt="<?php bloginfo('name'); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php echo  htmlspecialchars_decode($ac_options['upper_cta']);?>
                        </div>  
                    </div>                                  
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER ENDS -->

    <!-- Main Navigation -->
    <nav role="navigation" class="hidden-sm hidden-md hidden-xs visible-lg">
        <div class="container">
            <div class="row">
                <div id="main-navigation">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            /*Start Menu*/
                            wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => false,
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- MAIN IMAGE CTA END-->
    <!-- MOBILE MENU -->
     <nav role="navigation" id="menu-primary" class="hidden-lg visible-xs visible-sm visible-md">
            <div class="container">
                <div class="row">
                    <div class="box" style="padding-bottom: 0px !important">
                        <div id="main-navigation-mobile">
                            <div class="row">
                                <div class="col-md-12">
                                  <button id="menu-toggle" ><i class="fa fa-bars"></i> Menu</button>
                                    <?php
                                    /*Start Menu*/
                                    wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'menu_id'           => 'menu-primary-items',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => false,
                                    ));
                                    ?> 
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>    
    <!-- MOBILE MENU ENDS -->

    <!-- MAIN CONTENT CONTAINER START-->
    <section class="container">
        <div class="row">
            <div class="box">
	            <?php if(is_front_page()):?>
				<div class="main-cta">
	                <?php if( "" != $ac_options['ac_main_image']) : ?>
	                    <img class="img-responsive" src="<?php echo $ac_options['ac_main_image'];?>" alt="<?php bloginfo('name'); ?>">
						<?php endif; ?>

						<?php if( "" != $ac_options['ac_img_cta']) : 
							echo '<div class="img-cta row"><div class="col-md-3"><i class="fa fa-chevron-right"></i></div><div class="col-md-9">' . htmlspecialchars_decode($ac_options['ac_img_cta']) . '</div></div>';
						endif; ?><?php endif;?>
	                 
	                 <?php if( "" != $ac_options['caption']) : ?>
	                        <?php echo '<p class="ac-caption">' . esc_attr($ac_options['caption']) . '</p>'; ?>
	                 <?php endif; ?>            	
	            </div>
            </div>
        </div>        