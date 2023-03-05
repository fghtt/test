<?php

namespace View;

class View
{
    private $templatesPath;

    public function __construct()
    {
        $this->templatesPath = __DIR__ . '/../../view/';
    }

    public function load(string $templateName, arr $vars = null): void
    {
        ($vars) ? extract($vars) : '';

        ob_start();
        include $this->templatesPath . "/$templateName.php";
        $buffer = ob_get_contents();
        ob_end_clean();

        echo $buffer;
    }
}