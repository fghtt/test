<?php

namespace App\Route;

use Controllers\Controller;

class RouteConfiguration
{
    /**
     * The controller
     *
     * @var Controller
     */
    private $controller;

    /**
     * The action name
     *
     * @var string
     */
    private $action;

    /**
     * The params list
     *
     * @var array
     */
    private $params;

    /**
     * Create a new RouteConfiguration instance
     *
     * @param $controller
     * @param $action
     * @param $params
     * @return void
     */
    public function __construct($controller,  $action, $params)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
    }

    /**
     * Get the controller object
     *
     * @return Controller
     */
    public function getController()
    {
        return new $this->controller();
    }

    /**
     * Get the action name
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Get the params list
     *
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}