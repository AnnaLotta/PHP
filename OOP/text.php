<?php

/**
 * Created by PhpStorm.
 * User: Ari
 * Date: 1/11/2017
 * Time: 2:23 PM
 */
class text { // text class begins
        // class variables = instance variables
    var $str = '';
    // constructor
    function __construct($s = ''){
        $this->setText($s);
    } // construct

    // methods
        // set text function
    function setText($s) {
        $this->str=$s;
    } //setText end

        // show text function
    function show() {
        echo $this->str.'<br/>';
    } // show end
} // text class ends
?>