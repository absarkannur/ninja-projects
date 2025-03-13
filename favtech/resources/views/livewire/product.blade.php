<div class="product-innerpage-wrapper">

    <div class="border-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">Home ></a></li>
                        <li><a href="{{ route('products', ['slug'=>'all'] ) }}">Products ></a></li>
                        <li><b>{{ $page_title }}</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="product-image-wrap">
                    <div class="imagethmb">
                        <div class="imagethmb_inner">
                            <img src="{{ asset( 'storage/' . $data->product_image ) }}"
                                alt="{{ $page_title }}"
                                title="{{ $page_title }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <a href="{{ route( 'products', [ 'slug' => $data->brand_slug ] ) }}">
                    <span class="brand">{{ $data->brand_name }}</span>
                </a>

                <h1 class="page_title">{{ $page_title }}</h1>

                <div class="price-wrapper">
                    @if ( !$data->product_price_aed == 0)
                    <span class="aed_price"><em>AED</em>{{ $data->product_price_aed }}</span>
                    <span class="usd_price"><em>$</em>{{ $data->product_price_usd }}</span>
                    @else
                    <span class="usd_price" style="color: red">SOLD OUT</span>
                    @endif
                </div>

                @if ( !$data->product_price_aed == 0)
                <div class="button-wrapper">
                    <a class="whatsapp" target="__blank" rel="noreferrer"
                        href="{{ 'https://wa.me/+971553351001/?text=I am interested with ' . $data->product_name . ' ' . $data->product_class . '-' . $data->product_model . '-' . $data->product_parts . ' + ' .  $data->color_name . ' + ' . $data->product_part_number }}">
                        <svg width="30" height="30">
                            <use xlink:href="{{ asset('fav/images/svg-sprint.svg#whatsapp-filled') }}"></use>
                        </svg>
                        Quick Enquiry
                    </a>
                </div>
                @endif

                <div class="info-wrapper">

                    <h3 class="heading">Description</h3>
                    <p>{{ $data->product_description }}</p>

                    <h3 class="heading">Specifications</h3>

                    <ul class="list">
                        <li><span>Brand:</span>{{ $data->brand_name }}</li>
                        <li><span>Model:</span>{{ $data->product_model }}</li>
                        <li><span>Series: </span>{{ $data->product_series }}</li>
                        <li><span>Part No:</span>{{ $data->product_part_number }}</li>
                    </ul>
                    <ul class="list">
                        <li><span>Parts:</span>{{ $data->product_parts }}</li>
                        <li><span>Color:</span>{{ $data->color_name }}</li>
                        <li><span>Condition:</span>{{ $data->product_condition }}</li>
                        <li><span>Quality:</span>{{ $data->product_quality }}</li>
                    </ul>
                </div>

                <div class="description-wrapper">
                    <ul class="list">
                        <li>
                            <span class="title">DELIVERY TIME</span>
                            <span class="content">Available within 5 - 15 business days</span>
                        </li>
                        <li>
                            <span class="title">TRUSTED SHIPPING</span>
                            <span class="content">Free shipping when you spend $5000 and above on express items</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <x:products :products="$products" :title="$title='RELATED PRODUCTS'" :pos="$pos='left'" />


</div>
