<?php
require '../aligent.class.php';
$aligent = new Aligent();
$year1 = date('1-1-1'); //0001-01-01T00:00:00+00:00
$year2 = date('1-1-2'); //0000-01-01T00:00:00+00:00

$date1 = $aligent->_dateConverter( $year1 );
$date2 = $aligent->_dateConverter( $year2 );
echo '<br>';
echo ($date1)->format('c');
echo '<br>';
echo ($date2)->format('c');
echo '<br>';


// lets play with sub


/* $date1 = new DateTime( $thisDate1, new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( $thisDate2, new DateTimeZone( "Australia/Adelaide" ) ); // Tuesday */

?>