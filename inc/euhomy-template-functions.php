<?php

function euhomy_header_container(){
    ?>
    <div class="col-full">
        <div class="site-logo">
            <a href="/" rel="home"><img class="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/site-logo.png" alt=""></a>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Navigation">
            <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                <div class="mega-menu-toggle">
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
                <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="768" data-unbind="true" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                    <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-megamenu mega-menu-item-252" id="mega-menu-item-252">
                        <a class="mega-menu-link" href="http://local.euhomy.com/shop/" aria-haspopup="true" aria-expanded="false" tabindex="0">Shop<span class="mega-indicator"></span></a>
                        <ul class="mega-sub-menu">
                            <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-columns-1-of-6 mega-menu-item-259" id="mega-menu-item-259">
                                <a class="mega-menu-link" href="http://local.euhomy.com/product-category/ice-maker/">Ice Maker<span class="mega-indicator"></span></a>
                                <ul class="mega-sub-menu">
                                    <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-262" id="mega-menu-item-262">
                                        <a class="mega-menu-link" href="http://local.euhomy.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-columns-1-of-6 mega-menu-item-260" id="mega-menu-item-260">
                                <a class="mega-menu-link" href="http://local.euhomy.com/product-category/upright-freezer/">Upright Freezer</a>
                            </li>
                            <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-columns-1-of-6 mega-menu-item-261" id="mega-menu-item-261">
                                <a class="mega-menu-link" href="http://local.euhomy.com/product-category/compact-refigerator/">Compact Refigerator</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-251" id="mega-menu-item-251">
                        <a class="mega-menu-link" href="http://local.euhomy.com/my-account/" tabindex="0">My account</a>
                    </li>
                    <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-250" id="mega-menu-item-250">
                        <a class="mega-menu-link" href="http://local.euhomy.com/faq/" tabindex="0">FAQ</a>
                    </li>
                    <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-253" id="mega-menu-item-253">
                        <a class="mega-menu-link" href="http://local.euhomy.com/sample-page/" tabindex="0">Sample Page</a>
                    </li>
                </ul>
            </div>
        </nav><!-- #site-navigation -->
        <div class="site-search">
            <div class="widget woocommerce widget_product_search">
                <form role="search" method="get" class="woocommerce-product-search" action="http://local.euhomy.com/">
                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…" value="" name="s">
                    <button type="submit" value="Search">Search</button>
                    <input type="hidden" name="post_type" value="product">
                </form>
            </div>
        </div>
        <ul id="site-header-cart" class="site-header-cart menu">
            <li class="">
                <a class="cart-contents" href="http://local.euhomy.com/cart/" title="View your shopping cart"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span> <span class="count">0 items</span></a>
            </li>
            <li>
                <div class="widget woocommerce widget_shopping_cart">
                    <div class="widget_shopping_cart_content"></div>
                </div>
            </li>
        </ul>
    </div>
        
    <?php
}

