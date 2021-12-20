<!--Footer Start-->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3  col-sm-6">
                        <div class="single-widget wow fadeInLeft">
                            <?php dynamic_sidebar( 'footer-1' );?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-widget wow fadeInLeft">
                            <?php dynamic_sidebar('footer-2');?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-widget wow fadeInLeft">
                            <?php dynamic_sidebar('footer-3');?>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-widget wow fadeInLeft">
                            <?php dynamic_sidebar('footer-4') ;?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">
                           <p> <?php echo cs_get_option('fields-5');?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="paypal">
                            <ul>
                                <li><img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields-15'))[0];?>"></li>
                                <li><img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields-16'))[0];?>"></li>
                                <li><img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields-17'))[0];?>"></li>
                                <li><img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields-18'))[0];?>"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!--Footer End-->
        <!-- JS here -->
        
        
        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/vendor/jquery-1.12.4.min.js"></script>

        
       

        
        

        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/jquery.slicknav.js"></script>

        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/animate-headeline.js"></script>

        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/plugins.js"></script>

        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/wow.js"></script>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo esc_html(get_template_directory_uri());?>/js/main.js"></script>

        
        
<?php wp_footer(); ?>
    </body>
</html>
