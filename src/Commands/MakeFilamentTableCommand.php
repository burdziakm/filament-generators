<?php

namespace Burdziakm\FilamentGenerators\Commands;

class MakeFilamentTableCommand
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
}