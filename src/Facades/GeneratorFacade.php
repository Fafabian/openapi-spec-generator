<?php

namespace LaravelJsonApi\OpenApiSpec\Facades;

use Illuminate\Support\Facades\Facade;

class GeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'openapi-generator';
    }
}
