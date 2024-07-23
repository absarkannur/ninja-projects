<div>

    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Partners</h1>
                    <ul>
                        <li><a wire:navigate href="{{ route('home') }}">Home</a> &gt;</li>
                        <li>Partners</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ak-container ak-partners" id="partners">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2>OUR PARTNERS</h2>
                </div>
            </div>

            <div class="row">
                @foreach( $partners as $partner )
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2" style="display: flex;justify-content: start;margin-bottom: 30px;">
                    <div style="display: flex;justify-content: center;align-items: center;height: 86px;width: 154px;background-color: white;border-radius: 10px;border: solid 1px #ddd;">
                        <img width="100%" src={{ asset("storage/" . $partner->partner_image ) }} alt="1"/>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
