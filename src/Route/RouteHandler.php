<?php

namespace App\Route;

class RouteHandler
{
    /**
     * The current route
     *
     * @var string
     */
    private $route;

    /**
     * Create a new RouteHandlerInstance
     *
     * @param string $route
     */
    public function __construct(string $route)
    {
        $this->route = $route;
    }

    /**
     * Pluck the route
     *
     * @param $routes
     * @return RouteConfiguration
     */
    public function pluck($routes): RouteConfiguration
    {
        foreach ($routes as $route => $controllerAndAction) {
            if ($this->is_match($route)) {
                $matches = $this->parse($route);
                $routeConfiguration = new RouteConfiguration($controllerAndAction[0],
                    $controllerAndAction[1], $matches);

                return $routeConfiguration;
            }
        }
    }

    /**
     * Checks for matches
     *
     * @param $route
     * @return false|int
     */
    public function is_match($route): false|int
    {
        return preg_match_all($route, $this->route);
    }

    /**
     * Parse the route
     *
     * @param $route
     * @return array|null
     */
    public function parse($route): ?array
    {
        preg_match_all($route, $this->route, $matches, PREG_SET_ORDER);
        unset($matches[0][0]);
        return $matches[0];
    }
}