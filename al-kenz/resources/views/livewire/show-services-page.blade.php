<div>
    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Services</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-service">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <ul class="service-list">
                        @foreach ( $services as $service )
                        <li class="item">

                            <div class="imagethmb">
                                <div class="imagethmb_inner">
                                    <img src={{ asset('storage/' . $service->thumbnail ) }} alt="">
                                </div>
                            </div>

                            <span class="separator"></span>

                            <div class="content">
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                                <a href="{{ route('service', ['id'=>$service->id] ) }}">
                                    <span class="link">
                                        READ MORE
                                        <img src={{asset("kenz-assets/assets/icons/arrow-w.svg")}} alt="">
                                    </span>
                                </a>
                                
                            </div>

                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>
</div>
