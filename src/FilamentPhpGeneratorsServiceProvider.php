<?php

namespace Burdziakm\FilamentGenerators;

use Illuminate\Support\ServiceProvider;
use Burdziakm\FilamentGenerators\Commands\MakeFilamentFormCommand;
use Burdziakm\FilamentGenerators\Commands\MakeFilamentTableCommand;

class FilamentGeneratorsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeFilamentFormCommand::class,
                MakeFilamentTableCommand::class,
            ]);

            $this->publishes([
                __DIR__ . '/../stubs' => base_path('stubs/filament'),
            ], 'filament-stubs');
        }
    }
}
