<div>
    <div class="inner-header-wrapper" style="{{ 'background-image: url(' .asset( 'fav/images/inner-banner.png' ) . ')'  }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Products</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="product-page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <h2>FIND YOUR PRODUCT</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <ul class="product-brands">

                        @if( $brands )

                            @foreach( $brands as $brand )
                            <li class="list {{ ( $slug === $brand->brand_slug ) ? 'active': ''  }}">
                                <a href="{{ route( 'products', ['slug'=>$brand->brand_slug ] ) }}">
                                    <div class="image-wrapper">
                                        <div class="imagethmb">
                                            <div class="imagethmb_inner">
                                                <img src={{ asset( 'storage/' . $brand['brand_image'] ) }} alt="{{ $brand['brand_name'] }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title">{{ $brand['brand_name'] }}</div>
                                </a>
                            </li>
                            @endforeach

                        @endif
                    </ul>
                </div>
            </div>

            @if ( $slug != 'all' )
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="product-series">
                            <div class="row">
                                <div wire:ignore class="col-12 col-md-6 col-lg-6 col-xl-6">

                                    <label>Series</label>
                                    <select wire:model="series" class="series-select-search" name="state">
                                        <option value="null" disabled selected>Select Series</option>
                                        @foreach ( $series_list as $s )
                                        <option value="{{$s->product_series_slug}}">{{ $s->product_series }}</option>
                                        @endforeach
                                    </select>

                                    @script
                                        <script>
                                            $(document).ready(function() {

                                                // Clear URL after chnage the series
                                                function removeParam(parameter) {
                                                    var url=document.location.href;
                                                    var urlparts= url.split('?');

                                                    if (urlparts.length>=2) {
                                                        var urlBase=urlparts.shift();
                                                        var queryString=urlparts.join("?");

                                                        var prefix = encodeURIComponent(parameter)+'=';
                                                        var pars = queryString.split(/[&;]/g);
                                                        for (var i= pars.length; i-->0;)
                                                            if (pars[i].lastIndexOf(prefix, 0)!==-1)
                                                                pars.splice(i, 1);
                                                        url = urlBase+'?'+pars.join('&');
                                                        window.history.pushState('',document.title,url); // added this line to push the new url directly to url bar .

                                                    }
                                                    return url;
                                                }

                                                $('.series-select-search').select2()
                                                    .on( 'change', function() {
                                                        let data = $(this).val();

                                                        $wire.set( 'series', data );
                                                        $wire.set( 'filter', [] );

                                                        setTimeout(() => {
                                                            removeParam("page");
                                                            window.location.reload();
                                                        }, 300);

                                                    });
                                            });
                                        </script>
                                    @endscript
                                    <label>Results: {{ $products->total() }}</label>
                                </div>
                                <div wire:ignore class="col-12 col-md-6 col-lg-6 col-xl-6">

                                    <label>Product Filter</label>
                                    <select wire:model="filter" multiple class="products-select-search" name="state">
                                        <option disabled>Select Product</option>
                                        @foreach ( $product_select_list as $s )
                                            <option value="{{ $s->p_id }}">{{ $s->product_name . '-' . $s->product_model . '-' . $s->product_part_number . '-' . $s->color_name }}</option>
                                        @endforeach
                                    </select>

                                    @script
                                        <script>
                                            $(document).ready(function() {

                                                function removeParam(parameter) {
                                                    var url=document.location.href;
                                                    var urlparts= url.split('?');

                                                    if (urlparts.length>=2) {
                                                        var urlBase=urlparts.shift();
                                                        var queryString=urlparts.join("?");

                                                        var prefix = encodeURIComponent(parameter)+'=';
                                                        var pars = queryString.split(/[&;]/g);
                                                        for (var i= pars.length; i-->0;)
                                                            if (pars[i].lastIndexOf(prefix, 0)!==-1)
                                                                pars.splice(i, 1);
                                                        url = urlBase+'?'+pars.join('&');
                                                        window.history.pushState('',document.title,url); // added this line to push the new url directly to url bar .

                                                    }
                                                    return url;
                                                }

                                                $('.products-select-search').select2({ placeholder: 'Select Products' })
                                                    .on( 'change', function() {
                                                        let data = $(this).val();
                                                        $wire.set( 'filter', data );



                                                        setTimeout(() => {

                                                            var url = new URL( window.location.href );
                                                            var c = url.searchParams.get("page");

                                                            if( c != null ) {
                                                                removeParam("page");
                                                                window.location.reload();
                                                            }

                                                        }, 300);
                                                    });
                                            });
                                        </script>
                                    @endscript

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <ul class="product-list">
                        @if( $products )
                            @foreach( $products as $product )
                            <li class="list-item">
                                <a href={{ route('product', ['slug'=> $product['product_name'] .'~'. $product['product_model'] .'~'. $product['color_name'] .'~'. $product['product_parts'] .'~'. $product['product_part_number'] ]) }}>
                                @if ( $product->product_latest == 1)
                                <span class="new">LATEST</span>
                                @endif
                                <div class="wrp">
                                    @if( $product->product_price_aed == 0 )
                                    <span class="soldout"><em>SOLD OUT</em></span>
                                    @endif
                                    <div class="image-wrapper">
                                        <div class="imagethmb">
                                            <div class="imagethmb_inner">
                                                <img src="{{ asset( 'storage/' . $product['product_image'] ) }}"
                                                    title="{{ $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}"
                                                    alt="{{ $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price"><em>AED</em> {{ $product['product_price_aed'] }}</span>
                                        <span class="price">${{ $product['product_price_usd'] }}</span>
                                    </div>
                                </div>
                                <div class="details-wrapper">
                                    <div class="product_name">
                                        <span class="title">{{ $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] }}</span>
                                        <span class="tag">{{ $product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}</span>
                                    </div>
                                </div>
                                </a>
                                <div class="details-wrapper">
                                    <div class="product_enquiry">
                                        <a class="whatsapp" target="__blank" rel="noreferrer" href="{{ 'https://wa.me/+971553351001/?text=I am interested with ' . $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' . $product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}">
                                            <svg width="24" height="24">
                                                <use xlink:href="{{ asset('fav/images/svg-sprint.svg#whatsapp-filled') }}"></use>
                                            </svg>
                                            Quick Enquiry
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="product-pagination">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 flex-center">
                    {{ $products->links('pagination.pagination-links') }}
                </div>
            </div>
        </div>
    </div>

</div>

