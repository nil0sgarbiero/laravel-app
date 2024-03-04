<?php

namespace App\Providers;

use App\Filament\Resources\UserResource;
use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;

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
    public function boot(): void {
        //dd(UserResource::getUrl('view'));
        Filament::serving(function () {
            Filament::registerUserMenuItems([
                //'account' => UserMenuItem::make()->url(route(UserResource::getUrl('view'))),
                //'account' => UserMenuItem::make()->url(route('filament.pages.account')),
                // ...
            ]);
        });
    }
}
