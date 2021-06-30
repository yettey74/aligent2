<?php
require 'aligent.class.php';
$aligent = new Aligent();
/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

echo '<br>';
echo 'Year : ' . $aligent->_getYear( $date1 );
echo '<br>';
echo 'Year : ' . $aligent->_getYear( $date2 );
echo '<br>';

echo 'Is Date 1 : ';
echo $aligent->_isLeap( $date1 );
echo '<br>';
echo 'Is Leap Year : ';
echo ( $aligent->_isLeap( $date1 ))? 'True' : 'False';
echo '<br>';
echo 'Set Leap Day : ';
echo $frog1 = ( $aligent->_setFeb29( $date1 ))? 'True' : 'False';
echo '<br>';
echo $aligent->_setFeb29( $date1 )->format('c');
echo '<br>';
echo 'Is ' . ($date1)->format('c') . ' before ' . $aligent->_setFeb29( $date1 )->format('c');
echo '<br>';
if( $date1 < $aligent->_setFeb29( $date1 ) ){
    echo 'True';
} else {
    echo 'False';
}
echo '<br>';
echo 'leaps : ';
$frogger = $aligent->frogger( $date1, $date2 );
//echo  print_r( $frogger);
echo  $frogger;

echo '<br>';
echo 'Is ' . ($date2)->format('c') . ' after ' . $aligent->_setFeb29( $date2 )->format('c');
echo '<br>';
if( $date2 > $aligent->_setFeb29( $date2 ) ){
    echo 'True';
} else {
    echo 'False';
}
echo '<br>';
echo 'leaps : ';
$frogger = $aligent->frogger( $date1, $date2 );
//echo  print_r( $frogger);
echo  $frogger;

echo '<br>';
echo 'Total Days : ' . $aligent->getTotalDays( $date1, $date2 );
echo '<br>';
echo 'Total Days Between : ' . $aligent->getTotalDaysBetween( $date1, $date2 );
echo '<br>';
echo 'Total Weekdays : ' . $aligent->getweekdaysBetween( $date1, $date2 );
echo '<br>';
echo 'Complete Weeks: ' . $aligent->getcompleteWeeks( $date1, $date2 );
echo '<br>';
?>