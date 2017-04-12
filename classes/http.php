<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 29-Mar-17
 * Time: 13:45
 */




class http{
    var $vars = array();
    var $server = array();

    function __construct(){
        $this->init();
        $this->initCont();
    }


    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server = $_SERVER;
        //$this->cookie = $_COOKIE; // cookie real data

    }

    function initCont(){
        $consts = array('REMOTE_ADDR', 'HTTP_HOST', 'PHP_SELF', 'SCRIPT_NAME');
        foreach ($consts as $const){
            if(!defined($const) and isset($this->server[$const])){
                define($const, $this->server[$const]);

            }
        }
    }


    function get($name){
        if($this->vars[$name]){
            return $this->vars[$name];
        }
        return false;

}


    function set($name, $val){
        $this->vars[$name] = $val;
    }// set


}

?>