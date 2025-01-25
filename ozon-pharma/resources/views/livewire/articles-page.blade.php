<main>

    <x:widgets.blog-banner
        title="{{ $articles->title }}"
        breadcrumbs="Home > News"
        image="{{ asset( 'storage/' . $articles->thumbnail ) }}" />

    <section class="inner-news-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    {!! str($articles->content)->sanitizeHtml() !!}

                </div>
            </div>
        </div>
    </section>

</main>
