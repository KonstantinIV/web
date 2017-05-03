<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 03-May-17
 * Time: 09:39
 */


$username = $http->get('kasutaja');
    $passwd = $http->get('parool');

$sql = 'SELECT * FROM user'.
    'WHERE username='.fixDb($username).
    'AND password='.fixDb(md5($passwd));

    $res = $db->getArray($sql);

    if($res == false){

    } else {
        $sess->createSession($res[0]);


    }



