<?php

namespace App\View;

class View
{
    /**
     * The path to the templates directory
     *
     * @var string
     */
    private $templatesPath;

    /**
     * Creating a new View instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->templatesPath = __DIR__ . '/../../view/';
    }

    /**
     * Includes template
     *
     * @param string $templateName
     * @param array|null $vars
     * @return void
     */
    public function load(string $templateName, array $vars = null)
    {
        ($vars) ? extract($vars) : '';

        ob_start();
        include $this->templatesPath . "$templateName.php";
        $buffer = ob_get_contents();
        ob_end_clean();

        echo $buffer;
    }
}