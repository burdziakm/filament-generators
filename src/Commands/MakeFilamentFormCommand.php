<?php

namespace Burdziakm\FilamentGenerators\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeFilamentFormCommand extends GeneratorCommand
{
    protected $name = 'make:filament-form';

    protected $description = 'Create a new Filament Form class';

    protected $type = 'Filament Form';

    protected function getStub()
    {
        return __DIR__ . '/../../stubs/filament-form.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\\Filament\\Forms';
    }
}
