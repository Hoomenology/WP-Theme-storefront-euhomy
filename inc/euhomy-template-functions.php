<?php

function euhomy_header_container() {
    ?>
    <div class="container tw flex flex-row justify-around ">
        <div class="site-branding mr-3">
            <a href="/" rel="home"><img class="h-24" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/site-logo.png" alt=""></a>
        </div>
        <div class="flex flex-row items-justified-right items-center">
            <nav id="site-navigation" class=" text-white" role="navigation" aria-label="Primary Navigation">
                <div class="mega-menu-toggle hidden">
                    <div class="mega-toggle-blocks-left"></div>
                    <div class="mega-toggle-blocks-center"></div>
                    <div class="mega-toggle-blocks-right">
                        <div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0" id="mega-toggle-block-0">
                            <button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
                                <span class="mega-toggle-animated-box">
                                    <span class="mega-toggle-animated-inner">
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul id="mega-menu-primary" class="">
                    <li class="menu-item float-left mx-4 h-full " id="mega-menu-item-252" onmouseover="menu_link_over(this);">
                        <a class="menu-link" href="http://local.euhomy.com/shop/" aria-haspopup="true" aria-expanded="false" tabindex="0">Shop<span class="mega-indicator"></span></a>
                        <div class="sub-menu hidden z-50 absolute bg-white text-black w-full">
                            <div class="container">
                                <ul class="flex flex-row justify-around my-6">
                                    <li class="menu-item float-left mx-2">
                                        <a class="menu-link uppercase font-bold" href="http://local.euhomy.com/product-category/ice-maker/">
                                            <img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_ice_maker.svg" alt="">
                                            Ice Maker
                                        </a>
                                        <ul class="sub-menu ml-12">
                                            <li class="mb-3">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item float-left mx-2">
                                        <a class="menu-link uppercase font-bold" href="http://local.euhomy.com/product-category/upright-freezer/"><img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_upright_freezer.svg" alt="">Upright Freezer</a>
                                        <ul class="sub-menu ml-12">
                                            <li class="mb-3">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item float-left mx-2">
                                        <a class="menu-link uppercase font-bold" href="http://local.euhomy.com/product-category/compact-refigerator/"><img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_mini_fridge.svg" alt="">Compact Refigerator</a>
                                            <ul class="sub-menu ml-12">
                                            <li class="mb-3" id="mega-menu-item-262">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                            </li>
                                            <li class="mb-3" id="mega-menu-item-262">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                            </li>
                                            <li class="mb-3" id="mega-menu-item-262">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item float-left mx-2">
                                        <a class="menu-link uppercase font-bold" href="http://local.euhomy.com/product-category/accessories/"><img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_part.svg" alt="">Accessories</a>
                                            <ul class="sub-menu ml-12">
                                            <li class="mb-3" id="mega-menu-item-262">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                            </li>
                                            <li class="mb-3" id="mega-menu-item-262">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                            </li>
                                            <li class="mb-3" id="mega-menu-item-262">
                                                <a class="menu-link" href="http://local.euhomy.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item float-left mx-4 h-full" id="mega-menu-item-251">
                        <a class="menu-link" href="http://local.euhomy.com/" tabindex="0">Why Euhomy</a>
                    </li>
                    <li class="menu-item float-left mx-4 h-full" id="mega-menu-item-250">
                        <a class="menu-link" href="http://local.euhomy.com/" tabindex="0">Product Support</a>
                    </li>
                    <li class="menu-item float-left mx-4 h-full" id="mega-menu-item-253">
                        <a class="menu-link" href="http://local.euhomy.com/" tabindex="0">Inspiration</a>
                    </li>
                </ul>
            </nav>
            <!-- #site-navigation -->
            <div class="site-search mx-6">
                <form role="search" method="get" class="" action="http://local.euhomy.com/">
                    <label for="search-field" class="relative">
                        <input type="search" id="search-field" class="bg-white border rounded-full px-5 w-48 h-6 py-2 " placeholder="Search" value="" name="s">
                        <img class="w-5 h-5 absolute top-0 right-0 mr-3" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/search.svg" alt="">
                    </label>
                    <button type="submit" value="Search" class="hidden">Search</button>
                    <input type="hidden" name="post_type" value="product">
                </form>
            </div>
            <div class="w-24 flex flex-row ">
                <a href="/my-account" class="mx-2">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/account-white.svg" class="h-8 w-8" alt="">
                </a>
                <a href="/cart" class="ml-2">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cart-white.svg" class="h-8 w-8" alt="">
                </a>
            </div>
        </div>
    </div>
        
    <?php
}

function euhomy_footer_container() {
    ?>
    <div>
        <div class="site-map">
            <ul class="flex flex-row justify-around my-6">
                <li class="map-item w-full">
                    <p class="font-bold my-4">SUPPORT</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/faq/">FAQ</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Product Warranty Activation</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Payment Options</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Shipping & Delivery</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Return & Refunds</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="map-item w-full">
                    <p class="font-bold my-4">ACCOUNT</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/faq/">Sign In</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Update Password</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Order Status</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Terms & Conditions</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Privacy Policy</a>
                        </li>
                    </ul>
                </li>
                <li class="map-item w-full">
                    <p class="font-bold my-4">Euhomy</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/faq/">About Us</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Our Responsibility</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Product Certification</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Business Partnership</a>
                        </li>
                    </ul>
                </li>
                <li class="map-item w-full">
                    <p class="font-bold my-4">RESOURCE</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/faq/">Coupons</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">News and Blog</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Euhomy Video</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Manuals </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="">

        </div>
        <div class="site-info text-center text-gray-700 w-full border-t border-gray-300 pt-3 pb-2">
            © 2020 Euhomy. All rights reserved.
        </div>
    </div>

    <?php
}