<?php

class Settings
{
    /** static variable instance class
     * @var Settings
     */
    private static $_instance ;

    /**
     * close function , used only inside class
     */
    private function __construct() {}

    /**
     * close function , used only inside class
     */
    protected function __clone() {}

    static public function getInstance()
    {
        //check instance
        if (null === self::$_instance) {
            //create new instance
            self::$_instance = new self();
        }
        //return instance
        return self::$_instance;
    }

    public function import()
    {
        echo 'we use method import';
    }

    public function get()
    {
        echo 'we use method get';
    }
}
