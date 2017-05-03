<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 15-Mar-17
 * Time: 13:12
 */

define('CLASSES_DIR','classes/');
define('TMPL_DIR','tmpl/');
define('LIB_DIR', 'lib/');
define('ACTS_DIR', 'acts/');
define ('DEFAULT_ACT', 'default');


/*
 * Keelevahetus
 *
 *define('ROLE_NONE',0);
define('ROLE_ADMIN',1);
define('ROLE_USER',2);

 */

define('DEFAULT_LANG','et');
define('ROLE_NONE', 0);
define('ROLE_ADMIN', 1);
define('ROLE_USER', 2);


require_once LIB_DIR.'utils.php';
require_once LIB_DIR.'trans.php';
require_once 'db_conf.php';

require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
require_once CLASSES_DIR.'mysql.php';
require_once CLASSES_DIR.'session.php';

//Keelevahetus

//require_once CLASSES_DIR.'session.php';





$http = new linkobject();



$db = new mysql(DB_HOST, DB_USER,DB_PASS ,DB_NAME);
$sess = new session($http, $db);






//$res = $db->getArray('SELECT NOW()');
/*echo '<pre>';
print_r($sess);
echo '</pre>';
*/
//$sess = new session($http, $db);

$lang_id = $http->get('lang_id');

$siteLangs = array('et' => 'estonian','en' => 'english','ru' => 'russian');


if(!isset($siteLangs[$lang_id])){
    $lang_id = DEFAULT_LANG;
    $http->set('lang_id',$lang_id);

}
define('LANG_ID', $lang_id);



?>