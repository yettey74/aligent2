<?php
require 'aligent.class.php';
$aligent = new Aligent();
$short = date('1-1-21'); // year prefix 20 unless year > this year we revert to 19
$long = date('1-1-2021');
$long2 = date('1-1-2021');
$shortTime = date('1-1-21 00:00:00'); // year prefix 20 unless year > this year we revert to 19
$longtime = date('1-1-2021 00:00:00');

/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );


/* $datetest1 = $date1;
$datetest2 = $date2;

$tempDate1 = new DateTime();
$tempDate2 = new DateTime();

if( !( $datetest1 instanceof DateTime ) ){
    //$tempDate1 = $aligent->_isDateGood( $datetest1 )->format('c'); 
    $tempDate1->setDate( strtotime($datetest1) );   
    $tempDate1->setTimeZone( new DateTimeZone("Australia/Perth") );
}
if( !( $datetest2 instanceof DateTime ) ){
    //$tempDate2 = $aligent->_isDateGood( $datetest2 )->format('c'); 
    $tempDate2 = new DateTime( $datetest2 );  
    $tempDate2->setTimeZone( new DateTimeZone("Australia/Sydney") );
} */

/* $date1 = new DateTime( $tempDate1 );
$date2 = new DateTime( $tempDate2 ); */

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
echo 'Total Days Between Default: ' . $aligent->getTotalDaysBetween( $date1, $date2 );
echo '<br>';
echo 'Total Days Between Seconds: ' . $aligent->getTotalDaysBetween( $date1, $date2, 1 );
echo '<br>';
echo 'Total Days Between Minutes: ' . $aligent->getTotalDaysBetween( $date1, $date2, 2 );
echo '<br>';
echo 'Total Days Between Hours: ' . $aligent->getTotalDaysBetween( $date1, $date2, 3);
echo '<br>';
echo 'Total Days Between Years: ' . $aligent->getTotalDaysBetween( $date1, $date2, 4);
echo '<br>';
echo '<br>';
echo 'Total Weekdays : ' . $aligent->getweekdaysBetween( $date1, $date2 );
echo '<br>';
echo 'Complete Weeks: ' . $aligent->getcompleteWeeks( $date1, $date2 );
echo '<br>';

?>