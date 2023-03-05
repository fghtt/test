<?php

namespace App\Route;

class Router
{
    /**
     * The current route
     *
     * @var string
     */
    private $route;

    /**
     * The array of routes
     *
     * @var array
     */
    private $routes;

    /**
     * The route handler
     *
     * @var RouteHandler
     */
    private $routeHandler;

    /**
     * Creating a new Route instanc
     *
     * @return void
     */
    public function __construct()
    {
        $this->route = $_SERVER['REQUEST_URI'];
        $this->routeHandler = new RouteHandler($this->route);
    }

    /**
     * Directs to the controller
     *
     * @return void
     */
    public function direct()
    {
        $routeConfiguration = $this->routeHandler->pluck($this->routes);
    }

    /**
     * Set the routes
     *
     * @param array $routes
     * @return void
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }
}