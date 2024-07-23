<div>
    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset( 'kenz-assets/assets/images/inner-banner.png' ) }}');">   
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Products</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-products" id="products">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <h2>FIND YOUR PRODUCT</h2>

                    <ul class="products-list">
                        @foreach( $products as $product )
                        <li class="item">
                            <img src={{ asset( "storage/" . $product->banner_image ) }} rel="prefetch" alt="">
                            <a href="{{ route( 'product', ['id'=>$product->id] ) }}">
                                <span class="text">{{ $product->name }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

    </section>
</div>
