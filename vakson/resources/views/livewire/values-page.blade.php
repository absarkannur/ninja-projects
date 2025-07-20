<div>
    <section class="inner-page-banner">
        <div class="parallax-window"></div>
    </section>
    @script
        <script>
            $(".parallax-window").parallax({
                imageSrc: "{{ asset( 'storage/' . $values_data->banner_image ) }}",
                zIndex: 1,
                speed: 0.2,
                iosDisabled: false,
            });
        </script>
    @endscript

    <section class="section-inner-expertise-header">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="header-content">
                        <h1>{{ $values_data->banner_title }}</h1>
                        <p>{{ $values_data->banner_sub_title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-inner-expertise">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">

                    <ul class="expertise-ul-list">
                        @foreach ( $values_data->values as $value )

                            <li class="experties-list">
                                <div class="image-wrap">
                                    <img src="{{ asset('storage/' . $value['image'] ) }}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <h3>{{ $value['title'] }}</h3>
                                    <p>{{ $value['desc'] }}</p>
                                </div>
                            </li>

                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>

</div>
