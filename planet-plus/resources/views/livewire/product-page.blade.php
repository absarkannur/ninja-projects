<div class="product-innerpage-wrapper">
    <div class="border-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs">
                        <li><a href="https://favtech.ae">Home &gt;</a></li>
                        <li><a href="https://favtech.ae/products/all">Products &gt;</a></li>
                        <li><b>{{ $product->product_name }}</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="product-image-wrap">
                    <div class="imagethmb">
                        <div class="imagethmb_inner">
                            <img src="{{ asset( 'storage/' . $product->product_image ) }}" alt="{{ $product->product_name }}" title="Samsung Galaxy A165 A16 4G, A Series, BLACK, LCD Display, GH82-36253A">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <a href="{{ route('products', ['slug' => $product->brand_slug ]) }}">
                    <span class="brand">{{ $product->brand_name }}</span>
                </a>

                <h1 class="page_title">{{ $product->product_name }}</h1>

                <div class="button-wrapper">
                    <a target="__blank" href="https://api.whatsapp.com/send/?phone={{ $site_data->company_whatsapp }}&text=I am interested with {{ $product->product_name }}&type=phone_number&app_absent=0"
                        class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <span>Quick Enquiry</span>
                    </a>
                </div>

                <div class="info-wrapper">

                    <h3 class="heading">Description</h3>
                    <p>{!! $product->product_short_descriptions !!}</p>

                    <h3 class="heading">Features</h3>
                    <div class="features">
                        {!! $product->product_descriptions !!}
                    </div>

                    {{-- <h3 class="heading">Specifications</h3> --}}

                    {{-- <ul class="list">
                        <li><span>Brand:</span>{{ $product->brand_name }}</li>
                        <li><span>Model:</span>4545454</li>
                        <li><span>Series: </span>A Series</li>
                        <li><span>Part No:</span>GH8236253A</li>
                    </ul>
                    <ul class="list">
                        <li><span>Parts:</span>Cable</li>
                        <li><span>Color:</span>BLACK</li>
                        <li><span>Condition:</span>Orginal</li>
                        <li><span>Quality:</span>Brand New</li>
                    </ul> --}}

                    <h3 class="heading">Support</h3>
                    <div class="support">
                        <ul>
                            @if($supports)
                                @foreach ( $supports as $support )
                                <li>
                                    <div class="image">
                                        <img src="{{ asset( 'storage/' . $support['support_image'] ) }}" alt="{{ $support['support_name'] }}" />
                                    </div>
                                    <div class="title">
                                        {{ $support['support_name'] }}
                                    </div>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <x:ui.cta />

</div>
