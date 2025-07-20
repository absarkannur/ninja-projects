<div>

    <section class="inner-page-banner vide-banner">
        <video class="property-video" id="video" poster="{{ asset( 'storage/' . $profile_data->banner_video_poster ) }}" muted autoplay loop>
            <source src="{{ asset( 'storage/' . $profile_data->banner_video ) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <section class="section-inner-profile-overview">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="flex">
                        <h2 class="title">Overview</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 flex">
                    <div class="flex">
                        <p class="content">{{ $profile_data->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-inner-profile-vm">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">

                    <div class="flex">
                        <div class="vision-wrap">
                            <h3>Vision</h3>
                            <p>{!! $profile_data->vision !!}</p>
                        </div>
                        <div class="mission-wrap">
                            <h3>Mission</h3>
                            <p>{!! $profile_data->mission !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section-inner-profile-corevalue-header">
        <h3 class="title">Core Values</h3>
    </section>

    <section class="section section-inner-profile-corevalue">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="flex">
                        @if ( $profile_data->core_values )
                            @foreach ( $profile_data->core_values as $values )
                                <div class="core-values">
                                    <h3>{{ $values['title'] }}</h3>
                                    <p>{{ $values['desc'] }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
