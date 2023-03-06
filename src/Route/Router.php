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
     * Creating a new Route instance
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
        $controller = $routeConfiguration->getController();
        $action = $routeConfiguration->getAction();
        echo $controller->$action();
    }

    /**
     * Set the routes
     *
     * @param array $routes
     * @return void
     */
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }
}