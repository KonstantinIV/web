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

require_once LIB_DIR.'utils.php';


require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
require_once CLASSES_DIR.'mysql.php';

$http = new linkobject();


/*
echo '<pre>';
print_r($http);
echo '</pre>';
*/
// testime linkobjecti tööd
//$db = new mysql();
?>