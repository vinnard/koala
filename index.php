<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package koala
 */

get_header();
?>

    <!-- Slider Section Start -->
    <div class="rs-slider main-home">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
             data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
             data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
             data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
             data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
             data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true"
             data-md-device-dots="false">
            <div class="slider-content slide1">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            Start to learning today
                        </div>
                        <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Online
                            Courses From Leading Experts</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon orange-btn main-home" href="#">Find Courses</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content slide2">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            Start to learning today
                        </div>
                        <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Explore
                            Interests and Career With Courses</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon orange-btn main-home" href="#">Find Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section start -->
        <div id="rs-features" class="rs-features main-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 md-mb-30">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/icon/3.png"
                                     alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark">5,320 online courses</span>
                                </h4>
                                <p class="dese">
                                    Enjoy a variety of fresh topics
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mb-30">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/icon/2.png"
                                     alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark">Expert instruction</span>
                                </h4>
                                <p class="dese">
                                    Find the right instructor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/icon/1.png"
                                     alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark">Lifetime access</span>
                                </h4>
                                <p class="dese">
                                    Learn on your schedule
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section End -->
    </div>
    <!-- Slider Section End -->


    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title3 text-center mb-50">
                <div class="sub-title"> News Update</div>
                <h2 class="title"> Latest News & events</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                 data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                 data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                 data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                 data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                 data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                 data-md-device-nav="false" data-md-device-dots="false">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="blog-item">
                        <div class="image-part">
                            <?php the_post_thumbnail('thumb');?>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user-o"></i> <?php the_author(); ?></li>
                                <li><i class="fa fa-calendar"></i><?php the_time('j F Y');?></li>
                            </ul>
                            <h3 class="title"><a href="blog-single.html"><?php the_title(); ?></a></h3>
                            <div class="desc"><?php the_excerpt();?>
                            </div>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
                                        <li><a href="#">College</a></li>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile; else: ?>
                    No posts
				<?php endif; ?>

            </div>
        </div>
    </div>


    <!-- Blog Section End -->


    <!-- Main content End -->
    <div class="test">Hi</div>
<?php
get_footer();
?>