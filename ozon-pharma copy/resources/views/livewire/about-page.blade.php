<main>

    <x:widgets.banner
        title="About Us"
        breadcrumbs="<a href='/'>Home</a> > About Us"
        image="ozon/images/about-innnerpage.png" />

    <section class="about-info-wrapper">
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
                    <div class="content-wrap">

                        <h2 class="header">World-Class Quality, Efficacy & Excellence</h2>
                        <p class="content-text">
                            Ozon Pharmaceuticals is a cutting-edge pharmaceutical manufacturing company based in the UAE. Established to meet the growing healthcare demands of the Middle East and beyond, we are committed to producing high-quality, innovative medicines that improve lives. Our state-of-the-art facilities, adherence to global standards, and dedication to excellence position us as a trusted partner in the healthcare industry.
                        </p>
                        <p class="content-text">
                            At Ozon Pharmaceuticals, we strive to deliver solutions that address the region’s most pressing healthcare needs while fostering partnerships with healthcare providers, distributors, and researchers. We aim to be more than just a manufacturer—we aspire to be a force for positive change in global health.MissionTo enhance the quality of healthcare by manufacturing innovative, safe, and affordable pharmaceutical products that empower patients and healthcare professionals in the UAE and across the globe.VisionTo become a leading pharmaceutical manufacturer recognized for excellence, innovation, anda commitment to transforming healthcare outcomes worldwide.
                        </p>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="image-wrap">
                        <div class="imagethmb">
                            <div class="imagethmb_inner">
                                <img src="{{ asset('ozon/images/about.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about-accordion-wrapper">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading no-margin">who we are</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <h1>Our Mission</h1>
                                </button>
                            </div>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">To enhance the quality of healthcare by manufacturing innovative, safe, and affordable pharmaceutical products that empower patients and healthcare professionals in the UAE and across the globe.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <h1>Our Vision</h1>
                                </button>
                            </div>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">To become a leading pharmaceutical manufacturer recognized for excellence, innovation, anda commitment to transforming healthcare outcomes worldwide.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about-our-numbers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="header">OUR NUMBERS</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="numbers">

                        @foreach ( $ourNumbers  as $item )
                            <li class="list">
                                <span class="count">{{ $item->value }}</span>
                                <span class="title">{{ $item->title }}</span>
                            </li>
                        @endforeach

{{--
                        <li class="list">
                            <span class="count">35+</span>
                            <span class="title">Team Members</span>
                        </li>
                        <li class="list">
                            <span class="count">100+</span>
                            <span class="title">Products</span>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>

    </section>

</main>
