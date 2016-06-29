<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/28
 * Time: 14:29
 */
class Single
{
    private static $g_instance;
    public static function getInstance(){
        if(!self::$g_instance instanceof self){
            self::$g_instance = new self;
        }
        return self::$g_instance;
    }
    private function __construct(){
        echo "Single construct";
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
        trigger_error('Clone is not allow!',E_USER_ERROR);
    }
}