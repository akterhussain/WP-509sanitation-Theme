<?php get_header(); ?>

   <!-- Breadcrumb Section Start-->
   <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
   <!-- Breadcrumb Section End-->

    <section class="single-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php if(have_posts()) : 
                        while(have_posts()) : the_post();
                    ?>
                    <div class="single-blog-content">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <div class="blog-tag">
                            <?php the_tags( ' ', ', ', '<br />' ); ?>
                        </div>
                        
                        <div class="admin-comment">

                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
                            <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('nicename'));?>"><?php the_author(); ?></a></span>
                            <p><?php the_author_meta('description'); ?></p>

                        </div>

                        
                        <?php
                            if(comments_open() || comments_number() ) :
                            comments_template(); 
                            endif;
                        ?>
                    </div>
                    <?php endwhile;
                        endif;
                        wp_reset_postdata();
                     ?>
                </div>
            

                <div class="col-lg-4">
                    <div class="single-sideabar">
                        <!-- <div class="single-blog-desc">
                            <h2>Categoryes</h2>
                            <ul>
                                <li><a href="#">Cleaning</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Cleaning</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Cleaning</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                        </div>
 -->                        <?php echo dynamic_sidebar('footer-5'); ?>
                        <div class="single-recent-project">
                            <!-- <h2>Project</h2>
                            <img src="img/blog/blog.jpg">
                            <img src="img/blog/blog.jpg">
                            <img src="img/blog/blog.jpg">
                            <img src="img/blog/blog.jpg">
                            <img src="img/blog/blog.jpg">
                            <img src="img/blog/blog.jpg"> -->
                            <?php echo dynamic_sidebar('footer-6'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>