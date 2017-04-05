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
define('LIB_DIR', 'lib/'); //lib kataloogi nimi konstatnt
define('ACTS_DIR', 'acts/'); // acts kataloogi nime konstant

define('DEFAULT_ACT', 'default'); // vaikimis tegevuse faili nime konstant

// võtame kasutusele vajalikud abifailid
require_once LIB_DIR.'utils.php';

//võtame kasutusle vajalikud failid
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';

// loome vajalikud objektid projekti tööks

$http = new linkobject();

// testime linkobjekti tööd
echo $http->baseUrl.'<br />';
echo $http->getLink(array('kasutaja'=>'admin', 'pass'=>'qwerty'));
?>