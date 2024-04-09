<?php

namespace App\Http\Pipes;

use Closure;
use Framework\Http\Request;
use Framework\Pipeline\Pipe;

class TestPipe extends Pipe
{
    /**
     * Handle an incoming HTTP request.
     *
     * This method represents a test middleware that processes a HTTP request before it reaches our application.
     *
     * @param Request $request The incoming HTTP request.
     * @param Closure $next The next middleware in the pipeline.
     * @return mixed The response returned by the next middleware or the application.
     */
    public function handle(Request $request, Closure $next)
    {
        // Your middleware logic goes here

        return $next($request);
    }
}