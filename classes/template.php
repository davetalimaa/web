<?php

/**
 * Created by PhpStorm.
 * User: dave.talimaa
 * Date: 22.03.2017
 * Time: 12:11
 */
class template
{// klassi algus
    //template klassi omadused - muutujad
    var $file = ''; // html malli faili nimi
    var $content = false; //html malli faili sisu
    var $vars = array(); //html vaade sisu - reaalsed väärtused
    // klassi tegevused - meetodid - funktsioonid

    //klassi konstruktor
    function __construct($f){
        $this->file = $f; //määrame html malli faili nimi
        $this->loadFile(); //loeme määratud failist sisu
    }//konsturktor

    //html malli faili lugemine
    /**
     *
     */
    function loadFile(){
        $f = $this->file; //lokaalne asendus
        //konrollime mallide kausta olemasolu
        if(!is_dir(TMP_DIR)){
            echo 'Kataloogi'.TMP_DIR.' ei ole leitud<br />';
            exit;
        }
        if(file_exists($f) and is_file($f) and is_readable($f)){
            // loeme failist malli sisu
            $this->readFile($f);
        }
        // kui susu ei ole võimalik lugeda
        if ($this->content === false){
            echo 'Ei suutnud lugeda faili'.$this->file.'<br />';
        }
    }

    // Loeme sisu html failist
    function readFile($f){
        $this->content = file_get_contents($f);
    }// readFile
}// klassi lõpp