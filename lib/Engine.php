<?php
/**
 * Created by PhpStorm.
 * User: THINKPAD
 * Date: 25.12.13
 * Time: 19:00
 */

class Engine {
    private static $params = null;
    protected static $instance= null;

    function __construct(){
        $this->initParams();
    }

    public function addParam($nm, $val){
        self::$params[$nm] = $val;
    }

    public function getParam($nm){
        if(isset(self::$params[$nm])){
            return self::$params[$nm];
        }
    }

    private function initParams(){
        self::$params = $_REQUEST;
    }

    public static function &getInstance(){
        self::$instance;
        if (self::$instance == null){
            self::$instance = new Engine();
        }
        return self::$instance;
    }
} 