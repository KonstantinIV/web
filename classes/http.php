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

    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server = $_SERVER;

    }

    function initCont{
        $consts = array('REMOTE_ADDR', 'HTTP_POST', 'PHP_SELF', 'SCRIPT_NAME');
        foreach ($consts as $const){
            if(!defined($const) and isset($this->server[$const])){
                define($const, $this->server[$const]);

            }
        }
    }

}

?>