<main>

    <x:widgets.banner
        title="{{ $facilitiesCategory->facility_category_name }}"
        breadcrumbs="<a href='/'>Home</a> > Facilities"
        image="ozon/images/facilities.png" />

    <section class="facilities-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="innerpage-contents">
                        <div class="tip__tap">
                            {!! tiptap_converter()->asHTML($facilities->facilities_content) !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="facilities-sidebar">

                        <h3 class="header">Our Facilities</h3>

                        <ul class="sidebar-list">
                            @foreach ( $facilitiesList as $facilities )
                                @if( $facilities->facility_category_slug != $facilitiesCategory->facility_category_slug )
                                <li class="links">
                                    <a href="{{ '/facility/' . $facilities->facility_category_slug }}">
                                        {{ $facilities->facility_category_name }}
                                        <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"></path>
                                        </svg>
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
