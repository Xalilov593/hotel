<?php

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
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
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->flags([
                    'uz' => asset('css/filament/uzb.png'),
                    'ru' => asset('css/filament/rus.png'),
                    'en' => asset('css/filament/usa.png'),
                ])
                ->locales(['uz','ru','en']);
        });
    }
}
