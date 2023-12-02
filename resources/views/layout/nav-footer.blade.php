<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="{{ route('index') }}">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">

            <a href="{{ route('shop') }}">
					<span class="icon">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</span>
                Shop
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="{{ route('cart') }}">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							{{ $itemCount }}
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>

    </div>
</div>
