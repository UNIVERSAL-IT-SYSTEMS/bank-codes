<?php

namespace Jnaxo\BankCodes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the bank facade class.
 *
 */
class Bank extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BankStore';
    }
}
