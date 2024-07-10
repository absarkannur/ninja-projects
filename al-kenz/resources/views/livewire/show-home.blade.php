<div>
    <section class="ak-container ak-banner" 
        style="background-image: url('{{ asset( 'kenz-assets/assets/images/banner-1.png' )  }}')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 flex-center">
                    
                    <div class="banner-content">
                        <h4>Al Kenz Pharmaceuticals</h4>
                        <h1>A Renowned Pharmaceutical Enterprise</h1>
                        <p id="triggerCountAnim">Dedicated to advancing global healthcare. With a legacy spanning over two decades, we boast a distinguished team committed to excellence.</p>

                        <div class="button-group">
                            <div>
                                <a href="{{route('about')}}">
                                    <button class="ak-invr-btn p-l-10 center">
                                        LEARN MORE
                                        <img src={{asset("kenz-assets/assets/icons/arrow.svg")}} alt="">
                                    </button>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('products')}}">
                                    <button class="ak-dft-btn p-l-10 center">
                                        OUR PRODUCTS
                                        <img src={{asset("kenz-assets/assets/icons/arrow-w.svg")}} alt="">
                                    </button>
                                </a>
                            </div>
                        </div>
                    
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">&nbsp;</div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-counter">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <ul class="counter-list">
                        <li class="item">
                            <h3><span id="num1">0</span></h3>
                            <p>YEARS OF EXPERIENCE</p>
                        </li>
                        <li class="item">
                            <h3><span id="num2">0</span>+</h3>
                            <p>TEAM MEMBERS</p>
                        </li>
                        <li class="item">
                            <h3><span id="num3">0</span>+</h3>
                            <p>PRODUCTS</p>
                        </li>
                        <li class="item">
                            <h3><span id="num4">0</span></h3>
                            <p>MARKETS</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <span class="news-head">NEWS</span>
                    <marquee
                        id="news"
                        class="news-list" 
                        scrollamount="10" behavior="scroll" 
                        direction="left">
                        @foreach( $news as $n )
                        {{ $n->news }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @endforeach
                    </marquee>

                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-aboutus flex-center" id="aboutus">

        <img class="banner" src={{ asset("kenz-assets/assets/images/whoarewe.png") }} alt="">
        
        <div class="box">
            <h3>WHO ARE WE</h3>
            <p>As proud partners with world-leading manufacturers, we ensure access to essential, high-quality medicines, contributing to the betterment of human health worldwide.</p>
            <a href="{{route('about')}}">
                <button class="ak-dft-btn">
                    LEARN MORE
                    <img src={{ asset( "kenz-assets/assets/icons/arrow-w.svg" ) }} rel="prefetch" alt="">
                </button>
            </a>
        </div>


    </section>

    <section class="ak-container ak-products" id="products">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <h2>FIND YOUR PRODUCT</h2>

                    <ul class="products-list">
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/images/p-item-1.png") }} rel="prefetch" alt="">
                            <a href="products/medication.php">
                                <span class="text">Medication</span>
                            </a>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/images/p-item-2.png") }} rel="prefetch" alt="">
                            <a href="products/food-supplements.php">
                                <span class="text">Food Supplement</span>
                            </a>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/images/p-item-3.png") }} rel="prefetch" alt="">
                            <a href="products/medical-equipment.php">
                                <span class="text">Medical Equipment</span>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>

    </section>

    <section class="ak-container ak-heritage" id="heritage">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <h2>OUR HERITAGE</h2>
                    <h3>Al Kenz Pharmaceuticals has been at the forefront of healthcare innovation and advancement.</h3>
                    
                    <p>Since our inception, we have upheld a steadfast commitment to enhancing the well-being of communities globally. Our journey is marked by a legacy of excellence, driven by a passionate team dedicated to shaping the future of pharmaceuticals.</p>
                    
                    <p>Over the years, we have forged enduring partnerships, cultivated expertise, and navigated dynamic landscapes, all while remaining unwavering in our mission to provide access to life-saving medications.</p>

                    <button class="ak-invr-btn p-l-10 center">
                        LEARN MORE
                        <img src={{asset("kenz-assets/assets/icons/arrow.svg")}} alt="">
                    </button>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    
                    <div class="content-box">
                        <img rel="prefetch" src={{ asset("kenz-assets/assets/images/heritage.png") }} alt="">
                        <span class="exp-count"><span id="num-heritage">0</span>+</span>
                        <span class="exp-text">YEARS OF PRESTIGIOUS EXPERIENCE</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-teams" id="teams">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h2>MEET OUR TEAM</h2>
                    <h3>Dedicated professionals committed to your health and wellbeing</h3>

                    <div>&nbsp;</div>

                    @if( $teams_a->isNotEmpty() )
                    <ul class="teams-list">
                        @foreach( $teams_a as $team )
                        <li class="item">
                            <img src={{ asset("storage/" . $team->image ) }} class="pic" alt="" />
                            <span class="name">{{ $team->name }}</span>
                            <span class="designation">{{ $team->designation }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    @if( $teams_b->isNotEmpty() )
                    <ul class="teams-list mob">
                        @foreach( $teams_b as $team )
                        <li class="item">
                            <img src={{ asset("storage/" . $team->image ) }} class="pic" alt="" />
                            <span class="name">{{ $team->name }}</span>
                            <span class="designation">{{ $team->designation }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    @if( $teams_c->isNotEmpty() )
                    <ul class="teams-list mob">
                        @foreach( $teams_c as $team )
                        <li class="item">
                            <img src={{ asset("storage/" . $team->image ) }} class="pic" alt="" />
                            <span class="name">{{ $team->name }}</span>
                            <span class="designation">{{ $team->designation }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    @if( $teams_d->isNotEmpty() )
                    <ul class="teams-list mob">
                        @foreach( $teams_d as $team )
                        <li class="item">

                            @if( $team->image != '' )
                            <img src={{ asset("storage/" . $team->image ) }} class="pic" alt="" />
                            @endif
                            <span class="name">{{ $team->name }}</span>
                            <span class="designation">{{ $team->designation }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-services desktop" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <ul class="service-list js_accordion_desk">
                        @foreach( $services as $service )
                        <li class="item active"><span>{{ $service->title }}</span></li>
                        @endforeach
                    </ul>

                    <a href="{{route('services')}}">
                        <button class="ak-dft-btn p-l-10 center service_link">
                            OUR SERVICES
                            <img src={{ asset("kenz-assets/assets/icons/arrow-w.svg") }} alt="">
                        </button>
                    </a>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <ul class="service-details js_accordion_details_desk">
                        @foreach( $services as $service )
                        <li class="item">
                            <h2 class="animate__animated animate__fadeIn">OUR SERVICES</h2>
                            <h3 class="animate__animated animate__fadeIn">{{ $service->short_description }}</h3>
                            <img rel="prefetch" class="animate__animated animate__fadeIn" src={{ asset( "storage/" . $service->thumbnail ) }} alt="">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-services mobile" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h2 class="animate__animated animate__fadeIn">OUR SERVICES</h2>

                    <ul class="service-list js_accordion_mobile">
                        <li class="item">
                            <div class="header">Market Research</div>
                            <div class="content">

                                
                                <h3 class="animate__animated animate__fadeIn">We provide comprehensive market research to ensure informed decision-making and success in the U.A.E. market.</h3>
                                <img rel="prefetch" class="animate__animated animate__fadeIn" src={{asset("kenz-assets/assets/services/banner-market-research.jpeg")}} alt="">

                            </div>
                        </li>
                        <li class="item">
                            <div class="header">Registration of Products</div>
                            <div class="content">

                                <h3 class="animate__animated animate__fadeIn">We ensure seamless registration and regulatory compliance for a wide range of essential healthcare products.</h3>
                                <img rel="prefetch" class="animate__animated animate__fadeIn" src={{asset("kenz-assets/assets/services/banner-registration-of-products.jpeg")}} alt="">

                            </div>
                        </li>
                        <li class="item">
                            <div class="header">Third party manufacturing</div>
                            <div class="content">

                                <h3 class="animate__animated animate__fadeIn">We specialize in custom manufacturing and strategic collaborations to bring high-quality pharmaceutical products to the MENA region</h3>
                                <img rel="prefetch" class="animate__animated animate__fadeIn" src={{ asset("kenz-assets/assets/services/banner-third-party-manufacturing.jpeg") }} alt="">

                            </div>
                        </li>
                        <li class="item">
                            <div class="header">Import export</div>
                            <div class="content active">

                                <h3 class="animate__animated animate__fadeIn">We expertly manage the entire import and export process to ensure seamless and efficient delivery of pharmaceutical products.</h3>
                                <img rel="prefetch" class="animate__animated animate__fadeIn" src={{asset("kenz-assets/assets/services/banner-import-export.jpeg")}} alt="">

                            </div>
                        </li>
                        <li class="item">
                            <div class="header">distribution</div>
                            <div class="content">

                                <h3 class="animate__animated animate__fadeIn">We serve diverse healthcare customers, ensuring comprehensive pharmaceutical care across communities.</h3>
                                <img rel="prefetch" class="animate__animated animate__fadeIn" src={{asset("kenz-assets/assets/services/banner-distribution.jpeg")}} alt="">

                            </div>
                        </li>
                        <li class="item">
                            <div class="header">Marketing</div>
                            <div class="content">

                                <h3 class="animate__animated animate__fadeIn">We are one of the very few scientific offices licensed in the U.A.E. to perform custom manufacturing.</h3>
                                <img rel="prefetch" class="animate__animated animate__fadeIn" src={{asset("kenz-assets/assets/services/banner-marketing.jpeg")}} alt="">

                            </div>
                        </li>
                    </ul>

                    <a href="{{route('services')}}"></a>
                        <button class="ak-dft-btn p-l-10 center service_link">
                            OUR SERVICES
                        </button>
                    <img src="./assets/icons/arrow-w.svg" alt="">

                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-partners" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="flex-center">
                        <h2>OUR PARTNERS</h2>
                    </div>

                    <ul class="partners-list owl-carousel owl-theme js_partners">
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-18.png") }} alt="1"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-19.png") }} alt="2"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-20.png") }} alt="3"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-21.png") }} alt="4"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-22.png") }} alt="5"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-95.png") }} alt="6"/>
                        </li>
                        <li class="item">
                            <img src ={{asset("kenz-assets/assets/partners/Group-100.png") }} alt="7"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-99.png") }} alt="8"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-98.png") }} alt="9"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-97.png") }} alt="10"/>
                        </li>
                        <li class="item">
                            <img src={{ asset("kenz-assets/assets/partners/Group-96.png") }} alt="11"/>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-insigts">

        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2>NEWS & INSIGHTS</h2>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="nav-group">
                        <span class="prev js_prev">
                            <img src={{asset("kenz-assets/assets/icons/prev.svg")}} alt="">
                        </span>
                        <span class="next js_next">
                            <img src={{asset("kenz-assets/assets/icons/next.svg")}} alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="insight-list owl-carousel owl-theme">
                        <li class="item">
                            <span class="date">09-June-2024</span>
                            <img rel="prefetch" class="pic" src={{asset("kenz-assets/assets/images/image-13-740x600.png")}} alt="">
                            <div class="text">Patient-Centered Medication Labs Start</div>

                            <div class="user">
                                <img src={{asset("kenz-assets/assets/icons/user.svg")}} alt="">
                                <span>Al Kenz Pharma</span>
                            </div>
                            
                            <div class="link">
                                <a href="">read more</a>
                                <img src={{asset("kenz-assets/assets/icons/arrow.svg")}} alt="">
                            </div>

                        </li>

                        <li class="item">
                            <span class="date">09-June-2024</span>
                            <img rel="prefetch" class="pic" src={{asset("kenz-assets/assets/images/image-7-740x600.png")}} alt="">
                            <div class="text">5 Nutrients To Help Manage Eczema</div>

                            <div class="user">
                                <img src={{asset("kenz-assets/assets/icons/user.svg")}} alt="">
                                <span>Al Kenz Pharma</span>
                            </div>

                            <div class="link">
                                <a href="">read more</a>
                                <img src={{asset("kenz-assets/assets/icons/arrow.svg")}} alt="">
                            </div>

                        </li>

                        <li class="item">
                            <span class="date">09-June-2024</span>
                            <img rel="prefetch" class="pic" src={{asset("kenz-assets/assets/images/image-about-740x600.png")}} alt="">
                            <div class="text">An important message from Al Kenz pharmaceuticals CEO</div>

                            <div class="user">
                                <img src={{asset("kenz-assets/assets/icons/user.svg")}} alt="">
                                <span>Al Kenz Pharma</span>
                            </div>

                            <div class="link">
                                <a href="">read more</a>
                                <img src={{asset("kenz-assets/assets/icons/arrow.svg")}} alt="">
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </section>

    <section class="ak-container ak-markets">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>MARKETS AND DISTRIBUTION</h2>
                    <p>Dedicated professionals committed to your health and wellbeing</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="markets-list">
                        <li class="item">USA</li>
                        <li class="item">Canada</li>
                        <li class="item">Saudi Arabia</li>
                        <li class="item">India</li>
                        <li class="item">UAE</li>
                        <li class="item">Italy</li>
                        <li class="item">Lativa</li>
                        <li class="item">China</li>
                        <li class="item">Iraq</li>
                        <li class="item">Pakistan</li>
                        <li class="item">Kuwait</li>
                        <li class="item">Morocco</li>
                        <li class="item">Libya</li>
                        <li class="item">Oman</li>
                        <li class="item">Yemen</li>
                        <li class="item">Russia</li>
                        <li class="item">Armenia</li>
                        <li class="item">Azerbaijan</li>
                        <li class="item">Belarus</li>
                        <li class="item">Kazakhstan</li>
                        <li class="item">Kyrgyzstan</li>
                        <li class="item">Moldova</li>
                        <li class="item">Tajikistan</li>
                        <li class="item">Uzbekistan</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img class="market-pic" src={{ asset("kenz-assets/assets/images/market.svg") }} alt="">
                </div>
            </div>
        </div>
    </section>


</div>