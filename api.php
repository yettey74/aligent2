<?php
require 'thyme.class.php';

// get / set values in post data if any
/* $dateObject1 = ($_POST['dateObject1'] != '' )? strtotime( $_POST['dateObject1'] ) : '';
$dateObject2 = ($_POST['dateObject2'] != '' )? strtotime( $_POST['dateObject2'] ) : '';
$timezone1 = ($_POST['timezone1'] != '' )? $_POST['timezone1'] : '';
$timezone2 = ($_POST['timezone2'] != '' )? $_POST['timezone2'] : '';
$datetype = ($_POST['datetype'] != '' )? $_POST['datetype'] : '';
$timetype = ($_POST['timetype'] != '' )? $_POST['timetype'] : ''; */

// Instantiate myDateTime Object
/* $cradle = new thyme($dateObject1,
                    $dateObject2,
                    $timezone1,
                    $timezone2,
                    $datetype,
                    $timetype
                ); */


/* 
$cradle1 = new thyme( strtotime('-1/-1/-1'), strtotime('9999/13/32'), 14, 14, 5, 5 ); .// OOB
$cradle1 = new thyme( strtotime('2021/06/26'), strtotime('2021/06/27'), 0, 0, 1, 0 );
$cradle2 = new thyme( strtotime('2021/06/26'), strtotime('2021/06/27'), -12, 12, 1, 0 );
$cradle3 = new thyme( strtotime('2021/06/26'), strtotime('2021/06/27'), -12, 13, 1, 0 );
$cradle4 = new thyme( strtotime('2021/06/26'), strtotime('2021/06/27'), -12, -12, 1, 0 );
                
echo $cradle1->_toString() . '<br>';
echo $cradle2->_toString() . '<br>';
echo $cradle3->_toString() . '<br>';
echo $cradle4->_toString() . '<br>';  
*/
$cradle1 = new thyme( strtotime('-1/-1/-1'), strtotime('9999/13/32'), 14, 14, 5, 5 );
echo $cradle1->_toString() . '<br>';
 


?>