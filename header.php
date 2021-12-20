<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri());?>/img/logo.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
      
       
        
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <header>
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-6">
                        <div class="header-top">
                            <div class="email_header">
                            <a href="mailto:example@email.com">
                                <i class="<?php echo cs_get_option('fields-6');?>"></i>
                                <?php echo cs_get_option('fields-7');?>
                            </a>
                            <span class="seprator">|</span>
                            </div>
                            <a href="#">
                                <i class="<?php echo cs_get_option('fields-8'); ?>"></i>
                                <?php echo cs_get_option('fields-9'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="header-top social">
                            <a href="<?php echo cs_get_option('fields-10');?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo cs_get_option('fields-11');?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area" id="myHeader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="logo">
                            <a href="<?php bloginfo('home');?>"><img src=<?php echo wp_get_attachment_image_src(cs_get_option('fields-0','logo-image'))[0];?>></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-6">
                        <!-- Responsive Menu -->
                        <div class="reponsive_menu">
                            <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button>
                               <div id="mySidepanel" class="sidepanel">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
                                <div class="responsive_menu_content">
                                    <?php 
                                    if(function_exists('wp_nav_menu')){
                                    wp_nav_menu(array(
                                    'theme_location'=>'main-menu'
                                    ));
                                    }
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="main-menu" id="nav">
                            <nav>
                                <?php 
                                    if(function_exists('wp_nav_menu')){
                                    wp_nav_menu(array(
                                    'theme_location'=>'main-menu'
                                    ));
                                    }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="header-search">
                            <form method="GET" action="<?php echo bloginfo('home'); ?>">
                                <input type="text" name="s" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>