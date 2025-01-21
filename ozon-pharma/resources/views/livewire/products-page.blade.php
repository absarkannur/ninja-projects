<main>

    <x:widgets.banner
        title="Products"
        breadcrumbs="Home > Products"
        image="ozon/images/products-banner.png" />

    <section class="products-container">
        <div class="container"> {{-- Header --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <ul class="products-list">

                        @foreach ( $products as $product )

                            <li class="product">

                                <div class="image-wrap">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset("storage/" . $product->product_image ) }}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-wrap">
                                    <h3>{{ $product['product_name'] }}</h3>
                                    <p>{{ $product['product_description'] }}</p>
                                    <button class="oz-button-primery">Product Details</button>
                                </div>

                            </li>

                        @endforeach


                    </ul>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{ $products->links() }}
                </div>
            </div>
        </div>

    </section>


</main>
