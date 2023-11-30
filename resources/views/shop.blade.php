<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Shop Premium Moroccan Honey at ASAFAR.US - Taste Nature's Elegance</title>
    <meta name="description" content="Browse our curated selection of high-quality Moroccan honey. From rare varietals to time-honored classics, ASAFAR.US brings the authentic taste of Morocco to your doorstep.">
</head>
<body>
    <header id="header" class="header style-02 header-dark header-transparent header-sticky">
        @include('layout.header')
     </header>
<div class="banner-wrapper has_background">
    @include('layout.banner')
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Shop</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Shop</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">

                    <form class="akasha-ordering" method="get">
                        <select title="product_cat" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                    <form class="per-page-form">
                        <label>
                            <select class="option-perpage">
                                <option value="12" selected="">
                                    Show 12
                                </option>
                                <option value="5">
                                    Show 05
                                </option>
                                <option value="10">
                                    Show 10
                                </option>
                                <option value="12">
                                    Show 12
                                </option>
                                <option value="15">
                                    Show 15
                                </option>
                                <option value="20">
                                    Show All
                                </option>
                            </select>
                        </label>
                    </form>
                </div>
                <div class="auto-clear equal-container better-height akasha-products">
                    <ul class="row products columns-3">
                        @foreach ($products as $product)

                     @if(!$product->isVisible)
                         @continue
                     @endif
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
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
                        </li>
                        @endforeach

                    </ul>
                </div>
               {{--  <div class="shop-control shop-after-control">
                    <nav class="akasha-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                    <p class="akasha-result-count">Showing 1–12 of 20 results</p>
                </div> --}}
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
