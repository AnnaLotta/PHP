<?php

/**
 * Created by PhpStorm.
 * User: Ari
 * Date: 1/12/2017
 * Time: 12:27 PM
 */
// if TMPL_DIR is not defined
if(!defined('TMPL_DIR')){
    // define this constant and use in class template
    define('TMPL_DIR', '../tmpl/');
}
class template
{
    // class variables
    var $file = ''; // template file name
    var $content = false; // template content - now is empty
    // class methods
    function loadFile(){
        $f = $this->file; // use file name variable
        // if some problem with tmpl directory
        if(!is_dir(TMPL_DIR)){
            echo 'Kataloogi '.TMPL_DIR.' ei ole leitud<br/>';
            exit;
        }
        // if we already in tmpl directory - $this->file is 'tmpl/file.html'
        if(file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        // we can set path to template file: tmpl/file.html, $this->file is file.html
        $f = TMPL_DIR.$this->file;
        if(file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        // we can set only file name, $this->file is file
        $f = TMPL_DIR.$this->file.'.html';
        if(file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        if($this->content === false){
            echo 'Ei saanud lugeda faili '.$this->file.'.<br/>';
            exit;
        }
    }// loadFile
    function readFile($f){
        $this->content = file_get_contents($f);
    }// readFile
}// class end}