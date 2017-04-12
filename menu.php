<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 22-Mar-17
 * Time: 15:26
 */


$menu = new template('menu.menu'); // in menu directory is file menu.html menu/menu.html
$item = new template('menu.item');


$sql = 'SELECT content_id, title FROM content WHERE '.
    'parent_id='.fixDb(0).' AND show_in_menu='.fixDb(1);

$res = $db->getArray($sql);


if($res != false){
    foreach ($res as $page){
        // nimetame menüüs väljastav element
        $item->set('name', $page['title']);
        // loome antud menüü elemendile lingi
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        // lisame antud link menüüsse
        $item->set('link', $link);
        // lisame valmis link menüü objekti sisse
        $menu->add('items', $item->parse());
    }
}

/*
$item->set('name', 'esimene');
$link = $http->getLink(array('act'=>'first'));

$item->set('link', $link);
$menu->set('items', $item->parse());


$item->set('name', 'teine');
$link = $http->getLink(array('act'=>'second'));
$item->set('link', $link);


$menu->add('items', $item->parse());
// kontrollime objekti olemasolu ja sisu
// kui soovime pidevat asendamist, siis set funktsioon add asemel*/
$main_tmpl->add('menu', $menu->parse());
?>