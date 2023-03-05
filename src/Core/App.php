<?php

namespace App\Core;

use App\Route\Router;

class App
{
    /**
     * The routing object
     *
     * @var Router
     */
    private $router;

    /**
     * Create a new app instance
     *
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Launches the application
     *
     * @return void
     */
    public function start()
    {
        $this->router->direct();
    }
}