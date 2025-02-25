<main>

    <section class="home-banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h1 class="header">Localized Pharmaceutical Manufacturing & Repackaging in the UAE</h1>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <p class="content-text">Ozon Pharmaceuticals is a UAE-based pharmaceutical manufacturer specializing in the production and repackaging of tablets, capsules, and injectables. With over 20 years of GMP-certified expertise, we support the localization of high-quality medicines, ensuring accessibility and efficiency in the region.</p>

                    <a href="{{ route('about') }}">
                        <div class="button-group">
                            <button class="oz-button-primery p-l-10 center">
                                Learn More
                            </button>
                            <button class="oz-button-primery no-padding p-l-10 center">
                                <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="separator">&nbsp;</div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="banner-box-one">
                        <img src={{ asset("ozon/images/banner-1.svg") }} />
                        <h3 class="header">Our products</h3>
                        <p class="content-text">We manufacture and repackage high-quality medicines in the UAE, ensuring world-class standards with a localized approach.</p>
                        <a href="{{ route('products') . '?filter=Product+Name' }}">
                            <button class="oz-button-lightblue">Explore Products</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="banner-box-two">
                        <div class="box-1">

                            <p class="content-text">More than a</p>
                            <h3 class="header">Year</h3>
                            <p class="content-text">in Business</p>

                            <div class="sec">

                                <svg class="left-sticky-corner" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.269516 35.5V0.5C0.269516 19.83 15.9395 35.5 35.2695 35.5H0.269516Z" fill="#0D83A7"/>
                                </svg>

                                <a href="{{ route('about')}}">
                                    <button class="oz-button-default">Learn More</button>
                                </a>
                            </div>
                        </div>
                        <div class="box-2">
                            <img src={{ asset("ozon/images/banner-3.svg") }} class="desktop-view" />
                            <img src={{ asset("ozon/images/mobile-banner-box.svg") }} class="mobile-view" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="home-facilities-wrapper">

        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">OUR FACILITIES</h2>
                </div>
            </div>
        </div>

        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 class="sub-heading">State-of-the-Art Manufacturing & Repackaging in the UAE</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="carousel-button-group fr">

                        <button class="oz-button-default no-padding js_facility_prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                            </svg>
                        </button>
                        <button class="oz-button-default no-padding js_facility_next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <ul class="facilities owl-carousel">

                        @foreach( $facilities_category as $category )

                            <li class="facility">
                                <a href={{ 'facility/' . $category->facility_category_slug  }}>
                                <div class="icon-group">
                                    <img src={{ asset( "storage/" . $category->facility_category_icon ) }} />
                                </div>
                                <div class="content-group">
                                    <h3 class="header">{{ $category['facility_category_name'] }}</h3>
                                    <p class="content-text">{{ $category['facility_category_description'] }}</p>
                                </div>
                                <div class="button-group">
                                    <button class="oz-button-link no-padding">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"></path>
                                        </svg>
                                    </button>
                                </div>
                                </a>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="home-about-wrapper">

        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">ABOUT US</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="image-wrap">
                        <img src="{{ asset('ozon/images/home-about.png') }}" />

                        <div class="sec">

                            <svg class="right-sticky-corner" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35 35H0C19.33 35 35 19.33 35 0V35Z" fill="white"/>
                            </svg>

                            <svg class="bottom-sticky-corner" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35 35H0C19.33 35 35 19.33 35 0V35Z" fill="white"/>
                            </svg>

                            <div class="video-sec">
                                <span class="title">World class facilities</span>
                                <span class="learnmore">
                                    <a href="{{ route('about') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"></path>
                                        </svg>
                                    </a>
                                </span>
                                <span class="video"></span>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="about-info">
                        <h2 class="header">Pioneering Pharmaceutical Manufacturing & Repackaging in the UAE </h2>
                        <p class="content-text">Ozon Pharma is a newly established pharmaceutical manufacturing and repackaging facility in the UAE, built to meet the highest global standards. With cutting-edge technology and a commitment to quality, we specialize in the production and repackaging of tablets, capsules, and injectables. Our goal is to localize pharmaceutical production, ensuring faster access to high-quality medicines while supporting the region’s healthcare sector.</p>

                        <ul class="about-counter">
                            <li class="list">
                                <span class="count">GMP-Certified</span>
                                <span class="title">Committed to Global Pharmaceutical Standards</span>
                            </li>
                            <li class="list">
                                <span class="count">End-to-End Solutions</span>
                                <span class="title">Manufacturing & Repackaging for Tablets, Capsules & Injectables</span>
                            </li>
                            <li class="list">
                                <span class="count">Supporting UAE’s Healthcare Vision</span>
                                <span class="title">Strengthening Localized Medicine Production</span>
                            </li>
                        </ul>

                        <a href="{{ route('about') }}">
                            <div class="button-group">
                                <button class="oz-button-primery p-l-10 center">
                                    Learn More
                                </button>
                                <button class="oz-button-primery no-padding p-l-10 center">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="home-cherapeutic-categories">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">Therapeutic Categories</h2>
                </div>
            </div>
        </div>

        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 class="sub-heading">Exploration with superior quality healthcare products</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="carousel-button-group fr">

                        <button class="oz-button-default no-padding js_categories_prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                            </svg>
                        </button>
                        <button class="oz-button-default no-padding js_categories_next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="categories owl-carousel">

                        @foreach( $therapeutic_dategories as $category )

                        <li class="category-list">
                            <a href="{{ route('products') . '?filter=Therapeutic+Categories&categories='. $category['therapeutic_category_slug'] }}">
                                <img src="{{ asset( "storage/" . $category->therapeutic_category_image ) }}" alt="">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                    </svg>
                                </span>
                                <button class="button">{{ $category['therapeutic_category_name'] }}</button>
                            </a>
                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="home-blog-wrapper">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">WHATS NEW</h2>
                </div>
            </div>
        </div>

        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 class="sub-heading">Interesting articles about
                        healthcare</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <a href="{{ route('articles') }}">
                        <div class="learnmore-button-group fr">
                            <button class="oz-button-primery p-l-10 center">
                                View All
                            </button>
                            <button class="oz-button-primery no-padding p-l-10 center">
                                <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="blogs _owl-carousel">

                        @foreach ( $articles as $article )

                            <li class="blogs-list">
                                <a href={{ 'article/' . $article->slug  }}>
                                <div class="images">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset( 'storage/' . $article->thumbnail  ) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tags">
                                    <ul class="tags-list">
                                        @foreach ( $article->tags as $tag )
                                            <li class="list">{{ $tag }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="contents">
                                    <h3 class="title">{{ $article->title }}</h3>
                                    <span class="published">By: Ozon Pharma - {{ \Carbon\Carbon::parse( $article->updated_at )->format('d M, Y')  }}</span>
                                </div>
                                </a>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </section>

</main>
