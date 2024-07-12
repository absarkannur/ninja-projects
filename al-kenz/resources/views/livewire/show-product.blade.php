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

                        @foreach( $drug_list as $drug )
                            @if( $drug['class'] == $product )
                                @foreach( $drug['drug'] as $value )
                                    <li class="item">
                                        <h4>{{ $value['name'] }}</h4>
                                        <span>
                                            
                                            <h5>{{ $value['name'] }}</h5>
                                            <p>{{ $value['desc'] }}</p>
                                            
                                            @if( $value['attach'] != '' )
                                            <p style="border: dashed 1px #815ef6;border-radius: 4px;color: #ffffff;padding: 3px;">
                                                <a target="__blank" href="{{ asset( "storage/" . $value['attach'] ) }}">
                                                    <img src={{ asset( "kenz-assets/assets/icons/file.png" ) }} width="14" height="14" />
                                                    Attachment
                                                </a>
                                            </p>
                                            @endif

                                        </span>
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
