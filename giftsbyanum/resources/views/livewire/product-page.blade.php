<div class="innerpage-wrapper">

    <div class="breadcrumbs-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs">
                        <li class="list"><a href="https://favtech.ae">Home &gt;</a></li>
                        <li class="list"><a href="https://favtech.ae/products/all">Products &gt;</a></li>
                        <li class="list"><b>...</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="product-image-slider-wrap">

                    {{-- Images --}}

                    <div class="slider-wrap">

                        <div class="thumbs-view">
                            <span class="scroll-up js_click_up">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
                                </svg>
                            </span>
                            <ul class="image-thumbs" id="js_thumb">
                                <li class="list" style="background-image: url('https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_1.jpg')"></li>
                                <li class="list" style="background-image: url('https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_2.jpg')"></li>
                                <li class="list" style="background-image: url('https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_3.jpg')"></li>
                                <li class="list" style="background-image: url('https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_4.jpg')"></li>
                            </ul>
                            <span class="scroll-down js_click_down">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </span>
                        </div>

                        <div class="image-view owl-carousel owl-theme" id="js_product_slider">

                            <div class="imgae-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src="https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_1.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="imgae-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src="https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_2.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="imgae-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src="https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_3.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="imgae-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src="https://www.fnp.com//images/pr/l/v20240419180752/butterscotch-crunch-cake-half-kg_4.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="product-info-wrap">

                    <div class="header-content">
                        <h1>Personalised Couple Magic Mug Lore</h1>
                        <span class="price">
                            <span class="new-price">AED 349</span>
                            <span class="old-price">AED 379</span>
                            <span class="offer-percent">8% Off</span>
                        </span>
                    </div>

                    <div class="product-customize">

                        @if ($a == 'cake')
                            <div>
                                <h3 class="title">Message On Cake</h3>
                                <input placeholder="Your message" class="primary-input" />
                            </div>
                        @else
                            <div>
                                <h3 class="title">Add Personalised Details</h3>
                            </div>
                        @endif

                    </div>

                    <div class="about-product">
                        <h3 class="title">About the product</h3>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Product Description
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Care Instructions
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Delivery Information
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


</div>
