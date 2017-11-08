<?php 

namespace Bantenprov\LaravelOpd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The LaravelOpd facade.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LaravelOpd extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-opd';
    }
}
