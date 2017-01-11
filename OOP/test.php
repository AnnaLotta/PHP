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
// set text
$sentence->setText('Hello text object!');
echo '<pre>';
print_r($sentence);
echo '</pre>';
// show object output
$sentence->show();
echo '<hr/>';
// create an object
// sentence 2
$sentence2 = new text('Hello text by construct.');
// control object output
echo '<pre>';
print_r($sentence2);
echo '</pre>';

echo '<hr/>';
// create an object
$sentence3 = new ctext('Hello coloured text by construct');
// control object output
echo '<pre>';
print_r($sentence3);
echo '</pre>';
// show object output
$sentence3->show();
$sentence3->setColor("red");
$sentence3->show();
echo'<hr/>'

?>