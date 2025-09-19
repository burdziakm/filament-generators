<?php

namespace Burdziakm\FilamentGenerators\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class MakeFilamentTableCommand extends GeneratorCommand
{
    protected $name = 'make:filament-table';

    protected $description = 'Create a new Filament Table class';

    protected $type = 'Filament Table';

    protected function getStub()
    {
        return __DIR__ . '/../../stubs/filament-table.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\\Filament\\Tables';
    }

    protected function getNameInput()
    {
        $name = trim($this->argument('name'));
        return Str::plural($name) . 'Table';
    }
}
