<div class="ga-header-category">
    <div class="container">
        <div class="row">
            <div class="col">

                @if ($categories)
                <ul class="categories">
                    @foreach ( $categories as $category )
                    <li><a href="{{ route( 'products', ['slug' => $category->category_slug ] ) }}">{{ $category->category_name }}</a></li>
                    @endforeach
                    <li><a href="">Diwali</a></li>
                    <li><a href="">Birthday</a></li>
                    <li><a href="">Anniversary</a></li>
                    <li><a href="">Flower</a></li>
                    <li><a href="">Cake</a></li>
                    <li><a href="">Personalized</a></li>
                    <li><a href="">Ocassions</a></li>
                    <li><a href="">Wedding</a></li>
                    <li><a href="">Clothing</a></li>
                    <li><a href="">Corporate</a></li>
                    <li><a href="">Gifts</a></li>
                    <li><a href="">Premium Gifts</a></li>
                </ul>
                @endif

            </div>
        </div>
    </div>
</div>
