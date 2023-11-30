<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Discover ASAFAR.US - Authentic Moroccan Honey Products</title>
    <meta name="description" content="Indulge in the rich flavors of pure Moroccan honey. Explore our exquisite collection, crafted with tradition and care. Elevate your taste with ASAFAR.US.">
</head>
<body>
    <header id="header" class="header style-02 header-dark header-transparent header-sticky">
        @include('layout.header')
     </header>

<div class="fullwidth-template">
    <div class="slide-home-01">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <div class="slide-wrap">
                <img src="assets/images/background/banner.png" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Limited</h5>
                            <h1>TASTY</h1>
                            <h2>& Lovely</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="section-003 section-002">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="akasha-banner style-01 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/background/banner2.png"
                                     class="attachment-full size-full" alt="img"></figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="akasha-banner style-01 right-top">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/background/banner3.png"
                                     class="attachment-full size-full" alt="img"></figure>

                        </div>
                    </div>
                    <div class="akasha-banner style-01 left-bottom">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/background/banner4.png"
                                     class="attachment-full size-full" alt="img"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">Best Seller</h3>
                </div>
            </div>
            <div class="akasha-products style-02">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">



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
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
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
    <div>
        <div class="akasha-banner style-02 left-center">
            <div class="banner-inner">
                <figure class="banner-thumb">
                    <img src="assets/images/background/back8.png"
                         class="attachment-full size-full" alt="img"></figure>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">New Arrival</h3>

                </div>
            </div>
            <div class="akasha-products style-01">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
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
                                     <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
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


    <div class="" style="margin: 1rem 0rem; padding:4rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="akasha-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-rocket-ship"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Worldwide Delivery</h4>
                                <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                    regions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="akasha-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-padlock"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe Shipping</h4>
                                <div class="desc">Pay with the world’s most popular and secure payment methods.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="akasha-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-recycle"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="akasha-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Shop Confidence</h4>
                                <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                                </div>
                            </div>
                        </div>
                    </div>
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
