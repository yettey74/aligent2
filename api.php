<?php
require 'thyme.class.php';

// get && set values in post data if any
$dateObject1 = ($_POST['dateObject1'] != '' )? strtotime( $_POST['dateObject1'] ) : '';
$dateObject2 = ($_POST['dateObject2'] != '' )? strtotime( $_POST['dateObject2'] ) : '';
$timezone1 = ($_POST['timezone1'] != '' )? $_POST['timezone1'] : '';
$timezone2 = ($_POST['timezone2'] != '' )? $_POST['timezone2'] : '';
$datetype = ($_POST['datetype'] != '' )? $_POST['datetype'] : '';
$timetype = ($_POST['timetype'] != '' )? $_POST['timetype'] : '';

// Instantiate myDateTime Object
$cradle = new thyme($dateObject1,
                    $dateObject2,
                    $timezone1,
                    $timezone2,
                    $datetype,
                    $timetype
                );      

echo $cradle->_apiObject( $cradle->getTimeType(), $cradle->getDateType() );

?>