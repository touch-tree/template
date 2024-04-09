<?php

namespace App\Http;

use Framework\Http\Kernel as HttpKernel;

/**
 * The Kernel class (application kernel) is responsible for managing middleware in the HTTP request lifecycle.
 *
 * This class extends the base HTTP kernel provided by the framework.
 *
 * @package App\Http
 */
class Kernel extends HttpKernel
{
    /**
     * The global middleware for the application.
     *
     * These middleware are run during every HTTP request to the application.
     *
     * @var array
     */
    protected array $pipes = [];

    /**
     * The route middleware groups for the application.
     *
     * Route middleware can be assigned to specific routes or route groups.
     *
     * @var array
     */
    protected array $route_pipes = [];
}
