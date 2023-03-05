<?php

namespace Controllers;

class UploadController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return $this->view->load('upload/index');
    }

    /**
     * @return void
     */
    public function store()
    {

    }
}