<?php

/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 19-Apr-17
 * Time: 08:53
 */
class session
{
var $sid = false;
var $vars = [];
var $http = false;
var $db   = false;
var $anonymous   = true;

function __construct(&$http, &$db)
{
$this->http = &$http;
$this->db = &$db;

}
}