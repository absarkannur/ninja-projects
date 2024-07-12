<div>

    <section class="ak-container ak-insigts">

        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2>NEWS & INSIGHTS</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="insight-list-blog">
                        @foreach( $posts as $post )
                        <li class="item">
                            <span class="date">{{ \Carbon\Carbon::parse( $post->updated_at )->format('d M, Y')  }}</span>
                            
                            <div class="imagethmb">
                                <div class="imagethmb_inner">
                                    <img rel="prefetch" class="pic" src={{ asset("storage/" . $post->thumbnail ) }} alt="">
                                </div>
                            </div>
                            
                            <div class="text">{{ $post->title }}</div>

                            <div class="user">
                                <img src={{asset("kenz-assets/assets/icons/user.svg")}} alt="">
                                <span>Al Kenz Pharma</span>
                            </div>
                            
                            <div class="link">
                                <a href="#">read more</a>
                                <img src={{asset("kenz-assets/assets/icons/arrow.svg")}} alt="">
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
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

    </section>

</div>
