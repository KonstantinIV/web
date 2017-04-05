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
    echo 'sobiva faili pole';
}