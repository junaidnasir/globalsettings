# Laravel Global Settings
Global Settings package for laravel, to quickly retrieve and store settings data in DB.


## Installation

Begin by installing the package through Composer. Run the following command in your terminal:

```bash
composer require junaidnasir/globalsettings
```

add the package service provider in the providers array in `config/app.php`:

```php
Junaidnasir\GlobalSettings\GlobalSettingsServiceProvider::class
```

you may add the facade access in the aliases array:

```php
'GlobalSettings'  => Junaidnasir\GlobalSettingsLO\Facades\GlobalSettings::class
```

publish the migration and config file:

```bash
php artisan vendor:publish"
```

migrate to create `global_settings` table

```bash
php artisan migrate
```


## Usage

You can use ***facade accessor*** to retrieve the package controller. Examples:

```php
GlobalSettings::set('allowUserSignUp',0);
GlobalSettings::set('userPostLimit',10);

// Get registration
if( GlobalSettings::get('allowUserSignUp'))
{
    //show form
}

// Post controller
if (count($user->post) >= GlobalSettings::get('userPostLimit'))
{
    // Can not create post limit reached
}

```

## API

```php
/* Set or update setting
*  $isActive is additional parameter 
*  to quickly disable a setting without
*  having to delete the setting
*/
set($Setting, $Value, $isActive = true);

/* Get Settings
*  return value of setting
*  or default value provided
*/
get($Setting, $default = null);

/* check if setting exists 
* return true if setting exists
* false otherwise
*/
has($Setting);

// Other Methods
update($setting, $value, $isActive);

isActive($setting);
activate($setting);
deactivate($setting);
delete($setting);

```