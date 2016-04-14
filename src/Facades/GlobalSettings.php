<?php
namespace Junaidnasir\GlobalSettings\Facades;

use Illuminate\Support\Facades\Facade;

class GlobalSettings extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'globalSettings';
    }
}
