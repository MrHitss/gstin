<?php

namespace Mrhitss\Gstin\Facades;

/*
 * Class Facade
 * @package Mrhitss\Gstin\Facades
 * @see Mrhitss\Gstin\Services\Gstin
 */

use Illuminate\Support\Facades\Facade;
use Mrhitss\Gstin\GstinFacadeAccessor;

class Gstin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return GstinFacadeAccessor::class;
    }
}