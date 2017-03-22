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
// valmistame paarid malli_elemant => väärtus
$main_tmp-> set('user', 'Kasutajanimi');
$main_tmp-> set('title', 'Pealeht');
$main_tmp-> set('lang_bar', 'keeleriba');
$main_tmp-> set('menu', 'lehe_peamenüü');
$main_tmp-> set('content', 'Lehe_sisu');
//kontrollime antud objekti sisu
echo '<pre>';
print_r($main_tmp);
echo '</pre>';
?>