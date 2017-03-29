<?php
/**
 * Created by PhpStorm.
 * User: dave.talimaa
 * Date: 22.03.2017
 * Time: 15:26
 */
//loome menüü mallide objektid
$menu = new template('menu.menu');
$item = new template('menu.item');
// lisame sisu
// nimetame menüü väljastav elementgr
$item->set('name','esimene');
//loome antud menüü elemendile lingi
$link = $http->getLink(array('act'=>'first'));
//lisame antud link menüüsse
$item->set('link', $link);
//lisame valmis link menüü objekti sisse
$menu->set('items', $item->parse());
//
$item->set('name','teine');
$link = $http->getLink(array('act'=>'second'));
$item->set('link', $link);
$menu->add('items', $item->parse());
// konrollime objekti oemasolu ja sisu
// kui soovime pidevat asedamist, siis set funktsioon add asemel
$main_tmp-> add('menu', $menu->parse());
?>