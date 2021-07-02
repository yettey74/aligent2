<?php
require 'aligent.class.php';
$aligent = new Aligent();
$singleyearslash = date('1/1/1'); //2001-01-01T00:00:00+00:00
$singleyearhyphen = date('1-1-1'); //2001-01-01T00:00:00+00:00
$shortString = '1-1-21'; // 2021-01-01T00:00:00+00:00
$shortdate = date('1-1-21'); // 2021-01-01T00:00:00+00:00
$short01 = date('01-01-01'); //2001-01-01T00:00:00+00:00
$short10 = date('1-1-10'); // 2010-01-01T00:00:00+00:00
$short11 = date('1-1-11'); // 2011-01-01T00:00:00+00:00
$short50 = date('1-1-50'); // 2050-01-01T00:00:00+00:00
$short99 = date('1-1-99'); // 1999-01-01T00:00:00+00:00
$short100 = date('1-1-100'); // 0100-01-01T00:00:00+00:00
$short1000 = date('1-1-1000'); // 1000-01-01T00:00:00+00:00
$long = date('1-1-2021'); // 2021-01-01T00:00:00+00:00
$shortTime = date('1-1-21 12:00:00'); // 2021-01-01T00:00:00+00:00
$longtime = date('1-1-2021 00:00:00'); // 2021-01-01T00:00:00+00:00
$shortTimeT = date('1-1-21T00:00:00'); // 2021-01-01T00:00:00+00:00
$formedString_TZ_false = date('1-1-2021T00:00:00'); // 2021-01-01T00:00:00+00:00
$formedString_TZ_true = date('1-1-2021T00:00:00+00:00'); // 2021-01-01T00:00:00+00:00
$formedString_TZ_00 = date('1/1/2021T00:00:00+00:00'); // 2021-01-01T00:00:00+00:00
$formedString_TZ_12 = date('1/1/2021T00:00:00+12:00'); // 2021-01-01T00:00:00+00:00

// SET DATE HERE //
$dateString = $short10;

// Time strings .. also check for things like AM/PM
$hour12 = '00:00:00'; // Limit
$hour12 = '00:00:01'; // Limit
$hour12 = '1:01:01'; // in range
$hour12 = '1:01:01 AM'; // in range
$hour12 = '12:00:00'; // Limit
$hour24 = '24:00:00'; // limit
$hour24 = '25:00:00'; // OOB Return 00:00:00
$hour24 = '-1:00:00'; // OOB Return 00:00:00
$hour24 = 'a:00:00'; // OOB Return 00:00:00

// we can check if T is already present
// if not then append T to end of Date 
// append time
// if there is a TZ then we append a Z to the end of time

// TZ strings -- many so lets use UTC, adelaide

$concantdate = $shortString . '' . $hour12;


$date1 = $aligent->_dateConverter( $dateString );

/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
/* $date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); */
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
if( $date2 > $frog_end ){
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