<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 05-Apr-17
 * Time: 09:04
 */

$act = $http->get('act');
$fn  = ACTS_DIR.str_replace('.','/', $act).'.php';

if (file_exists($fn) and is_file($fn) and is_readable($fn)){
    require_once $fn;
}else{
    $fn = ACTS_DIR.DEFAULT_ACT.'.php';
    $http->set('act', DEFAULT_ACT); // paneme act väärtuseks default - act=default
    require_once $fn;
}

?>