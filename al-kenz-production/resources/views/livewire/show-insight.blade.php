<div>

    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Insight</h1>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a> &gt;</li>
                        <li><a href="{{route('insights')}}">Insights</a> &gt;</li>
                        <li>{{ $posts->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>

        .ak-inner-banner h1 {
            height: 130px;
            overflow: hidden;
            word-break: break-all;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        @media (max-width: 768px) {
            .ak-inner-banner h1 {
                height: 100px;
                overflow: hidden;
                word-break: break-all;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
    </style>

    <section class="ak-container ak-inner-market-research-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <pre>
                        {!! $posts->content !!}
                    </pre>
                </div>
            </div>
        </div>
    </section>

</div>
