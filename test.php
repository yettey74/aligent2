<?php
require 'aligent.class.php';
$aligent = new Aligent();
/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

echo '<br>';
echo 'Start date : ' . ( $date1 )->format('c');
echo '<br>';
echo 'Start Year : ' . $aligent->_getYear( $date1 );
echo '<br>';
echo '<br>';
echo 'End date : ' . ( $date2 )->format('c');
echo '<br>';
echo 'End Year : ' . $aligent->_getYear( $date2 );
echo '<br>';
echo '<br>';
echo 'Is Start date in a Leap Year : ';
echo ( $aligent->_isLeap( $date1 ))? 'True' : 'False';
echo '<br>';
$frog_start = $aligent->_setFeb29Start( $date1 )->format('c');
echo ( $date1 )->format('c');
if( $date1 > $frog_start ){
    echo ' is ';
} else {
    echo ' is not ';
}
echo 'before ' . $frog_start ;
echo '<br>';
echo '<br>';

echo 'Is End date in a Leap Year : ';
echo ( $aligent->_isLeap( $date2 ))? 'True' : 'False';
echo '<br>';
$frog_end = $aligent->_setFeb29End( $date2 )->format('c');
echo ( $date2 )->format('c');
if( $date2 < $frog_end ){
    echo ' is ';
} else {
    echo ' is not ';
}
echo 'after ' . $frog_end;
echo '<br>';
echo '<br>';

echo 'leaps : ';
$frogger = $aligent->frogger( $date1, $date2 );
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