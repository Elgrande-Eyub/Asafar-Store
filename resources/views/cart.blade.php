<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Cart ASAFAR.US - Authentic Moroccan Honey Cart</title>
</head>
<body>
<header id="header" class="header style-02 header-dark">
    @include('layout.header')
</header>
<div class="banner-wrapper has_background">
    @include('layout.banner')
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Cart</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{ route('index') }}"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>
                        <form class="akasha-cart-form">
                            <table class="shop_table shop_table_responsive cart akasha-cart-form__contents"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cart as $item)

                                    <tr class="akasha-cart-form__cart-item cart_item">
                                        <td class="product-remove">
                                            <a
                                               class="remove deleteProduct " style="cursor: pointer"  data-productsku="{{ $item['sku'] }}" aria-label="Remove this item" data-product_id="27"
                                               data-product_sku="885B712">×</a></td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img
                                                    src="{{ asset('storage/' . $item['image']) }}"
                                                    class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                    alt="img" width="600" height="778"></a></td>
                                        <td class="product-name" data-title="Product">
                                            <a href="#">{{ $item['name'] }}</a></td>
                                        <td class="product-price" data-title="Price">
                                            <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span> {{ number_format($item['price'], 2, '.', ',') }} </span></td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">

                                                    <input style="text-align: center;"  type="number" value="{{ $item['qte'] }}" data-productSKU="{{ $item['sku'] }}"  title="Qty" class="input-qty input-text qty text">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span > <span class="totalItem"> {{ number_format($item['price']*$item['qte'], 2, '.', ',') }} </span> </span></td>
                                    </tr>

                                    @endforeach
                                    <script>
                                        $(document).ready(function () {
                                            //update item Quantity
                                        $('.input-qty').on('change', function () {
                                            var input = $(this);
                                            var currentValue = parseInt(input.val(), 10);
                                            var productSku = $(this).data('productsku');

                                            console.log(currentValue);
                                            console.log(productSku);
                                            $.ajax({
                                                type: 'POST',
                                                url: '/update-cart-quantity',
                                                data: {
                                                    productSku: productSku,
                                                    qte: currentValue,
                                                    _token: '{{ csrf_token() }}',
                                                },
                                                success: function (response) {
                                                    var totalElement = input.closest('tr').find('.totalItem');
                                                    totalElement.html(response.updatedTotal);
                                                    console.log(response.overallTotal);
                                                    $('.totalCart').html(response.overallTotal);
                                                },
                                                error: function (error) {
                                                    console.error('Error adding to cart:', error);
                                                }
                                            });
                                          });
                                          //delete from cart
                                          $('.deleteProduct').on('click', function () {

                                            var productSku = $(this).data('productsku');

                                            console.log(productSku);
                                            $.ajax({
                                                type: 'POST',
                                                url: '/delete-from-cart', // Adjust the URL based on your Laravel route
                                                data: {
                                                    productSku: productSku,

                                                    _token: '{{ csrf_token() }}', // Add CSRF token for Laravel
                                                },
                                                success: function (response) {
                                                    console.log(response.message);
                                                    $('#deletedMessage').fadeIn();

                                            setTimeout(function () {
                                                $('#deletedMessage').fadeOut();
                                                location.reload();
                                            }, 1000);

                                                },
                                                error: function (error) {
                                                    console.error('Error adding to cart:', error);
                                                }
                                            });
                                          });
                                    });

                                    </script>


                                 </tbody>
                            </table>
                        </form>


                        @include('layout.notification')

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive" cellspacing="0">
                                    <tbody>

                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">$</span><span class="totalCart">{{ number_format($overallTotal, 2, '.', ',') }}</span></span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="akasha-proceed-to-checkout">
                                    <a   id="proceedToCheckout" style="color: white;cursor: pointer;"
                                       class="checkout-button button alt akasha-forward">
                                        Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    <span>Cross Sell Products</span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height"
                                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">

                                 @foreach ($products as $product)
                                 @if ($loop->iteration > 4)
                                 @break
                             @endif
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
                                                 <a data-productSKU="{{ $product->sku }}" style="cursor: pointer; background-color:#CC980A" class="button product_type_simple add_to_cart_button addtocart">Add to cart</a>
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
        </div>
    </div>
</main>
@include('layout.footer')
@include('layout.nav-footer')
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@include('layout.js')
</body>

<!-- Mirrored from ledthanhdat.vn/html/akasha/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:33:20 GMT -->
</html>
