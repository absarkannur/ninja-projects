<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\View\Composers\HeaderComposer;
use App\View\Composers\StructuredData;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();

        URL::macro('livewire_current', function () {
            if (request()->route()->named('livewire.update')) {
                $previousUrl = url()->previous(); // use the more meaningful one from previous

                return $previousUrl;
            } else {
                return request()->route();
            }
        });

        // View
        View::composer( '*', HeaderComposer::class );
        View::composer( '*', StructuredData::class );

    }
}
