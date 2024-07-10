<div>
    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>{{ $service->title }}</h1>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a> &gt;</li>
                        <li><a href="{{route('services')}}">Services</a> &gt;</li>
                        <li>{{ $service->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-market-research">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    
                    <div class="banner-image">
                        <div class="imagethmb">
                            <div class="imagethmb_inner">
                                <img src={{ asset('storage/' . $service->thumbnail ) }} alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="banner-content">
                        <h2>OUR SERVICES</h2>
                        
                        <ul class="service-list">
                            @if( $services_list->isNotEmpty() )
                            @foreach( $services_list as $list )
                                @if( $service->title != $list->title )
                                <a href="{{ route('service', ['id'=>$list->id] ) }}">
                                    <li class="item">
                                        <span>{{ $list->title }}</span>
                                        <img src={{asset("kenz-assets/assets/icons/arrow-right.svg")}} alt="">
                                    </li>
                                </a>
                                @endif
                            @endforeach
                            @endif

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </section>

    {!! $service->content !!}

    {!! $service->component !!}


</div>