<?php

namespace AvoRed\Framework\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Module extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'module';
    }
}