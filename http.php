<?php

/**
 * Created by PhpStorm.
 * User: dave.talimaa
 * Date: 29.03.2017
 * Time: 13:45
 */
class http
{ //klassi algus
    // klassi muutujad
    var $vars = array(); // http päringute andmed
    var $server = array(); // saervero (masina) andmed
    // klassi meetodid
    //  paneme algandmed paika - initsialiseerime neid
    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server= $_SERVER;
    }// init
} //klassi lõpp