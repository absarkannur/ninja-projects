<main>

    <x:widgets.banner
        title="Facilities"
        breadcrumbs="Home > Facilities"
        image="ozon/images/facilities.png" />

    <section class="facilities-page-wrapper">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">OUR FACILITIES</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <dic class="row">
                <div class="col">

                    <ul class="facilities-list">

                        @foreach ( $facilities_category as $category )
                            <li class="list">
                                <a href={{ 'facility/' . $category->facility_category_slug  }}>
                                    <div class="image-wrap" style="background-image: url('{{ asset( "storage/" . $category->facility_category_image ) }}')"></div>
                                    <div class="content-wrap">
                                        <h4>{{ $category->facility_category_name }}</h4>
                                        <p>{{ $category->facility_category_description }}</p>
                                    </div>

                                    <svg class="left-sticky-corner" width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z" fill="white"/>
                                    </svg>

                                    <span class="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="45" height="45" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"></path>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </dic>
        </div>

    </section>

</main>
