<?php
namespace App\Controller;

class Controller
{
    protected   $viewPath,
                $template;

    protected function control($view)
    {
        ob_start();
        require($this->viewPath.str_replace('@@','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'templates/'.$this->template.'.php');
    }
}