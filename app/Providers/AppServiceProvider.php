<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        // Forzar la URL raíz si estamos en producción/proxy o si llega la cabecera de host del proxy
        if (config('app.env') !== 'local' || request()->server('HTTP_X_FORWARDED_HOST')) {
            URL::forceRootUrl(config('app.url'));
        }
    }
}
