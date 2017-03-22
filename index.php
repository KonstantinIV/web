<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 15-Mar-17
 * Time: 13:08
 */
require_once 'conf.php';

echo "<h1>Programmeerimise esileht</h1>";


$main_tmpl = new template(TMPL_DIR.'mydoc.html');
echo '<pre>';
print_r($main_tmpl);
echo '</pre>';

?>