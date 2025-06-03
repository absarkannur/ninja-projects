<div>
    <div class="common-hero"
        style="background-image: url('{{ asset('planet-assets/img/banner-images/product.jpg') }}');">
        <span class="layer"></span>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">
                        <h1>Products</h1>
                        <div class="space16"></div>
                        <span class="span">
                            <a href="index.html">Home</a>
                            <span class="arrow">
                                <i class="fa-regular fa-angle-right"></i>
                            </span> Products
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="product-filter">
        <span class="flter-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-filter-square" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                <path
                    d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
            </svg>
        </span>
    </div>

    <div class="service-details-area-all sp">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 product-filter-section">

                    <div class="heading4">
                        <h5>Shop By Brands</h5>
                    </div>
                    <div class="space20"></div>

                    <div class="accordion" id="accordionBrand">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
                                    Brands
                                </button>
                            </h2>
                            <div id="brands" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionBrand">
                                <div class="accordion-body">
                                    <ul class="product-filters">
                                        <li>
                                            @if( $brands )
                                                @foreach ( $brands as $brand )
                                                    <label for="{{ $brand->brand_slug }}">
                                                        <input type="checkbox" wire:model.live="brand" value="{{ $brand->id }}" id="{{ $brand->brand_slug }}" />
                                                        <span>{{ $brand->brand_name }}</span>
                                                    </label>
                                                @endforeach
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space20"></div>

                    <div class="heading4">
                        <h5>Shop By Category</h5>
                    </div>
                    <div class="space20"></div>

                    <div class="accordion" id="accordionCategories">

                        @if($categories)

                            @foreach ( $categories as $key => $category )
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{ $category['category_slug'] }}" aria-expanded="true" aria-controls="{{ $category['category_slug'] }}">
                                            {{ $category['category_name'] }}
                                        </button>
                                    </h2>
                                    <div id="{{ $category['category_slug'] }}" class="accordion-collapse collapse {{ ( $key === 0 ) ? 'show': '' }}"
                                        data-bs-parent="#accordionCategories">
                                        <div class="accordion-body">
                                            <ul class="product-filters">
                                                @if( $category['sub_categories'] )
                                                    @foreach ( $category['sub_categories'] as $sub_categories )
                                                        <li>
                                                            <label for="{{ $sub_categories['sub_category_slug'] }}">
                                                                <input type="checkbox" wire:model.live="cat" value="{{ $sub_categories['sub_category_id'] }}" id="{{ $sub_categories['sub_category_slug'] }}" />
                                                                <span>{{ $sub_categories['sub_category_name'] }}</span>
                                                            </label>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif

                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Power Backup Solutions
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <label for="Santak UPS Tower">
                                                <input type="checkbox" id="Santak UPS Tower" />
                                                <span>Santak UPS Tower</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="Santak UPS Rack">
                                                <input type="checkbox" id="Santak UPS Rack" />
                                                <span>Santak UPS Rack</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="APC UPS Tower">
                                                <input type="checkbox" id="APC UPS Tower" />
                                                <span>APC UPS Tower</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="APC UPS Rack">
                                                <input type="checkbox" id="APC UPS Rack" />
                                                <span>APC UPS Rack</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    High-Performance Computing
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <label for="Gaming Laptops – ASUS, Lenovo, HP, Dell">
                                                <input type="checkbox" id=Gaming Laptops – ASUS, Lenovo, HP, Dell" />
                                                <span>Gaming Laptops – ASUS, Lenovo, HP, Dell</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="Gaming Desktops – Custom-built for performance">
                                                <input type="checkbox"
                                                    id="Gaming Desktops – Custom-built for performance" />
                                                <span>Gaming Desktops – Custom-built for performance</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Storage Solutions
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <label for="HDDs">
                                                <input type="checkbox" id="HDDs" />
                                                <span>HDDs</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="SSDs">
                                                <input type="checkbox" id="SSDs" />
                                                <span>SSDs</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="Portable Drives">
                                                <input type="checkbox" id="Portable Drives" />
                                                <span>Portable Drives</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Printing & Office Essentials
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <label for="All-in-One Printers">
                                                <input type="checkbox" id="All-in-One Printers" />
                                                <span>All-in-One Printers</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="Continuous Ink Tanks">
                                                <input type="checkbox" id="Continuous Ink Tanks" />
                                                <span>Continuous Ink Tanks</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="Cartridges & Toners">
                                                <input type="checkbox" id="Cartridges & Toners" />
                                                <span>Cartridges & Toners</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                    <ul class="proucts-list product-3">
                        @if($products)
                            @foreach ( $products as $product )
                                <li class="product">
                                    <a href="{{ route( 'product', ['slug' => $product->product_slug ] ) }}">
                                        <div class="image-wrap">
                                            <div class="imagethmb">
                                                <div class="imagethmb_inner">
                                                    <img src="{{ asset( 'storage/' . $product->product_image ) }}" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-wrap">
                                            <span class="title">{{ $product->product_name }}</span>
                                        </div>
                                    </a>
                                    <div class="button-wrap">
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
                                </li>
                            @endforeach
                        @endif
                    </ul>

                    <div class="product-pagination">
                        @if ( $products != null )
                            {{ $products->links('pagination.pagination-links') }}
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
