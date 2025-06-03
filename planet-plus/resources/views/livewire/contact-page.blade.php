<div>
        <div class="common-hero"
        style="background-image: url('{{ asset('/planet-assets/img/banner-images/contact.jpg') }}');">
        <span class="layer"></span>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">
                        <h1>Contact Us</h1>
                        <div class="space16"></div>
                        <span class="span"><a href="index.html">Home</a>
                            <span class="arrow"><i class="fa-regular fa-angle-right"></i></span> Contact Us</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="space100"></div>

    <div class="contact-page">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="contact-boxs">
                        <div class="heading1">
                            <h2>Lets Get Connected</h2>
                            <div class="space16"></div>
                            <p>Fill the form, and our sales team will get in touch with you shortly.</p>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <img src="{{ asset('planet-assets/img/icons/contact-page-icon1.png') }}" alt="">
                            </div>
                            <div class="heading">
                                <h5>Contact Us</h5>
                                <a href="tel:{{ $site_data->compnay_phone1 }}" class="text">{{ $site_data->compnay_phone1 }}</a>
                                <br>
                                <a href="tel:{{ $site_data->compnay_phone2 }}" class="text no-padding">{{ $site_data->compnay_phone2 }}</a>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="icon">
                                <img src="{{ asset('planet-assets/img/icons/contact-page-icon2.png') }}" alt="">
                            </div>
                            <div class="heading">
                                <h5>Send Us a Mail</h5>
                                <a href="mailto:{{ $site_data->compnay_email }}" class="text">{{ $site_data->compnay_email }}</a>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="icon">
                                <img src="{{ asset('planet-assets/img/icons/contact-page-icon3.png') }}" alt="">
                            </div>
                            <div class="heading">
                                <h5>Office Location</h5>
                                <a href="tel:(124)555-6565" class="text">
                                    {{ $site_data->compnay_address }}
                                </a>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form-details">
                        <form wire:submit="submit">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-input">
                                        <input type="text" wire:model="name" placeholder="Full Name">
                                        @error('name')
                                        <span style="display: block;position: relative;color: red;margin-top: -20px;font-size: 11px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input">
                                        <input type="email" wire:model="email" placeholder="Email">
                                        @error('email')
                                        <span style="display: block;position: relative;color: red;margin-top: -20px;font-size: 11px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input">
                                        <input type="number" wire:model="phone" placeholder="Phone">
                                        @error('phone')
                                        <span style="display: block;position: relative;color: red;margin-top: -20px;font-size: 11px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-input">
                                        <textarea wire:model="message" cols="30" rows="5" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button class="theme-btn1">Submit <span><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>

                            </div>
                        </form>

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="space100"></div>

    <div class="contact-map-page">
        {!! $site_data->google_map !!}
    </div>

</div>
