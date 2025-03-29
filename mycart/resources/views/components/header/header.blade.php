<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="flex-row col d-flex">
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111</div>
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">contact@bbbootstrap.com</a></div>
                    <div class="ml-auto top_bar_content">

                        @if ( $header_session )
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                <div><a href="javascript:void(0)">{{ $header_session['customer_name'] }}</a></div>
                                <div><a wire:navigate href="{{ route('logout') }}">Logout</a></div>
                            </div>
                        @else
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                <div><a wire:navigate href="{{ route('register') }}">Register</a></div>
                                <div><a wire:navigate href="{{ route('login') }}">Login</a></div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <livewire:navbar />

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="flex-row main_nav_content d-flex">

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
                                <li><a wire:navigate href="{{ route('orders') }}">Orders</a></li>

                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="ml-auto menu_trigger_container">
                            <div class="flex-row menu_trigger d-flex align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>