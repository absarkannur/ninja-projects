<div class="price-list-wrapper">
    
    <div class="inner-header-wrapper" style="{{ 'background-image: url(' .asset( 'fav/images/inner-banner.png' ) . ')'  }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Price List</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="inner-content-wrapper gap">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <h5>Latest Price List</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="price-list">
                        @if( $price_list )
                            @foreach( $price_list as $price )
                                <a target="__blank" href={{ asset( 'storage/' . $price['price_list'] ) }}>
                                    <li class="list">
                                        <span class="title">
                                            {{ $price['price_list'] }}
                                            <span class="date">{{ $price['created_at'] }}</span>
                                        </span>
                                        <svg width="20" height="20">
                                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#download-thick-shape') }}></use>
                                        </svg>
                                    </li>
                                </a>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
