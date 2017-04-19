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
var $timeout = 1800;

function __construct(&$http, &$db)
{
$this->http = &$http;
$this->db = &$db;
$this->createSession();
$this->clearSessions();


$this->sid = $http->get('sid');

}

function createSession($user = false){
    if ($user == false){
        $user = array(
            'user_id' => 0,
            'role_id' => 0,
            'username' => 'Anonymous',
        );
    }
    $sid = md5(uniqid(time().mt_rand(1, 1000), true));
    $sql = 'INSERT INTO session SET '.'sid='.fixDb($sid).', '.'user_id='.fixDb($user['user_id']).', '.'user_data='.fixDb(serialize($user)).', '.'login_ip='.fixDb(REMOTE_ADDR).', '.'created=NOW()';
    $this->db->query($sql);
    $this->sid = $sid;

    $this->http->set('sid', $sid);
}

function clearSessions(){
    $sql = 'DELETE FROM session WHERE '.time().'- UNIX_TIMESTAMP(changed) > '.$this->timeout;
    $this->db->query($sql);
}


    function checkSession(){
    $this->clearSessions();
    if($this->sid === false and $this->anonymous){
        $this->createSession();

    }

    if($this->sid !== false){
        $sql = 'SELECT * FROM session WHERE '.'sid='.fixDb($this->sid);
        $res = $this->db->getArray($sql);

        if ($res == false){

        }
    }
    }
}