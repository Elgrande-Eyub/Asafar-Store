<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Explore {{ $item->name }} - Pure Moroccan Honey by ASAFAR.US</title>
    <meta name="description" content="Dive into the unique qualities of [Product Name], a masterpiece of Moroccan honey craftsmanship. Experience the essence of Morocco in every golden drop, exclusively from ASAFAR.US.">
</head>
<body class="single single-product">
<header id="header" class="header style-02 header-dark">
   @include('layout.header')
</header>
<div class="banner-wrapper no_background">
    <div class="banner-wrapper-inner">
        <nav class="akasha-breadcrumb"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i><a href="{{ route('shop') }}">Shop</a>
            <i class="fa fa-angle-right"></i>{{ $item->name }}
        </nav>
    </div>
</div>
<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="akasha-notices-wrapper"></div>
                <div id="product-27"
                     class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="akasha-product-gallery akasha-product-gallery--with-images akasha-product-gallery--columns-4 images">
                                    <a href="#" class="akasha-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                             src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                    <div class="flex-viewport">
                                        <figure class="akasha-product-gallery__wrapper">
                                            <div class="akasha-product-gallery__image">
                                                <img alt="img"
                                                   src="{{ asset('storage/' . $item->attachement) }}">
                                            </div>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title">{{ $item->name }}</h1>
                                <p class="price">
                               @if($item->isDiscount)
                                        <span><del><span class="akasha-Price-amount amount">
                                            <span class="akasha-Price-currencySymbol">$</span>{{ number_format($item->price, 2, '.', ',') }}</span></del></span>

                                <span class="akasha-Price-amount amount">
                                    <span  class="akasha-Price-currencySymbol">$</span>{{ number_format($item->compared_price, 2, '.', ',') }}</span>
                               @else
                               <span class="akasha-Price-amount amount">
                                <span  class="akasha-Price-currencySymbol">$</span>{{ number_format($item->price, 2, '.', ',') }}</span>
                                @endif
                            </p>
                                <p class="stock in-stock">
                                    Availability: <span> {{ $item->availability }}</span>
                                </p>
                                <div class="akasha-product-details__short-description">
                                    {{ strip_tags($item->description, '<br>') }}
                                </div>
                                <form class="variations_form cart">
                                    <table class="variations">
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <div class="single_variation_wrap">
                                        <div class="akasha-variation single_variation"></div>
                                        <div class="akasha-variation-add-to-cart variations_button akasha-variation-add-to-cart-disabled">
                                            {{-- <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" data-step="1" min="0" max="" name="quantity[25]" value="1" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div> --}}

                                    <div class="divCart">
                                        <img src="{{ asset('assets/images/icon/shopping-cart.png') }}" style="margin-right: 1rem;" width="25px" alt="">
                                        <a data-productSKU="{{ $item->sku }}" style="width: auto;" class="add-to-cart addtocart">

                                               Add To Cart</a>
                                    </div>



                                         {{--    <div class="add-to-cart">
                                                <a data-productSKU="{{ $item->sku }}" style="cursor: pointer; background-color:#CC980A" class="button product_type_simple add_to_cart_button addtocart">Add to cart</a>
                                            </div> --}}



                                            <input name="add-to-cart" value="27" type="hidden">
                                            <input name="product_id" value="27" type="hidden">
                                            <input name="variation_id" class="variation_id" value="0" type="hidden">
                                        </div>
                                    </div>
                                </form>
                                @include('layout.notification')

                                <div class="clear"></div>

                                <div class="product_meta">
                                    <div class="wcml-dropdown product wcml_currency_switcher">
                                        <ul>
                                            <li class="wcml-cs-active-currency">
                                                <a class="wcml-cs-item-toggle">USD</a>
                                                <ul class="wcml-cs-submenu">
                                                    <li>
                                                        <a>EUR</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="sku_wrapper">SKU: <span class="sku">{{ $item->sku }}</span></span>
                                    <span class="posted_in">Categories:

                                            <a href="#" rel="tag">{{ $item->category->name }}</a>

                                        </span>

                                </div>
                                <div class="akasha-share-socials">
                                    <h5 class="social-heading">Share: </h5>
                                    <a target="_blank" class="facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="twitter"
                                       href="#"><i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" class="pinterest"
                                       href="#"> <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a target="_blank" class="googleplus"
                                       href="#"><i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12 col-sm-12 dreaming_related-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Related Products</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height"
                     data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">

                    @foreach ($products as $product)

                    @if(!$product->isVisible)
                        @continue
                    @endif

                <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="{{ route('single_product', ['sku' => $product->sku])  }}"
                               tabindex="-1">
                                <img class="img-responsive"
                                     src="{{ asset('storage/' . $product->attachement) }}"
                                     alt="Print In White" width="270" height="350">
                            </a>
                            <div class="flash">
                                @if($product->isDiscount)
                                <span class="onsale"><span class="number">-{{ $product->percentage }}%</span></span>
                                @endif

                                <span class="onnew"><span class="text">New</span></span></div>
                            <div class="group-button">

                               <div class="add-to-cart">
                                   <a data-productSKU="{{ $product->sku }}" style="cursor: pointer; background-color:#CC980A" class="button product_type_simple add_to_cart_button addtocart"></a>
                               </div>
                            </div>
                        </div>
                        <div class="product-info equal-elem">
                            <h3 class="product-name product_title">
                                <a href="#" tabindex="-1">{{ $product->name }}</a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                                    @if($product->isDiscount)
                                    <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">$</span>{{ number_format($product->price, 2, '.', ',') }}</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">$</span>{{ number_format($product->compared_price, 2, '.', ',') }}</span></ins>
                                    </span>

                                    @else
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">$</span>{{ number_format($product->price, 2, '.', ',') }}</span></span>
                                    @endif
                        </div>
                    </div>
                </div>

                @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@include('layout.footer')
@include('layout.nav-footer')
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@include('layout.js')
</body>

</html>
