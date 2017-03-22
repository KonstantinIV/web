<?php

/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 22-Mar-17
 * Time: 12:11
 */
class template
{
var $file = '';
var $content = false;
var $vars = array();


function readFile($f){

    $this->content = file_get_contents($f);

}

function loadFile(){
    $f = $this->file;
    if(!is_dir(TMPL_DIR)){
        echo 'Kataloogi '.TMPL_DIR.'ei ole leitud.<br>';
        exit;

    }
    if (file_exists($f) and is_file($f) and is_readable($f)){
        $this->readFile($f);
    }
    if ($this->content === false){
        echo 'Ei suutnud lugeda failis '.$this->file.'<br />';
    }

}

}
?>