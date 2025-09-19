# filament-generators

A collection of Artisan generators providing clean, modular building blocks for **FilamentPHP** applications.

## Forms

To create a Filament Form class, use the following command:

```bash
php artisan make:filament-form Model
```

Replace `Model` with the name of your model. For example, if your model is named `Car`:

```bash
php artisan make:filament-form Car
```

This will generate a new file:

```text
Filament Form [app/Filament/Forms/CarForm.php] created successfully.
```

With the following template:

```php
<?php

namespace App\Filament\Forms;

use Filament\Forms\Form;

class CarForm
{
    public function build(Form $form): Form
    {
        return $form->schema([
            //
        ]);
    }
}
```

You can then move the form logic from your Resource to this `CarForm` class and use it like this:

```php
public static function form(Form $form): Form
{
    return app(\App\Filament\Forms\CarForm::class)->build($form);
}
```

---

## Tables

Similarly, you can create Filament Table classes:

```bash
php artisan make:filament-table Model
```

For example:

```bash
php artisan make:filament-table Car
```

This will generate:

```text
Filament Table [app/Filament/Tables/CarsTable.php] created successfully.
```

With the following template:

```php
<?php

namespace App\Filament\Tables;

use Filament\Tables\Table;

class CarsTable
{
    public function build(Table $table): Table
    {
        return $table->columns([
            //
        ]);
    }
}
```

You can then use it in your Resource file:

```php
public static function table(Table $table): Table
{
    return app(\App\Filament\Tables\CarsTable::class)->build($table);
}
```

---

### ✨ Notes

- **Form classes** end with `Form`, **Table classes** end with `Table` in plural form.
- This package helps keep your Filament Resources clean by separating form and table definitions into dedicated classes.