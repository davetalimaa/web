<?php
/**
 * Created by PhpStorm.
 * User: dave.talimaa
 * Date: 15.03.2017
 * Time: 13:08
 */
// võtame konfiguratsiooni kasutusele
require_once 'conf.php';
// pealehe sisu
echo '<h1>Veebiprogrammeerimine esileht</h1>';
//valmistame peatemplate objekti
$main_tmp = new template('main');
// valmistame paarid malli_element => väärtus
$main_tmp-> set('user', 'Kasutajanimi');
$main_tmp-> set('title', 'Pealeht');
$main_tmp-> set('lang_bar', 'Keeleriba');
$main_tmp-> set('menu', 'Lehe peamenüü');
// kutsume menüü tööle testimiseks
require_once 'menu.php';
$main_tmp-> set('content', 'Lehe sisu');
$main_tmp-> set('site_title', 'Veebiprogrameerimise kursus');
//kontrollime antud objekti sisu
echo $main_tmp->parse();

?>