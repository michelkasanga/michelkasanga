<?php

class App
{
    private $_Instance;

    public static function getInstance()
    {
        if (is_null(self::$_Instance)) {
            self::$_Instance = new App();
        }
        return self::$_Instance;
    }

    public static function loader()
    {
        require ROOT . '/vendor/autoload.php';
    }
}
