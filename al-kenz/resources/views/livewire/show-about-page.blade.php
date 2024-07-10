<div>
    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>About Us</h1>
                    <ul>
                        <li><a wire:navigate href="{{ route('home') }}">Home</a> &gt;</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-aboutus-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="slider">

                        <div class="owl-carousel owl-theme js_about_slider">
                            <img src={{ asset("kenz-assets/assets/images/about-banner-1.png") }} alt="" />
                            <img src={{ asset("kenz-assets/assets/images/about-banner-1.png") }} alt="" />
                        </div>
    
                        <div class="nav-group">
                            <span class="prev js_prev">
                                <img src={{ asset("kenz-assets/assets/icons/prev.svg") }} alt="">
                            </span>
                            <span class="next js_next">
                                <img src={{ asset("kenz-assets/assets/icons/next.svg") }} alt="">
                            </span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-aboutus-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Al Kenz Pharmaceuticals</h2>
                    <p>At Al Kenz Pharmaceuticals, we specialize in various aspects of the pharmaceutical industry, including distribution, marketing, registration, import-export, and wholesaling of essential medications.</p>
                    <p>Leveraging our expertise and strategic collaborations with leading manufacturers, we ensure the availability of high-quality, life-saving medicines worldwide. Our comprehensive approach and dedication to excellence drive our efforts to improve healthcare accessibility and enhance the quality of life for individuals across the globe</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-aboutus-view flex-center">

        <img class="banner" src={{ asset("kenz-assets/assets/images/abt-content-bg.png") }} alt="">

        <div class="box">
            <h3>OUR MISSION</h3>
            <p>Pioneering accessible healthcare through strategic partnerships and pharmaceutical excellence.</p>

            <h3>OUR VISION</h3>
            <p>At Al Kenz Pharmaceuticals, we aspire to redefine the standards of healthcare accessibility, shaping a future where every individual has equitable access to essential medications</p>

        </div>

    </section>
    
    <section class="ak-container ak-aboutus-values">

        <div class="logo">
            <img src={{ asset( "kenz-assets/assets/round-logo.svg" ) }} alt="">
            <h2>COMPANY VALUES</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="value-list fr br pdr" style="text-align: right;color: white;">
                        <h4>Integrity</h4>
                        <p>Upholding honesty, transparency, and ethical practices in all our endeavors.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="value-list fl br pdl" style="text-align: left;color: white;">
                        <h4>Collaboration</h4>
                        <p>Embracing teamwork, respect, and diversity to achieve collective success and maximize impact.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="value-list fr br-m pdr" style="text-align: right;color: white;">
                        <h4>Innovation</h4>
                        <p>Fostering a culture of continuous improvement, creativity, and forward-thinking to drive positive change.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="value-list fl br-m pdl" style="text-align: left;color: white;">
                        <h4>Excellence</h4>
                        <p>Striving for the highest standards of quality, reliability, and efficiency ensuring the best outcomes for our stakeholders.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
