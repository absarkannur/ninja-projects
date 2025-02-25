<main>

    <x:widgets.banner
        title="About Us"
        breadcrumbs="<a href='/'>Home</a> > About Us"
        image="ozon/images/about-innnerpage.png" />

    <section class="about-info-wrapper">

        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">{{ $about_content->page_title }}</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tip__tap">
                    {!! tiptap_converter()->asHTML($about_content->content_1) !!}
                    </div>
                </div>
            </div>
        </div>

        <br/>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tip__tap">
                    {!! tiptap_converter()->asHTML($about_content->content_2) !!}
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="content-wrap">

                        <h2 class="header">Localizing Pharmaceutical Manufacturing in the UAE</h2>
                        <p class="content-text">
                            Ozon Pharmaceuticals is a state-of-the-art <b>pharmaceutical manufacturing and repackaging</b> facility based in the UAE, dedicated to enhancing local production and reducing reliance on imports. Our mission is to provide <b>high-quality, globally compliant medicines</b> while ensuring faster access to essential treatments for the region.
                        </p>
                        <p class="content-text">
                            In <b>Phase 1</b>, we specialize in the <b>manufacturing and repackaging of tablets, capsules, and injectables</b>, adhering to <b>GMP-certified</b> standards and leveraging cutting-edge technology. By localizing production, we aim to <b>support the UAE’s healthcare sector</b>, strengthen supply chains, and contribute to a more self-sufficient pharmaceutical industry.
                        </p>
                        <p class="content-text">
                            Looking ahead, Ozon Pharmaceuticals is set to expand its capabilities beyond <b>Phase 1</b>, introducing a broader range of dosage forms and <b>enhancing research and development</b> efforts. Our long-term vision includes <b>international distribution</b>, ensuring that <b>high-quality, affordable medications</b> manufactured in the UAE can reach <b>markets across the Middle East and beyond</b>.
                        </p>
                        <p class="content-text">
                            At Ozon Pharmaceuticals, we are more than just a factory—we are committed to innovation, affordability, and partnerships that drive positive change in healthcare.
                        </p>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="image-wrap">
                        <div class="imagethmb">
                            <div class="imagethmb_inner">
                                <img src="{{ asset('ozon/images/AdobeStock_819976268.webp') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </section>

    {{-- <section class="about-accordion-wrapper">
        <div class="container">
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

    </section> --}}

    {{-- <section class="about-our-numbers">
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
                    </ul>
                </div>
            </div>
        </div>

    </section> --}}

</main>
