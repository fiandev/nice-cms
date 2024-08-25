<?php

namespace App\Providers;

// use Filament\Facades\Filament;
// use Filament\Navigation\NavigationGroup;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Assets\Js;

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
        FilamentAsset::register([
            // Js::make('custom', __DIR__ . '/../../resources/js/app.js'),
        ]);
        \Filament\Resources\Pages\CreateRecord::disableCreateAnother();
        \Filament\Actions\CreateAction::configureUsing(fn(\Filament\Actions\CreateAction $action) => $action->createAnother(false));
    }
}
