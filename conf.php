<?php
/**
 * Created by PhpStorm.
 * User: dave.talimaa
 * Date: 15.03.2017
 * Time: 15:25
 */
//defineerime vajalikud konstandid
define('CLASSES_DIR', 'classes/'); // classes kataloogi nime konstant
define('TMP_DIR', 'tmp/'); //tmpl kataloogi nime konstant

//võtame kasutusle vajalikud failid
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';

// loome vajalikud objektid projekti tööks
$http = new linkobject();

// testime http objekti tööd
echo REMOTE_ADDR;
?>