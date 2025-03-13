<main>

    <x:widgets.banner
        title="Pharmacovigilance"
        breadcrumbs="<a href='/'>Home</a> > Pharmacovigilance"
        image="ozon/images/Pharmacovigilance.png" />

    <section class="pharmacovigilance-page-wrapper">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">{{ $pharmacovigilance->page_title }}</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tip__tap">
                        {!! tiptap_converter()->asHTML($pharmacovigilance->content_1) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pharmacovigilance-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="image-wrap">
                        <img src="{{ asset('storage/' . $pharmacovigilance->page_image ) }}" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="content-wrap">
                        <div class="wrap">
                            {!! $pharmacovigilance->page_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pharmacovigilance-info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tip__tap">
                        {!! tiptap_converter()->asHTML($pharmacovigilance->content_2) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
