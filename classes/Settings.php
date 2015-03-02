<?php

//protected static $instances;
//
//protected function __construct() { }
//
//final private function __clone() { }
//
//    public static function getInstance() {
//    $class = get_called_class();
//
//    if (!isset(self::$instances[$class])) {
//        self::$instances[$class] = new $class;
//    }
//    return self::$instances[$class];
//}


class Settings
{
    private $settings = array();
    private static $instances = null;

    private function __construct()
    {
// приватный конструктор ограничивает реализацию getInstance ()
    }

    protected function __clone()
    {
// ограничивает клонирование объекта
    }

    static public function getInstance()
    {
        $class = get_called_class();

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class;
        }
        return self::$instances[$class];
    }

    public function import()
    {
        echo 'import';
    }

    public function get()
    {
        echo 'get';
    }
}
