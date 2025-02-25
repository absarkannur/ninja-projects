<main>

    <x:widgets.banner
        title="Our Strategy"
        breadcrumbs="<a href='/'>Home</a> > Our Strategy"
        image="ozon/images/strategy-inner.png" />

    <section class="strategy-page-wrapper">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">{{ $strategy_content->page_title }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="strategy-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="image-wrap">
                        <img src="{{ asset( 'storage/'. $strategy_content->page_image ) }}" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="content-wrap">

                        <svg class="sticky-right-bottom" width="265" height="117" viewBox="0 0 265 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35 65C35 48.4315 48.4315 35 65 35H265V117H35V65Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M265 35H230C249.33 35 265 19.33 265 0V35Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35 117H0C19.33 117 35 101.33 35 82V117Z" fill="white"/>
                        </svg>

                        <div class="wrap">
                            {!! $strategy_content->page_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tip__tap">
                    {!! tiptap_converter()->asHTML($strategy_content->content_1) !!}
                    </div>
                </div>
            </div>
        </div>

    </section>



    {{-- <section class="strategy-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="heading">Localization in the UAE.</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Our strategic presence in the UAE is a cornerstone of our operations. By localizing our manufacturing and repackaging services, we enhance our ability to respond swiftly to regional demands while maintaining the highest standards of quality and compliance. This localization not only strengthens our supply chain efficiency but also supports the UAE's healthcare ecosystem by providing locally produced, world-class pharmaceutical products.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="strategy-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="heading">Core Strategic Pillars</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <ul class="strategy-dots">
                        <li class="list">Advanced Manufacturing Capabilities:</li>
                        <li class="list">Comprehensive Repackaging Services:</li>
                        <li class="list">Market Expansion and Portfolio Development:</li>
                    </ul>

                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tip__tap">
                    {!! tiptap_converter()->asHTML($strategy_content->content_3) !!}
                    </div>
                </div>
            </div>
        </div>

    </section>


    {{-- <section class="strategy-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="heading">Commitment to Excellence</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Our strategy is underpinned by a commitment to excellence and a patient-centric approach. By leveraging our expertise in manufacturing and repackaging, and through our strategic localization in the UAE, we aim to enhance our market presence and contribute to the advancement of healthcare in the region and beyond.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="strategy-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">Localization in the UAE.</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Our strategic presence in the UAE is a cornerstone of our operations. By localizing our manufacturing and repackaging services, we enhance our ability to respond swiftly to regional demands while maintaining the highest standards of quality and compliance. This localization not only strengthens our supply chain efficiency but also supports the UAE's healthcare ecosystem by providing locally produced, world-class pharmaceutical products.</p>
                </div>
            </div>
        </div>

    </section>

    <section class="strategy-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">Development of the current portfolio of generics on the market</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion accordion-flush" id="accordionStrategy">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                    <h1>Strengthening marketing activities</h1>
                                </button>
                            </div>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionStrategy">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Partnership with medical organizations</li>
                                        <li>Inclusion of drugs in treatment standards</li>
                                        <li>Conducting training events</li>
                                        <li>Personalized Marketing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <h1>Increasing the market share of key drugs</h1>
                                </button>
                            </div>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionStrategy">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Expansion of the product range</li>
                                        <li>Expansion of the number of points and geography of sales</li>
                                        <li>Cooperation with partners for joint promotion and development of the market</li>
                                        <li>Systematic development and expansion of the drug protfolio</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="strategy-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="sub-heading">Our strategy is our uniqueness</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <ul class="strategy-list-pharma">
                        <li class="list">
                            <div class="icon-group">
                                <img src="{{ asset('ozon/images/strategy_1.png') }}" />
                            </div>
                            <div class="content-group">
                                <h3 class="header">"Ozone" and "Ozone Pharm"</h3>
                                <p class="content-text">Production of finished medicinal products from synthetic active pharmaceutical substances</p>
                            </div>
                        </li>
                        <li class="list">
                            <div class="icon-group">
                                <img src="{{ asset('ozon/images/strategy_2.png') }}" />
                            </div>
                            <div class="content-group">
                                <h3 class="header">"Ozone Medica"</h3>
                                <p class="content-text">Production of drugs against oncology and severe systemic autoimmune diseases</p>
                            </div>
                        </li>
                        <li class="list">
                            <div class="icon-group">
                                <img src="{{ asset('ozon/images/strategy_2.png') }}" />
                            </div>
                            <div class="content-group">
                                <h3 class="header">"Mabscale"</h3>
                                <p class="content-text">Development and preparation for production of finished full-cycle medicinal products from monoclonal antibodies and other recombinant proteins is underway</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </section> --}}

</main>
