<?php
define('ROOT', dirname(__DIR__));
require ROOT.'/App/App.php';
App::loader();

use App\Controller\PostController;
$controller = new PostController();

if(isset($_GET['view']))
{
    $view = $_GET['view'];
}else{
    $view = '/home';
}

if($view === '/home')
{
    $controller->index();
}
elseif($view === 'hello')
{
    $controller->hello();
}



