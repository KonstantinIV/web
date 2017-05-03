<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 03-May-17
 * Time: 09:15
 */

$login->set('kasutjanimi', 'Kasutaja');
$login->set('parool', 'Parool');
$login->set('nupp', 'Logi sisse');


$link = $http->getLink(array('act' => 'login_do'));
$login->set('link', $link);
$main_tmpl->set('content', $login->parse());