<main>

    <x:widgets.banner
        title="Articles"
        breadcrumbs="<a href='/'>Home</a> > Articles"
        image="ozon/images/facilities.png" />

    <section class="articles-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">

                    <ul class="blogs">

                        @foreach ( $articles as $article )

                        <li class="blogs-list">
                            <a href={{ 'article/' . $article->slug  }}>
                            <div class="images">
                                <img src="{{ asset( 'storage/' . $article->thumbnail  ) }}" alt="">
                            </div>
                            <div class="tags">
                                <ul class="tags-list">
                                    @foreach ( $article->tags as $tag )
                                        <li class="list">{{ $tag }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="contents">
                                <h3 class="title">{{ $article->title }}</h3>
                                <span class="published">By: Ozon Pharma - {{ \Carbon\Carbon::parse( $article->updated_at )->format('d M, Y')  }}</span>
                            </div>
                            </a>
                        </li>

                        @endforeach

                    </ul>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ( $articles != null )
                    {{ $articles->links() }}
                    @endif
                </div>
            </div>
        </div>

    </section>

</main>
