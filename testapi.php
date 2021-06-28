<?php
require 'thyme.class.php';   
$cradle = new thyme( [], [], [],[], [], [] ); // Is Array
//echo $cradle->_toString() . '<br>';
echo $cradle->_apiObject( $cradle->getTimeType(), $cradle->getDateType() );
?>