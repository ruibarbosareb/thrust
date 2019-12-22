<?php

namespace Rebortec\Thrust\Facades;

use Rebortec\Thrust\ResourceManager;
use Illuminate\Support\Facades\Facade;

class Thrust extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ResourceManager::class;
    }

    public static function serving($callback)
    {
        ResourceManager::serving($callback);
    }
}
