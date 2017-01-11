<?php

/**
 * Created by PhpStorm.
 * User: Ari
 * Date: 1/11/2017
 * Time: 3:15 PM
 */
// allow the use of text.php in ctext class file ;)
require_once('text.php');
class ctext extends text { // ctext begins
    var $color = false;
    // method
    // setColor
    function setColor($c) {
        $this->color = $c;
    } // setColor
    // show colored text
    function show()
    {
        if($this->color === false) {
            parent::show(); // use text class show function
        }else {
            echo"<font color=".$this->color.">".$this->str."</font><br/>";
        }

    }
} // ctext ends

?>