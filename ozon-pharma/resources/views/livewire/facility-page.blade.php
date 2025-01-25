<main>

    <x:widgets.banner
        title="{{ $facilitiesCategory->facility_category_name }}"
        breadcrumbs="Home > Facilities"
        image="ozon/images/facilities.png" />

    <section class="facilities-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="innerpage-contents">

                        {!! $facilities->facilities_content !!}

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="facilities-sidebar">

                        <h3 class="header">Our Facilities</h3>

                        <ul class="sidebar-list">
                            <li class="links">Manufacturing Technology</li>
                            <li class="links">Quality System</li>
                            <li class="links">Product Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
