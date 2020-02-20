<?php

namespace Devos\ApiConsumer\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devos\ApiConsumer\Router
 */
class ApiConsumer extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'apiconsumer';
    }
}
