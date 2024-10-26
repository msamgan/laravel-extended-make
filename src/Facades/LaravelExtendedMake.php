<?php

namespace Msamgan\LaravelExtendedMake\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Msamgan\LaravelExtendedMake\LaravelExtendedMake
 */
class LaravelExtendedMake extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Msamgan\LaravelExtendedMake\LaravelExtendedMake::class;
    }
}
