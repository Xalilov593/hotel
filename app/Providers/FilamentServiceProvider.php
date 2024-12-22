<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            if (auth()->check() && auth()->user()->hasRole('client')) {
                abort(403, 'Siz admin panelga kira olmaysiz.');
            }
        });
    }
}
