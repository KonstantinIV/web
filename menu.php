<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 22-Mar-17
 * Time: 15:26
 */


$menu = new template('menu.menu'); // in menu directory is file menu.html menu/menu.html
$item = new template('menu.item');


$item->set('name', 'esimene');
$menu->set('items', $item->parse());
$item->set('name', 'teine');
$menu->add('items', $item->parse());
// kontrollime objekti olemasolu ja sisu
// kui soovime pidevat asendamist, siis set funktsioon add asemel
$main_tmpl->add('menu', $menu->parse());
?>