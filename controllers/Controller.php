<?php

namespace Controllers;

use App\View\View;

class Controller
{
    /**
     * The view object
     *
     * @var View
     */
    protected $view;

    /**
     * Create a new Controller instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->view = new View();
    }
}