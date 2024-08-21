<div class="container-fluid">

    <div class="row mt-5 mb-2 justify-content-md-center">
        <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            <h2>Registration</h2>
        </div>
    </div>

    <div class="row mb-5 justify-content-md-center">
        <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="form-control fav-form">
                <form wire:submit="create">
                    {{ $this->form }}
                    
                    <button type="submit">
                        Submit
                        <div wire:loading>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="30" height="30"><circle fill="#FFFFFF" stroke="#FFFFFF" stroke-width="15" r="15" cx="40" cy="100"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate></circle><circle fill="#FFFFFF" stroke="#FFFFFF" stroke-width="15" r="15" cx="100" cy="100"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate></circle><circle fill="#FFFFFF" stroke="#FFFFFF" stroke-width="15" r="15" cx="160" cy="100"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate></circle></svg>
                        </div>
                    </button>

                    <a class="link" href={{ route('signin') }}>Signin</a>

                </form>

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                <x-filament-actions::modals />
            </div>
        </div>
    </div>

</div>
