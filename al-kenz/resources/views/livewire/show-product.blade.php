<div>

    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>{{ $product->name }}</h1>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a> &gt;</li>
                        <li><a href="{{route('products')}}">Products</a> &gt;</li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ak-container ak-inner-product-list">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="category-nav-group">

                        <?php  $product = isset( $_GET['product'] ) ? $_GET['product'] : $drug_classes[0]['name']; ?>

                        <ul class="product-category owl-carousel owl-theme">
                            @if( $product == 'ALL' )
                            <li class="item active">ALL</li>
                            @else
                            <li class="item">ALL</li>
                            @endif
                            @foreach( $drug_classes as $drug_class )
                            @if( $product == $drug_class->name )
                            <li class="item active">{{ $drug_class->name }}</li>
                            @else
                            <li class="item">{{ $drug_class->name }}</li>
                            @endif
                            @endforeach
                        </ul>

                        <div class="nav-group">
                            <span class="prev js_prev">
                                <img src={{ asset( "kenz-assets/assets/icons/prev.svg" ) }} alt="">
                            </span>
                            <span class="next js_next">
                                <img src={{ asset( "kenz-assets/assets/icons/next.svg" ) }} alt="">
                            </span>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="product-list-item">

                        @if( $product == 'ALL' )
                            @foreach( $drug_list as $drug )
                                @foreach( $drug['drug'] as $value )
                                    <li class="item">
                                        <div class="image_wrapper">
                                            <div class="imagethmb">
                                                <div class="imagethmb_inner">
                                                    <img src={{ asset( 'storage/' . $value['image'] ) }} alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="name_wrapper">
                                            @if( strlen( $value['name'] ) >= 35 )
                                            <h3>{{ $value['name'] }}</h3>
                                            @else
                                            <h3 style="line-height: 45px;">{{ $value['name'] }}</h3>
                                            @endif
                                        </div>
                                        <div class="content_wrapper">
                                            <h3>{{ $value['name'] }}</h3>
                                            <p>{!! $value['desc'] !!}</p>
                                            @if( $value['attach'] != '' )
                                            <hr />
                                            <a class="attach" target="__blank" href="{{ asset( "storage/" . $value['attach'] ) }}">
                                                <img src={{ asset( "kenz-assets/assets/icons/file.png" ) }} width="14" height="14" />
                                                Presentation
                                            </a>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                        @endif

                        

                        @foreach( $drug_list as $drug )
                            @if( $drug['class'] == $product )
                                @foreach( $drug['drug'] as $value )
                                    <li class="item">
                                        <div class="image_wrapper">
                                            <div class="imagethmb">
                                                <div class="imagethmb_inner">
                                                    <img src={{ asset( 'storage/' . $value['image'] ) }} alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="name_wrapper">
                                            @if( strlen( $value['name'] ) >= 35 )
                                            <h3>{{ $value['name'] }}</h3>
                                            @else
                                            <h3 style="line-height: 45px;">{{ $value['name'] }}</h3>
                                            @endif
                                        </div>
                                        <div class="content_wrapper">
                                            <h3>{{ $value['name'] }}</h3>
                                            <p>{!! $value['desc'] !!}</p>
                                            @if( $value['attach'] != '' )
                                            <hr />
                                            <a class="attach" target="__blank" href="{{ asset( "storage/" . $value['attach'] ) }}">
                                                <img src={{ asset( "kenz-assets/assets/icons/file.png" ) }} width="14" height="14" />
                                                Presentation
                                            </a>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </section>



</div>
