<?php

use Framework\Component\Container;
use Framework\Component\Service;

class TestService extends Service
{
    /**
     * Service constructor.
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        parent::__construct($app);
    }
}