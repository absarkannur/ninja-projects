<div class="header_main">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="order-1 col-lg-2 col-sm-3 col-3">
                <div class="logo_container">
                    <div class="logo"><a href="#">MyCart</a></div>
                </div>
            </div>

            <!-- Search -->
            <div class="order-3 text-right col-lg-6 col-12 order-lg-2 text-lg-left">
                <div class="header_search">
                    <div class="header_search_content">
                        <div class="header_search_form_container">
                            <form action="#" class="clearfix header_search_form">
                                <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                {{-- <div class="custom_dropdown" style="display: block;">
                                    <div class="custom_dropdown_list">
                                        <span class="custom_dropdown_placeholder clc">All Categories</span>
                                        <i class="fas fa-chevron-down"></i>
                                        <ul class="custom_list clc">
                                            <li><a class="clc" href="#">All Categories</a></li>
                                            <li><a class="clc" href="#">Computers</a></li>
                                            <li><a class="clc" href="#">Laptops</a></li>
                                            <li><a class="clc" href="#">Cameras</a></li>
                                            <li><a class="clc" href="#">Hardware</a></li>
                                            <li><a class="clc" href="#">Smartphones</a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="order-2 text-right col-lg-4 col-9 order-lg-3 text-lg-left">
                <div class="flex-row wishlist_cart d-flex align-items-center justify-content-end">
                    <div class="flex-row wishlist d-flex align-items-center justify-content-end">
                        <div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                        <div class="wishlist_content">
                            <div class="wishlist_text"><a href="#">Wishlist</a></div>
                            <div class="wishlist_count">0</div>
                        </div>
                    </div>

                    <!-- Cart -->
                    <div class="cart">
                        <a wire:navigate href="{{ route('payment') }}">
                            <div class="flex-row cart_container d-flex align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                    <div class="cart_count"><span>{{ $cart_count }}</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="#">Cart</a></div>
                                    <div class="cart_price">AED {{ $cart_total }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>