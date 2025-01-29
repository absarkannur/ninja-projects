<main>

    <x:widgets.banner
        title="Products"
        breadcrumbs="<a href='/'>Home</a> > Products"
        image="ozon/images/products-banner.png" />

    <section class="product-search-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="form-options">
                        <li class="option header"><em>Search By</em></li>
                        <li class="option">
                            <input wire:model.live="filter" type="radio" id="search_product_name" name="search_filter" value="Product Name">
                            <label for="search_product_name">Product Name</label>
                        </li>
                        <li class="option">
                            <input wire:model.live="filter" type="radio" id="search_therapeutic" name="search_filter" value="Therapeutic Categories">
                            <label for="search_therapeutic">Therapeutic Categories</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-inputs">

                        @if( $filter === 'Product Name' )

                            <input wire:model.live="search" type="text" placeholder="Search Products ...">

                            <div class="button-group">
                                <button class="oz-button-primery p-l-10 center">
                                    Search
                                </button>
                                <button class="oz-button-primery no-padding p-l-10 center">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-45deg);" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"></path>
                                    </svg>
                                </button>
                            </div>

                        @else

                            <div>
                                Test
                            </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </section>

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
