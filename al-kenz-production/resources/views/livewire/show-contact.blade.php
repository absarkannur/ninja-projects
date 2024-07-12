<div>
    <section class="ak-container ak-inner-banner" style="background-image: url('{{ asset('kenz-assets/assets/images/inner-banner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-contact">
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Lets Get Connected</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <form wire:submit="submit" class="contact_form">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" wire:model="name" name="name" placeholder="Your Name" />
                        @error('name')
                        <span style="display: block;position: relative;color: red;margin-top: -15px;font-size: 11px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" wire:model="phone" name="phone" placeholder="Your Phone" />
                        @error('phone')
                        <span style="display: block;position: relative;color: red;margin-top: -15px;font-size: 11px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" wire:model="email" name="email" placeholder="Your Email" />
                        @error('email')
                        <span style="display: block;position: relative;color: red;margin-top: -15px;font-size: 11px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">   
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <textarea wire:model="message" name="message" placeholder="Message" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">   
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <button type="submit" class="ak-dft-btn p-l-10 center fr">
                            SEND MESSAGE
                            <img src={{ "kenz-assets/assets/icons/arrow-w.svg" }} alt="">
                        </button>
                    </div>
                </div>
            </form>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

        </div>

    </section>

    <section class="ak-container">
        <div id="map"></div>
    </section>

    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script>

    
</div>
