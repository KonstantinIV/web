<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 29-Mar-17
 * Time: 14:23
 */
class linkobjects extends http {
    var $baseUrl = false;
    var $delim   = '$amp;';
    var $protocol = 'http://';


    function __construct(){

        parent::__construct();
        $this->baseUrl = $this->protocol.HTTP_POST.SCRIPT_NAME;

    }

    function addToLink($link,$name,$val){
        if($link != ''){
            $link = $link.$this->delim;

        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($val);
        return $link;


    }

}













?>