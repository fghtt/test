<?php

namespace Controllers;

class NotFoundController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return $this->view->load('404');
    }
}