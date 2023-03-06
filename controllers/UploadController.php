<?php

namespace Controllers;

use Services\CSVFilesService;

class UploadController extends Controller
{
    /**
     * The service for working with csv files
     *
     * @var CSVFilesService
     */
    private $service;

    public function __construct()
    {
        $this->service = new CSVFilesService();
    }

    /**
     * @return string
     */
    public function index()
    {
        return $this->view('upload/index');
    }

    /**
     * Fills the database with data from a file
     *
     * @return void
     */
    public function store()
    {
        $file = $_FILES['file'];
        $this->service->store($file);
    }
}