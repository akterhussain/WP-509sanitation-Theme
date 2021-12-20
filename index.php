<?php get_header(); ?>

<?php 

/*
Template Name:Home Page
*/

?>
    <!--Start Slider-->
    <section class="home-slider">
    <?php
        $slideritems = new WP_Query(array(
        'post_type'=>'banner',
        'posts_per_page'=>1,
        ));
    ?>
    <?php while($slideritems->have_posts()) : $slideritems->the_post(); ?>
        <?php 
            $slider_link = get_post_meta($post-> ID, '_promotions_slider_link', true);
            $slider_text = get_post_meta($post-> ID, '_promotions_slider_text', true);
        ?>
        <div style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="slider-area" id="home" >
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 col-md-6 offset-md-3">
                     <div class="slider-description">
                         <h2 class="cd-headline clip is-full-width"><?php the_title(); ?></h2>
                         <?php the_excerpt(); ?>
                         <a href="<?php echo $slider_link; ?>" class="read_more"><?php echo $slider_text; ?></a>
                     </div>
                     </div>
                </div>
            </div>
        </div> 
    <?php endwhile; ?> 
    </section>
    <!-- End Slider -->
    <!-- Start Promotion -->
    <section class="promotion-area section-padding">
        <div class="container">
            <div class="row">


                <?php 
                    $promotion = new WP_Query(array(
                        'post_type'   =>'promotion',
                        'posts_per_page'=>3
                    ));
                ?>
                <?php while($promotion->have_posts()) : $promotion->the_post(); ?>

                <?php 
                    $promotion_time = get_post_meta($post-> ID, '_promotions_promotion_time', true);

                    $promotion_icon = get_post_meta($post-> ID, '_promotions_promotion_icon', true);
                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xm-12 text-center">
                    <div class="single-promotion wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <i class="<?php echo $promotion_icon;?>"></i>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?>
                           
                            <span><?php echo $promotion_time; ?></span>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!--End Promotions-->
    <!-- Start About -->
    <section id="about" class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
                    <div class="about-heading">
                        <h2><?php echo cs_get_option('fields-26'); ?></h2>
                        <p><?php echo cs_get_option('fields-26.1'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-left wow fadeInLeft">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields-3','about'),'full')[0];?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-right wow fadeInRight">
                        <h2><?php echo cs_get_option('fields-1');?></h2>
                        <p><?php echo cs_get_option('fields-2'); ?></p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Service -->
    <section id="service" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="about-heading">
                        <h2><?php echo cs_get_option('fields-26.2'); ?></h2>
                        <p><?php echo cs_get_option('fields-26.3'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $service = new WP_Query(array(
                'post_type' =>'service',
                'posts_per_page'=>-1
                ));
                ?>
                <?php while($service->have_posts()) : $service->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center wow fadeInLeft">
                <?php if ( has_post_thumbnail()) the_post_thumbnail('service'); ?>
                        <h2><?php the_title(); ?></h2>
                         <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>   
    </section>
    <!-- End Service -->
    
    
	<?php 
        $feature = new WP_Query(array(
            'post_type'   =>'feature',
            'posts_per_page'=>3
        ));
    ?>
    <?php while($feature->have_posts()) : $feature->the_post(); ?>
                
    <section class="service-bg-area" id="order_area">
        <div class="slider-wrapper text-center" style="background-image: url(<?php the_post_thumbnail_url('feature');?>)">
            <div class="slider-description wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                <h2><?php echo cs_get_option('fields-26.4'); ?></h2>
                <p class="service-para"><?php echo cs_get_option('fields-26.5'); ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="144" title="Request A Callback"]'); ?>
                    
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!--Start Chose -->
    <section id="project" class="why-chose-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="about-heading">
                        <h2><?php echo cs_get_option('fields-26.6'); ?></h2>
                        <p><?php echo cs_get_option('fields-26.7'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="chose-reason-single">
                        <div class="chose-desc display-none">
                         <div class="icon_area">
                                <i class="<?php echo cs_get_option('fields-19'); ?>"></i>
                            </div>
                            <div class="reason-title">
                                <h4><?php echo cs_get_option('fields-20'); ?></h4>
                                <p><?php echo cs_get_option('fields-21'); ?></p>
                            </div>
                        </div>
                        <div class="chose-desc">
                         <div class="icon_area">
                            <i class="<?php echo cs_get_option('fields-22'); ?>"></i>
                         </div>
                            <div class="reason-title">
                                <h4><?php echo cs_get_option('fields-23'); ?></h4>
                                <p><?php echo cs_get_option('fields-24'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="chose-image">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields-25'))[0];?>">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="chose-reason-single">
                        <div class="chose-desc display-none">
                            <div class="icon_area">
                            <i class="<?php echo cs_get_option('fields-25.1'); ?>"></i>
                            </div>
                            <div class="reason-title">
                                <h4><?php echo cs_get_option('fields-25.2'); ?></h4>
                                <p><?php echo cs_get_option('fields-25.3'); ?></p>
                            </div>
                        </div>
                        <div class="chose-desc">
                          <div class="icon_area">
                                <i class="<?php echo cs_get_option('fields-25.4'); ?>"></i>
                            </div>
                            <div class="reason-title">
                                <h4><?php echo cs_get_option('fields-25.5'); ?></h4>
                                <p><?php echo cs_get_option('fields-25.6'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Chose -->
    <section id="gallery" class="choose-area-bg section-padding" style="background-image: url(img/choose-bg.jpg);">
        <div class="container">
            <div class="row">
                <?php 
                    $counter = new WP_Query(array(
                        'post_type'   =>'counter',
                        'posts_per_page'=>4
                    ));
                ?>
                <?php while($counter->have_posts()) : $counter->the_post(); ?>
                <?php 
                    $counter_icons = get_post_meta($post-> ID, '_promotions_counter_icons', true);
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter text-center">
                        <i class="<?php echo $counter_icons;?>"></i>
                        <h4 class="counter"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="about-heading">
                        <h2><?php echo cs_get_option('fields-26.8'); ?></h2>
                        <p><?php echo cs_get_option('fields-26.9'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php while(have_posts()) : the_post(); ?>

                <div class="col-lg-6 col-md-6">
                    <div class="single-blog wow fadeInLeft">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                        <a class="link-blog" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <!--Subscriptoin Start-->
    <section id="contact" class="subscription-area" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/slide-bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="subscribe-desc wow zoomIn">
                        

                        <?php echo do_shortcode('[contact-form-7 id="178" title="Contact Form"]'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="google_map wow zoomIn">
                        <?php dynamic_sidebar( 'footer-7' );?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Subscriptoin End-->
    
    <?php get_footer(); ?>