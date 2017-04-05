<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 29-Mar-17
 * Time: 14:23
 */
class linkobject extends http {
    var $baseUrl = false;
    var $delim   = '$amp;';
    var $eq      = '=';
    var $protocol = 'http://';


    function __construct(){

        parent::__construct();
        $this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;

    }

    function addToLink($link,$name,$val){
        if($link != ''){
            $link = $link.$this->delim;

        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($val);
        return $link;


    }
    function getLink($add = array()){
        $link = '';
        foreach($add as $name=>$val){
            $this->addToLink($link, $name, $val);
        }
        if($link != ''){
            $link = $this->baseUrl.'?'.$link;
        } else {
            $link = $this->baseUrl;
        }
        return $link;
    }// getLink


}













?>