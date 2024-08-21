
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <ul class="product-list">
                        @if( $products )
                            @foreach( $products as $product )
                            <li class="list-item">
                                <div class="image-wrapper">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src={{ asset( 'storage/' . $product['product_image'] ) }} alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="details-wrapper">
                                    <div class="product_name">
                                        <span class="tag">{{ $product['product_name'] }}</span>
                                        <span class="title">{{ $product['product_name'] }}+{{ $product['product_model'] }}+{{ $product['product_part_number'] }}</span>
                                    </div>
                                    <div class="product_enquiry">
                                        <a class="whatsapp" target="__blank" href="{{ 'https://wa.me/+971553351001/?text=I am interested with ' .  $product['product_model']. '-' . $product['product_part_number'] }}">
                                            <svg width="24" height="24">
                                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#whatsapp-filled') }}></use>
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

