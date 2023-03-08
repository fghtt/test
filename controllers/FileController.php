<?php

namespace Controllers;

use Models\CSVFile;

class FileController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        $file = new CSVFile();
        $file = $file->all();
        return $this->view->load('file/index', ["file" => $file]);
    }
}