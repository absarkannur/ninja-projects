<main>

    <x:widgets.banner
        title="Contact Us"
        breadcrumbs="<a href='/'>Home</a> > Contact Us"
        image="ozon/images/about-innnerpage.png" />


    <section class="contact-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="heading">Lets Get Connected</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <form wire:submit="submit" class="contact_form">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" wire:model="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" wire:model="phone" name="phone" placeholder="Your Phone">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" wire:model="email" name="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <textarea wire:model="message" name="message" placeholder="Message" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <button type="submit" class="oz-button-primery p-l-10 center fr">
                            SEND MESSAGE
                            <img src="kenz-assets/assets/icons/arrow-w.svg" alt="">
                        </button>
                    </div>
                </div>
            </form>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


        </div>

    </section>


</main>
