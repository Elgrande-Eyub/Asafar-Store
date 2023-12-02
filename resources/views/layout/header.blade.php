

 <div class="header-wrap-stick">
    <div class="header-position">
        <div class="header-middle">
            <div class="akasha-menu-wapper"></div>
            <div class="header-middle-inner">
                <div class="header-search-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="header-logo-nav">
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img alt="ASAFAR.US" src="{{ asset('assets/images/brand/logo.png') }}"
                                                  class="logo"></a></div>
                    <div class="box-header-nav menu-nocenter">
                        <ul id="menu-primary-menu"
                            class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
                            <li id="menu-item-230"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="akasha-menu-item-title" title="Home" href="{{ route('index') }}">Home</a>


                            </li>
                            <li id="menu-item-228"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="akasha-menu-item-title" title="Shop"
                                   href="{{ route('shop') }}">Shop</a>


                            </li>

                            <li id="menu-item-996"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="akasha-menu-item-title" title="Blog"
                                   href="{{ route('about') }}">About Us</a>
                            </li>

                            <li id="menu-item-996"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="akasha-menu-item-title" title="Blog"
                                   href="{{ route('contact') }}">Contact Us</a>
                            </li>

                            <li id="menu-item-996"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="akasha-menu-item-title" title="Blog"
                                   href="{{ route('order-tracking') }}">Tracking Order</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            <ul class="wpml-menu">


                            </ul>
                            <div class="header-search akasha-dropdown">
                                <div class="header-search-inner" data-akasha="akasha-dropdown">
                                    <a href="#" class="link-dropdown block-link">
                                        <span class="flaticon-magnifying-glass-1"></span>
                                    </a>
                                </div>
                                <div class="block-search">
                                    <form role="search" method="get"
                                          class="form-search block-search-form akasha-live-search-form">
                                        <div class="form-content search-box results-search">
                                            <div class="inner">
                                                <input autocomplete="off" class="searchfield txt-livesearch input"
                                                       name="s" value="" placeholder="Search here..." type="text">
                                            </div>
                                        </div>
                                        <input name="post_type" value="product" type="hidden">
                                        <input name="taxonomy" value="product_cat" type="hidden">

                                        <button type="submit" class="btn-submit">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </button>
                                    </form><!-- block search -->
                                </div>
                            </div>
                            <div class="akasha-dropdown-close">x</div>

                            <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                                <div class="shopcart-dropdown block-cart-link">
                                    <a class="block-link link-dropdown" href="{{ route('cart') }}">
                                        <span class="flaticon-bag"></span>
                                        <span class="count">{{ $itemCount }}</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-mobile">
    <div class="">
        <div class="block-menu-bar">
            <a class="menu-bar menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="header-search akasha-dropdown">
            <div class="header-search-inner" data-akasha="akasha-dropdown">
                <a href="#" class="link-dropdown block-link">
                    <span class="flaticon-magnifying-glass-1"></span>
                </a>
            </div>
            <div class="block-search">
                <form role="search" method="get"
                      class="form-search block-search-form akasha-live-search-form">
                    <div class="form-content search-box results-search">
                        <div class="inner">
                            <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                   placeholder="Search here..." type="text">
                        </div>
                    </div>
                    <input name="post_type" value="product" type="hidden">
                    <input name="taxonomy" value="product_cat" type="hidden">

                    <button type="submit" class="btn-submit">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </button>
                </form><!-- block search -->
            </div>
        </div>

    </div>
    <div class="header-mobile-mid">
        <div class="header-logo">
            <a href="{{ route('index') }}"><img alt="ASAFAR.US" src="{{ asset('assets/images/brand/logo.png') }}"class="logo"></a>
        </div>
    </div>
    <div class="header-mobile-right">
        <div class="header-control-inner">
            <div class="meta-dreaming">
                <div class="menu-item block-user block-dreaming akasha-dropdown">

                </div>
                <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                    <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                        <a class="block-link link-dropdown" href="{{ route('cart') }}">
                            <span class="flaticon-bag"></span>
                            <span class="count">{{ $itemCount }}</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
