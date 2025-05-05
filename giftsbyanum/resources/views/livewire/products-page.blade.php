<div class="innerpage-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="filter-section">

                    <div class="filter-wrap">

                        <span class="title">Filter</span>

                        <ul class="filter-accordion">
                            <li class="accordion-item">
                                <div class="accordion-header">Price</div>
                                <div class="accordion-body">

                                    <label for="0-100">
                                        <input type="checkbox" id="0-100" name="price" />
                                        <em>0-100 AED</em>
                                    </label>

                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-header">Categories</div>
                                <div class="accordion-body">

                                    <label for="Diwali">
                                        <input type="checkbox" id="Diwali" name="price" />
                                        <em>Diwali</em>
                                    </label>

                                    <label for="Birthday">
                                        <input type="checkbox" id="Birthday" name="price" />
                                        <em>Birthday</em>
                                    </label>

                                    <label for="Flower">
                                        <input type="checkbox" id="Flower" name="price" />
                                        <em>Flower</em>
                                    </label>

                                    <label for="Cake">
                                        <input type="checkbox" id="Cake" name="price" />
                                        <em>Cake</em>
                                    </label>

                                    <label for="Personalized">
                                        <input type="checkbox" id="Personalized" name="price" />
                                        <em>Personalized</em>
                                    </label>

                                    <label for="Ocassions">
                                        <input type="checkbox" id="Ocassions" name="price" />
                                        <em>Ocassions</em>
                                    </label>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

                <div class="result-section">

                    <div class="result-sort">
                        <div class="search-result-header">
                            <span class="result-title">Same Day Cakes Delivery</span>
                            <span class="result-count">36 of 585 Gifts</span>
                        </div>
                        <div class="dropdown">
                            <select name="sort" id="sortdropdown">
                                <option value="Recommended">Recommended</option>
                                <option value="New">New</option>
                                <option value="Price: High to Low">Price: High to Low</option>
                                <option value="Price: Low to High">Price: Low to High</option>
                            </select>
                        </div>
                    </div>

                    <div class="result-wrap">
                        <ul class="products">

                            @foreach ( [1,2,3,4,5,6,7,8] as $f )
                                <li class="product-list">
                                    <div class="category-wrap">
                                        <span class="block category-title">Accessories</span>
                                        <span class="block product-offer-percent">-10%</span>
                                    </div>
                                    <div class="image-wrap">
                                        <div class="imagethmb">
                                            <div class="imagethmb_inner">
                                                <img src="{{ asset('front-end/images/logo.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-wrap">
                                        <span class="block product-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto unde, accusantium dicta aliquam explicabo numquam recusandae voluptatibus dolorem tempora. Dolore rem maiores perspiciatis repellat quibusdam debitis asperiores, adipisci libero iusto.</span>
                                    </div>
                                    <div class="price-wrap">
                                        <span class="block price">AED 20.25</span>
                                        <span class="block price ex">AED 22.50</span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
