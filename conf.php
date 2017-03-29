<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 15-Mar-17
 * Time: 13:12
 */

define('CLASSES_DIR','classes/');
define('TMPL_DIR','tmpl/');

require_once CLASSES_DIR . 'template.php';
require_once CLASSES_DIR . 'http.php';

$http = new http();
$http->init();

echo '<pre>';
print_r($http);
echo '</pre>';

?>