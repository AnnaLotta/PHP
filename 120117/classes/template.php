<?php

/**
 * Created by PhpStorm.
 * User: Ari
 * Date: 1/12/2017
 * Time: 12:27 PM
 */
// if TMPL-DIR is not defined
if(!define('TMPL_DIR')){
    // define TMPL-DIR
    define('TMPL_DIR', '../tmpl/');
}

class template
{
    var $file = ''; //template filename
    var $content = false; // template content is empty

    // class methods
    function loadFile(){
        $f = $this->file;
        if(is_dir(TMPL_DIR)){
            echo 'Kataloogi '.TMPL_DIR.' ei ole leitud./>';
            exit;
        }
            if (file_exists($f) and is_file($f) and is_readable($f)){
                $this->readFile($f);
            }
            //we can set path to template files ../tmpl/file.html
    } // loadFile

    function readFile($f) {
        $this->content = file_get_contents($f);
    } // readFile
} // class end