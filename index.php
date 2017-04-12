<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 15-Mar-17
 * Time: 13:08
 */
require_once 'conf.php';

echo '<h1>Programmeerimise esileht</h1>';


//echo '<pre>';
//print_r($main_tmpl);

$main_tmpl = new template('main');
require_once 'lang.php';

$main_tmpl->set('user', 'Kasutajanimi');
$main_tmpl->set('title', 'Pealeht');

$main_tmpl->set('menu','Lehe peamenüü' );







require_once 'menu.php';

require_once 'act.php';




//$main_tmpl->set('content', 'Lehe sisu');
$main_tmpl->set('site_title', 'Veebiprogemise kursus');


echo $main_tmpl->parse();


//echo '</pre>';




?>