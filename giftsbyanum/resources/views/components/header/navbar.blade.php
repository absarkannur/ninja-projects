<div class="header-search-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">

                        <div class="logo-wrap">
                            <div class="imagethmb" style="text-align: left">
                                <div class="imagethmb_inner">
                                    <img src="{{ asset( 'front-end/images/logo.png' ) }}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-9 col-md-9 col-md-9 col-md-9">
                        <div class="search-wrap">
                            <div class="search-box">
                                <input class="search-input" placeholder="Search Products" type="text" style="width: 100%" />
                                <span class="search-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="nav-wrap">
                            <ul class="header-nav">
                                <li class="nav">
                                    <a class="active" wire:navigate href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav">
                                    <a href="">Personalized Gift</a>
                                </li>
                                <li class="nav">
                                    <a href="">Sale Off</a>
                                </li>
                                <li class="nav">
                                    <a href="">Contact</a>
                                </li>
                                <li class="nav buttons">
                                    <a href="{{ route('home') }}">
                                        <span class="wish-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                            </svg>
                                            <em class="count">99</em>
                                        </span>
                                    </a>
                                    <a href="{{ route('cart') }}">
                                        <span class="carts">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                            </svg>
                                            <em class="count">{{ $cart_count }}</em>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Mobile Screen --}}

