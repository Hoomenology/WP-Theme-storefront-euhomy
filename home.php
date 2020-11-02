<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <section class="banner">
            <div class="background relative">
                <img class="w-full" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index-banner.png" alt="">
                <div class="w-full h-full absolute top-0 left-0 flex items-center">
                    <div class="container">
                        <div class="flex flex-col justify-center w-1/3 bg-white p-8 bg-opacity-25 rounded-20">
                            <p class="text-xxl font-bold">“</p>
                            <p class="font-bold">Euhomy is recommended by my very good friend who has been repairing appliances for over 25 years.</p>
                            <p class="my-3 text-blue-0 italic">– Michael A. Outen</p>
                            <a href="" class="text-white bg-orange-600 w-1/2 text-center p-2 my-3 rounded-3" >SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue-100 h-40 flex flex-col items-center justify-center">
                <p class="text-blue-900 text-2xl">Small Appliances of Big Happiness</p>
                <p class="text-blue-0 text-lg">Create inspiring home appliances for your next convenience</p>
            </div>
        </section>

        <section class="best-seller">
            <div class="container">
                <p>BEST SELLERS</p>
                <div class="product-list">
                    <div class="product-item">
                        
                    </div>
                </div>
            </div>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
