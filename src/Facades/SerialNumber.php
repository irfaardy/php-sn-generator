<?php
/* 
	Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\SerialNumber\Facades;

use Illuminate\Support\Facades\Facade;

class SerialNumber extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Irfa\SerialNumber\Func\SerialNumber::class;
    }
}
