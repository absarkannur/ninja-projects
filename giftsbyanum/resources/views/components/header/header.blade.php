<header class="header">

    <!-- Top Bar -->
    <div class="ga_top_bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <span class="block shipping-info">Free Shipping on Orders Over AED 200</span>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    @if ( $header_session )
                        <div class="top_bar_user">
                            <div class="user_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                </svg>
                            </div>
                            <div class="user_account"><a class="block" href="javascript:void(0)">{{ $header_session['customer_name'] }}</a></div>
                            <div class="user_account no-padding"><a class="block" wire:navigate href="{{ route('logout') }}">Logout</a></div>
                        </div>
                    @else
                        <div class="top_bar_user">
                            <div class="user_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                </svg>
                            </div>
                            <div class="user_account"><a class="block" wire:navigate href="{{ route('register') }}">Register</a></div>
                            <div class="user_account no-padding"><a class="block" wire:navigate href="{{ route('login') }}">Login</a></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Search Section --}}
    <livewire:navbar />

    <x:ui.categories />

</header>
