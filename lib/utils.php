<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 05-Apr-17
 * Time: 09:02
 */

    function fixUrl($val){
        return urlencode($val);
    }

function fixDb($val){
    return '"'.addslashes($val).'"';
}

?>