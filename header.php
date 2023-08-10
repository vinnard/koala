<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package koala
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'koala' ); ?></a>

    <!--Preloader area start here-->
    <!-- <div id="loader" class="loader orange-color">
		<div class="loader-container">
			<div class='loader-icon'>
				<img src="assets/images/pre-logo1.png" alt="">
			</div>
		</div>
	</div> -->
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">
        <!--Full width header Start-->
        <div class="full-width-header home8-style4 main-home">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part">
                                        <a href="index.html">
                                            <img class="normal-logo"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/lite-logo.png"
                                                 alt="">
                                            <img class="sticky-logo"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-logo.png"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>

	                                    <?php
	                                    wp_nav_menu( [
		                                    'theme_location'  => 'header',
		                                    'menu'            => '',
		                                    'container'       => 'nav',
		                                    'container_class' => 'rs-menu rs-menu-close',
		                                    'menu_class'      => 'nav-menu',
		                                    'after'          => '',
		                                    'echo'            => true,
		                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                                    ] );
	                                    ?>
                                    </div> <!-- //.main-menu -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-logo.png"
                                    alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo by
                            the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/1.jpg"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg"
                                        alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/2.jpg"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg"
                                        alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/3.jpg"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg"
                                        alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/4.jpg"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg"
                                        alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/5.jpg"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg"
                                        alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/6.jpg"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/6.jpg"
                                        alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.jpg" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->