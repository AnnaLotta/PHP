<?php
/**
 * Created by PhpStorm.
 * User: Ari
 * Date: 1/11/2017
 * Time: 2:49 PM
 */

require_once('text.php');

$sentence = new text();
echo '<pre>';
print_r($sentence);
echo '</pre>';
$sentence->setText('Hello text object!');
echo '<pre>';
print_r($sentence);
echo '</pre>';
$sentence->show();


?>