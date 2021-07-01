<?php
require 'aligent.class.php';
$aligent = new Aligent();

$pass = 0;
$fail = 0;
$errors = array();

/////////////////////////////////////
//              Same Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_sd = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_sd = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_sd = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_sd = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_sd = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $aligent->getTotalDaysBetween( $date1, $date2 ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault', 0, $testTotalDaysDefault_sd ]);
}

if( $testTotalDaysSeconds_sd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds', 0, $testTotalDaysSeconds_sd]);
}

if( $testTotalDaysMinutes_sd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_sd', 0, $testTotalDaysMinutes_sd]);
}

if( $testTotalDaysHours_sd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_sd', 0, $testTotalDaysHours_sd]);
}

if( $testTotalDaysYears_sd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_sd', 0, $testTotalDaysYears_sd]);
}

$testTotalDaysDefault_sdwd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_sdwd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_sdwd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_sdwd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_sdwd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_sdwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_sdwd', 0, $testTotalDaysDefault_sdwd ]);
}

if( $testTotalDaysSeconds_sdwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSecondswd', 0, $testTotalDaysSeconds_sdwd ]);
}

if( $testTotalDaysMinutes_sdwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_sdwd', 0, $testTotalDaysMinutes_sdwd ]);
}

if( $testTotalDaysHours_sdwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_sdwd', 0, $testTotalDaysHours_sdwd ]);
}

if( $testTotalDaysYears_sdwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_sdwd', 0, $testTotalDaysYears_sdwd ]);
}

$testTotalDaysDefault_sdcw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_sdcw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_sdcw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_sdcw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_sdcw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_sdcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_sdcw', 0, $testTotalDaysDefault_sdcw ]);
}

if( $testTotalDaysSeconds_sdcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_sdcw', 0, $testTotalDaysSeconds_sdcw ]);
}

if( $testTotalDaysMinutes_sdcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_sdcw', 0, $testTotalDaysMinutes_sdcw ]);
}

if( $testTotalDaysHours_sdcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_sdcw', 0, $testTotalDaysHours_sdcw ]);
}

if( $testTotalDaysYears_sdcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_sdcw', 0, $testTotalDaysYears_sdcw ]);
}


/////////////////////////////////////
//              Next Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-05T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_nd = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_nd = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_nd = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_nd = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_nd = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_nd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_nd', 0, $testTotalDaysDefault_nd]);
}

if( $testTotalDaysSeconds_nd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_nd', 0, $testTotalDaysSeconds_nd]);
}

if( $testTotalDaysMinutes_nd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_nd', 0, $testTotalDaysMinutes_nd]);
}

if( $testTotalDaysHours_nd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_nd', 0, $testTotalDaysHours_nd]);
}

if( $testTotalDaysYears_nd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_nd', 0, $testTotalDaysYears_nd]);
}


$testTotalDaysDefault_ndwd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_ndwd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_ndwd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_ndwd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_ndwd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_ndwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_ndwd', 0, $testTotalDaysDefault_ndwd ]);
}

if( $testTotalDaysSeconds_ndwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_ndwd', 0, $testTotalDaysSeconds_ndwd ]);
}

if( $testTotalDaysMinutes_ndwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_ndwd', 0, $testTotalDaysMinutes_ndwd ]);
}

if( $testTotalDaysHours_ndwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_ndwd', 0, $testTotalDaysHours_ndwd ]);
}

if( $testTotalDaysYears_ndwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_ndwd', 0, $testTotalDaysYears_ndwd ]);
}

$testTotalDaysDefault_ndcw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_ndcw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_ndcw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_ndcw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_ndcw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_ndcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_ndcw', 0, $testTotalDaysDefault_ndcw ]);
}

if( $testTotalDaysSeconds_ndcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_ndcw', 0, $testTotalDaysSeconds_ndcw ]);
}

if( $testTotalDaysMinutes_ndcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_ndcw', 0, $testTotalDaysMinutes_ndcw ]);
}

if( $testTotalDaysHours_sdcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_ndcw', 0, $testTotalDaysHours_ndcw ]);
}

if( $testTotalDaysYears_ndcw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_ndcw', 0, $testTotalDaysYears_ndcw ]);
}


/////////////////////////////////////
//              +2 Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-06T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_2 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_2 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_2 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_2 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_2 == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_2', 1, $testTotalDaysDefault_2]);
}

if( $testTotalDaysSeconds_2 == 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_2', 86400 , $testTotalDaysSeconds_2]);
}

if( $testTotalDaysMinutes_2 == 1400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_2', 1400 , $testTotalDaysMinutes_2]);
}

if( $testTotalDaysHours_2 == 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_2', 24 , $testTotalDaysHours_2]);
}

if( $testTotalDaysYears_2 == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_2', 0 , $testTotalDaysYears_2]);
}

$testTotalDaysDefault_2wd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_2wd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_2wd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_2wd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_2wd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_2wd == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_2wd', 1, $testTotalDaysDefault_2wd]);
}

if( $testTotalDaysSeconds_2wd == 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_2wd', 86400 , $testTotalDaysSeconds_2wd]);
}

if( $testTotalDaysMinutes_2wd == 1400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_2wd', 1400 , $testTotalDaysMinutes_2wd]);
}

if( $testTotalDaysHours_2wd == 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_2wd', 24 , $testTotalDaysHours_2wd]);
}

if( $testTotalDaysYears_2wd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_2wd', 0 , $testTotalDaysYears_2wd]);
}

$testTotalDaysDefault_2cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_2cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_2cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_2cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_2cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_2cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_2cw', 0, $testTotalDaysDefault_2cw]);
}

if( $testTotalDaysSeconds_2cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_2cw', 0 , $testTotalDaysSeconds_2cw]);
}

if( $testTotalDaysMinutes_2cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_2cw', 0 , $testTotalDaysMinutes_2cw]);
}

if( $testTotalDaysHours_2cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_2cw', 0 , $testTotalDaysHours_2cw]);
}

if( $testTotalDaysYears_2cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_2cw', 0 , $testTotalDaysYears_2cw]);
}

/////////////////////////////////////
//              +3 Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-07T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_3 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_3 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_3 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_3 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_3 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_3 == 1 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_3', 1 * 2, $testTotalDaysDefault_3]);
}

if( $testTotalDaysSeconds_3 == 86400 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_3', 86400 * 2, $testTotalDaysSeconds_3]);
}

if( $testTotalDaysMinutes_3 == 1400 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_3', 1400 * 2, $testTotalDaysMinutes_3]);
}

if( $testTotalDaysHours_3 == 24 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_3', 24 * 2, $testTotalDaysHours_3]);
}

if( $testTotalDaysYears_3 == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_3', 0, $testTotalDaysYears_3]);
}

$testTotalDaysDefault_3 = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_3 = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_3 = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_3 = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_3 = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_3 == 1 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_3', 1 * 2, $testTotalDaysDefault_3]);
}

if( $testTotalDaysSeconds_3 == 86400 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_3', 86400 * 2, $testTotalDaysSeconds_3]);
}

if( $testTotalDaysMinutes_3 == 1400 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_3', 1400 * 2, $testTotalDaysMinutes_3]);
}

if( $testTotalDaysHours_3 == 24 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_3', 24 * 2, $testTotalDaysHours_3]);
}

if( $testTotalDaysYears_3 == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_3', 0, $testTotalDaysYears_3]);
}

$testTotalDaysDefault_3cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_3cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_3cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_3cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_3cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_3cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_3cw', 0, $testTotalDaysDefault_3cw]);
}

if( $testTotalDaysSeconds_3cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_3cw', 0, $testTotalDaysSeconds_3cw]);
}

if( $testTotalDaysMinutes_3cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_3cw', 0, $testTotalDaysMinutes_3cw]);
}

if( $testTotalDaysHours_3cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_3cw', 0, $testTotalDaysHours_3cw]);
}

if( $testTotalDaysYears_3cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_3cw', 0, $testTotalDaysYears_3cw]);
}


/////////////////////////////////////
//              +4 Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_4 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_4 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_4 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_4 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_4 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_4 == 1 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_4', 1 * 3, $testTotalDaysDefault_4]);
}

if( $testTotalDaysSeconds_4 == 86400 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_4', 86400 * 3, $testTotalDaysSeconds_4]);
}

if( $testTotalDaysMinutes_4 == 1400 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_4', 1400 * 3, $testTotalDaysMinutes_4]);
}

if( $testTotalDaysHours_4 == 24 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_4', 24 * 3, $testTotalDaysHours_4]);
}

if( $testTotalDaysYears_4 == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_4', 0, $testTotalDaysYears_4]);
}

$testTotalDaysDefault_4wd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_4wd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_4wd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_4wd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_4wd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_4wd == 1 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_4wd', 1 * 3, $testTotalDaysDefault_4wd]);
}

if( $testTotalDaysSeconds_4wd == 86400 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_4wd', 86400 * 3, $testTotalDaysSeconds_4wd]);
}

if( $testTotalDaysMinutes_4wd == 1400 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_4wd', 1400 * 3, $testTotalDaysMinutes_4wd]);
}

if( $testTotalDaysHours_4wd == 24 * 3 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_4wd', 24 * 3, $testTotalDaysHours_4wd]);
}

if( $testTotalDaysYears_4wd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_4wd', 0, $testTotalDaysYears_4]);
}

$testTotalDaysDefault_4cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_4cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_4cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_4cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_4cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_4cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_4cw', 0, $testTotalDaysDefault_4cw]);
}

if( $testTotalDaysSeconds_4cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_4cw', 0, $testTotalDaysSeconds_4cw]);
}

if( $testTotalDaysMinutes_4cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_4cw', 0, $testTotalDaysMinutes_4cw]);
}

if( $testTotalDaysHours_4cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_4cw', 0, $testTotalDaysHours_4cw]);
}

if( $testTotalDaysYears_4cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_4cw', 0, $testTotalDaysYears_4cw]);
}

/////////////////////////////////////
//              +5 Day             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-09T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_5 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_5 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_5 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_5 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_5 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_5 == 1 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_5', 1 * 4, $testTotalDaysDefault_5]);
}

if( $testTotalDaysSeconds_5 == 86400 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_5', 86400 * 4, $testTotalDaysSeconds_5]);
}

if( $testTotalDaysMinutes_5 == 1400 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_5', 1400 * 4, $testTotalDaysMinutes_5]);
}

if( $testTotalDaysHours_5 == 24 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_5', 24 * 4, $testTotalDaysHours_5]);
}

if( $testTotalDaysYears_5 == 0 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_5', 0, $testTotalDaysYears_5]);
}

$testTotalDaysDefault_5wd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_5wd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_5wd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_5wd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_5wd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_5wd == 1 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_5wd', 1 * 4, $testTotalDaysDefault_5wd]);
}

if( $testTotalDaysSeconds_5wd == 86400 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_5wd', 86400 * 4, $testTotalDaysSeconds_5wd]);
}

if( $testTotalDaysMinutes_5wd == 1400 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_5wd', 1400 * 4, $testTotalDaysMinutes_5wd]);
}

if( $testTotalDaysHours_5wd == 24 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_5wd', 24 * 4, $testTotalDaysHours_5wd]);
}

if( $testTotalDaysYears_5wd == 0 * 4 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_5wd', 0, $testTotalDaysYears_5wd]);
}

$testTotalDaysDefault_5cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_5cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_5cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_5cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_5cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_5cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_5cw', 0, $testTotalDaysDefault_5cw]);
}

if( $testTotalDaysSeconds_5cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_5cw', 0, $testTotalDaysSeconds_5cw]);
}

if( $testTotalDaysMinutes_5cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_5cw', 0, $testTotalDaysMinutes_5cw]);
}

if( $testTotalDaysHours_5cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_5cw', 0, $testTotalDaysHours_5cw]);
}

if( $testTotalDaysYears_5cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_5cw', 0, $testTotalDaysYears_5cw]);
}

/////////////////////////////////////
//              +6 Day             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-10T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_6 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_6 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_6 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_6 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_6 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_6 == 1 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_6', 1 * 5, $testTotalDaysDefault_6]);
}

if( $testTotalDaysSeconds_6 == 86400 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_6', 86400 * 5, $testTotalDaysSeconds_6]);
}

if( $testTotalDaysMinutes_6 == 1400 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_6', 1400 * 5, $testTotalDaysMinutes_6]);
}

if( $testTotalDaysHours_6 == 24 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_6', 24 * 5, $testTotalDaysHours_6]);
}

if( $testTotalDaysYears_6 == 0 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_6', 0, $testTotalDaysYears_6]);
}

$testTotalDaysDefault_6wd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_6wd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_6wd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_6wd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_6wd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_6wd == 1 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_6wd', 1 * 5, $testTotalDaysDefault_6wd]);
}

if( $testTotalDaysSeconds_6wd == 86400 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_6wd', 86400 * 5, $testTotalDaysSeconds_6wd]);
}

if( $testTotalDaysMinutes_6wd == 1400 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_6wd', 1400 * 5, $testTotalDaysMinutes_6wd]);
}

if( $testTotalDaysHours_6wd == 24 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_6wd', 24 * 5, $testTotalDaysHours_6wd]);
}

if( $testTotalDaysYears_6wd == 0 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_6wd', 0, $testTotalDaysYears_6wd]);
}

$testTotalDaysDefault_6cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_6cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_6cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_6cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_6cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_6cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_6cw', 0, $testTotalDaysDefault_6cw]);
}

if( $testTotalDaysSeconds_6cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_6cw', 0, $testTotalDaysSeconds_6cw]);
}

if( $testTotalDaysMinutes_6cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_6cw', 0, $testTotalDaysMinutes_6cw]);
}

if( $testTotalDaysHours_6cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_6cw', 0, $testTotalDaysHours_6cw]);
}

if( $testTotalDaysYears_6cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_6cw', 0, $testTotalDaysYears_6cw]);
}

/////////////////////////////////////
//              +7 Day             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-11T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_7 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_7 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_7 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_7 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_7 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_7 == 1 * 6 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_7', 1 * 6, $testTotalDaysDefault_7]);
}

if( $testTotalDaysSeconds_7 == 86400 * 6 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_7', 86400 * 6, $testTotalDaysSeconds_7]);
}

if( $testTotalDaysMinutes_7 == 1400 * 6 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_7', 1400 * 6, $testTotalDaysMinutes_7]);
}

if( $testTotalDaysHours_7 == 24 * 6 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_7', 24 * 6, $testTotalDaysHours_7]);
}

if( $testTotalDaysYears_7 == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_7', 0 , $testTotalDaysYears_7]);
}


$testTotalDaysDefault_7wd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_7wd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_7wd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_7wd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_7wd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_7wd == 1 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_7wd', 1 * 5, $testTotalDaysDefault_7wd]);
}

if( $testTotalDaysSeconds_7wd == 86400 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_7wd', 86400 * 5, $testTotalDaysSeconds_7wd]);
}

if( $testTotalDaysMinutes_7wd == 1400 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_7wd', 1400 * 5, $testTotalDaysMinutes_7wd]);
}

if( $testTotalDaysHours_7wd == 24 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_7wd', 24 * 5, $testTotalDaysHours_7wd]);
}

if( $testTotalDaysYears_7wd == 0 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_7wd', 0, $testTotalDaysYears_7wd]);
}

$testTotalDaysDefault_7cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_7cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_7cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_7cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_7cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_7cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_7cw', 0, $testTotalDaysDefault_7cw]);
}

if( $testTotalDaysSeconds_7cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_7cw', 0, $testTotalDaysSeconds_7cw]);
}

if( $testTotalDaysMinutes_7cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_7cw', 0, $testTotalDaysMinutes_7cw]);
}

if( $testTotalDaysHours_7cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_7cw', 0, $testTotalDaysHours_7cw]);
}

if( $testTotalDaysYears_7cw == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_7cw', 0, $testTotalDaysYears_7cw]);
}

/////////////////////////////////////
//              2 Weeks            ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-18T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_14 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_14 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_14 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_14 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_14 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_14 == 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_14', 1 * 13, $testTotalDaysDefault_14]);
}

if( $testTotalDaysSeconds_14 == 86400 * 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_14', 86400 * 13, $testTotalDaysSeconds_14]);
}

if( $testTotalDaysMinutes_14 == 1400 * 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_14', 1400 * 13, $testTotalDaysMinutes_14]);
}

if( $testTotalDaysHours_14 == 24 * 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_14', 24 * 13, $testTotalDaysHours_14]);
}

if( $testTotalDaysYears_14 == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_14', 0, $testTotalDaysYears_14]);
}

$testTotalDaysDefault_14wd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_14wd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_14wd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_14wd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_14wd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_14wd == 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_14wd', 1 * 10, $testTotalDaysDefault_14wd]);
}

if( $testTotalDaysSeconds_14wd == 86400 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_14wd', 86400 * 10, $testTotalDaysSeconds_14wd]);
}

if( $testTotalDaysMinutes_14wd == 1400 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_14wd', 1400 * 10, $testTotalDaysMinutes_14wd]);
}

if( $testTotalDaysHours_14wd == 24 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_14wd', 24 * 10, $testTotalDaysHours_14wd]);
}

if( $testTotalDaysYears_14wd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_14wd', 0, $testTotalDaysYears_14wd]);
}

$testTotalDaysDefault_14cw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_14cw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_14cw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_14cw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_14cw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_14cw == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_14cw', 1, $testTotalDaysDefault_14cw]);
}

if( $testTotalDaysSeconds_14cw == 86400 * 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_14cw', 86400 * 13, $testTotalDaysSeconds_14cw]);
}

if( $testTotalDaysMinutes_14cw == 1400 * 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_14cw', 1400 * 13, $testTotalDaysMinutes_14cw]);
}

if( $testTotalDaysHours_14cw == 24 * 13 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_14cw', 24 * 13, $testTotalDaysHours_14cw]);
}

if( $testTotalDaysYears_14cw == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_14cw', 1, $testTotalDaysYears_14cw]);
}

/////////////////////////////////////
//              1 Year             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2022-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_y = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_y = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_y = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_y = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_y = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_y == 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_y', 364 , $testTotalDaysDefault_y]);
}

if( $testTotalDaysSeconds_y == 86400 * 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_y', 86400 * 364, $testTotalDaysSeconds_y]);
}

if( $testTotalDaysMinutes_y == 1400 * 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_y', 1400 * 364, $testTotalDaysMinutes_y]);
}

if( $testTotalDaysHours_y == 24 * 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_y', 24 * 364, $testTotalDaysHours_y]);
}

if( $testTotalDaysYears_y == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_y', 0, $testTotalDaysYears_y]);
}

$testTotalDaysDefault_ywd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_ywd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_ywd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_ywd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_ywd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_ywd == 52 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_ywd', 52 * 5 , $testTotalDaysDefault_ywd]);
}

if( $testTotalDaysSeconds_ywd == 86400 * 52 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_ywd', 86400 * 52 * 5, $testTotalDaysSeconds_ywd]);
}

if( $testTotalDaysMinutes_ywd == 1400 * 52 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_ywd', 1400 * 52 * 5, $testTotalDaysMinutes_ywd]);
}

if( $testTotalDaysHours_ywd == 24 * 52 * 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_ywd', 24 * 52 * 5, $testTotalDaysHours_ywd]);
}

if( $testTotalDaysYears_ywd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_ywd', 0, $testTotalDaysYears_ywd]);
}


$testTotalDaysDefault_ycw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_ycw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_ycw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_ycw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_ycw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_ycw == 52 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_ycw', 52 , $testTotalDaysDefault_ycw]);
}

if( $testTotalDaysSeconds_ycw == 86400 * 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_ycw', 86400 * 364, $testTotalDaysSeconds_ycw]);
}

if( $testTotalDaysMinutes_ycw == 1400 * 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_ycw', 1400 * 364, $testTotalDaysMinutes_ycw]);
}

if( $testTotalDaysHours_ycw == 24 * 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_ycw', 24 * 364, $testTotalDaysHours_ycw]);
}

if( $testTotalDaysYears_ycw == 52 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_ycw', 52, $testTotalDaysYears_ycw]);
}

/////////////////////////////////////
//              1 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1989-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_frogger = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_frogger = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_frogger = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_frogger = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_frogger = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_frogger == 1 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_frogger', 1 * 365, $testTotalDaysDefault_frogger]);
}

if( $testTotalDaysSeconds_frogger == 86400 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_frogger', 86400 * 365, $testTotalDaysSeconds_frogger]);
}

if( $testTotalDaysMinutes_frogger == 1400 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_frogger', 1400 * 365, $testTotalDaysMinutes_frogger]);
}

if( $testTotalDaysHours_frogger == 24 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_frogger', 24 * 365, $testTotalDaysHours_frogger]);
}

if( $testTotalDaysYears_frogger == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_frogger', 0, $testTotalDaysYears_frogger]);
}

$testTotalDaysDefault_froggerwd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_froggerwd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_froggerwd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_froggerwd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_froggerwd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_froggerwd == 261 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_froggerwd', 261, $testTotalDaysDefault_froggerwd]);
}

if( $testTotalDaysSeconds_froggerwd == 86400 * 261 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_froggerwd', ( 86400 * 261), $testTotalDaysSeconds_froggerwd]);
}

if( $testTotalDaysMinutes_froggerwd == ( 1400 * 261 )   )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_froggerwd', ( 1400 * 261 ), $testTotalDaysMinutes_froggerwd]);
}

if( $testTotalDaysHours_froggerwd == ( 24 * 261 )  )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_froggerwd', ( 24 * 261 ), $testTotalDaysHours_froggerwd]);
}

if( $testTotalDaysYears_froggerwd == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_froggerwd', 0, $testTotalDaysYears_froggerwd]);
}

$testTotalDaysDefault_froggercw = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_froggercw = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_froggercw = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_froggercw = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_froggercw = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_froggercw == 52 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_froggercw', 52, $testTotalDaysDefault_froggercw]);
}

if( $testTotalDaysSeconds_froggercw == 86400 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_froggercw', 86400 * 365, $testTotalDaysSeconds_froggercw]);
}

if( $testTotalDaysMinutes_frogger == 1400 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_frogger', 1400 * 365, $testTotalDaysMinutes_frogger]);
}

if( $testTotalDaysHours_frogger == 24 * 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_frogger', 24 * 365, $testTotalDaysHours_frogger]);
}

if( $testTotalDaysYears_frogger == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_frogger', 0, $testTotalDaysYears_frogger]);
}

/////////////////////////////////////
//              2 Years            ///
////////////////////////////////////////
$date1 = new DateTime( "2019-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_y2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_y2 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_y2 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_y2 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_y2 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_y2 == 365 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_y2', 365 * 2 , $testTotalDaysDefault_y2]);
}

if( $testTotalDaysSeconds_y2 == 86400 * 365 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_y2', 86400 * 365 * 2, $testTotalDaysSeconds_y2]);
}

if( $testTotalDaysMinutes_y2 == 1400 * 365 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_y2', 1400 * 365 * 2, $testTotalDaysMinutes_y2]);
}

if( $testTotalDaysHours_y2 == 24 * 365 * 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_y2', 24 * 365 * 2, $testTotalDaysHours_y2]);
}

if( $testTotalDaysYears_y2 == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_y2', 1, $testTotalDaysYears_y2]);
}

/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$testTotalDaysDefault_frogger2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_frogger2 = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_frogger2 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_frogger2 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_frogger2 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_frogger2 == 3287 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_frogger2', 3287 , $testTotalDaysDefault_frogger2]);
}

if( $testTotalDaysSeconds_frogger2 == 3287 * 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_frogger2',3287 * 86400 , $testTotalDaysSeconds_frogger2]);
}

if( $testTotalDaysMinutes_frogger2 == ( 3287 * 1400 ) )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_frogger2', 3287 * 1400 , $testTotalDaysMinutes_frogger2]);
}

if( $testTotalDaysHours_frogger2 == 3287 * 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_frogger2', 3287 * 24 , $testTotalDaysHours_frogger2]);
}

if( $testTotalDaysYears_frogger2 == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_frogger2', 8, $testTotalDaysYears_frogger2]);
}

$testTotalDaysDefault_froggerwd2 = $aligent->getweekdaysBetween( $date1, $date2 ); //
$testTotalDaysSeconds_froggerwd2 = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_froggerwd2 = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$testTotalDaysHours_froggerwd2 = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$testTotalDaysYears_froggerwd2 = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_froggerwd2 == 2349 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_froggerwd2', 2349 , $testTotalDaysDefault_froggerwd2]);
}

if( $testTotalDaysSeconds_froggerwd2 == 86400 * 2349 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_froggerwd2', 86400 * 2349 , $testTotalDaysSeconds_froggerwd2]);
}

if( $testTotalDaysMinutes_froggerwd2 == ( 1400 * 2349 )   )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_froggerwd2', 1400 * 2349  , $testTotalDaysMinutes_froggerwd2]);
}

if( $testTotalDaysHours_froggerwd2 == ( 24 * 2349 )  )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_froggerwd2', 24 * 2349 , $testTotalDaysHours_froggerwd2]);
}

if( $testTotalDaysYears_froggerwd2 == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_froggerwd2', 8, $testTotalDaysYears_froggerwd2]);
}

$testTotalDaysDefault_froggercw2 = $aligent->getcompleteWeeks( $date1, $date2 ); //
$testTotalDaysSeconds_froggercw2 = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$testTotalDaysMinutes_froggercw2 = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$testTotalDaysHours_froggercw2 = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$testTotalDaysYears_froggercw2 = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 

if( $testTotalDaysDefault_froggercw2 == 469 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysDefault_froggercw2', 469, $testTotalDaysDefault_froggercw2]);
}

if( $testTotalDaysSeconds_froggercw2 == 86400 * 469 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysSeconds_froggercw2', 86400 * 469, $testTotalDaysSeconds_froggercw2]);
}

if( $testTotalDaysMinutes_froggercw2 == 1400 * 469 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysMinutes_froggercw2', 1400 * 469, $testTotalDaysMinutes_froggercw2]);
}

if( $testTotalDaysHours_froggercw2 == 24 * 469 * 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysHours_froggercw2', 24 * 469 * 7 , $testTotalDaysHours_froggercw2]);
}

if( $testTotalDaysYears_froggercw2 == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['testTotalDaysYears_froggercw2', 8, $testTotalDaysYears_froggercw2]);
}

############################################
##              RESULTS SCREEN            ##
############################################ 
?>
<table>
<tr>
    <td>Total tests</td>
    <td><?php echo $pass + $fail; ?></td>
</tr><tr>
    <td>Success rate</td>
    <td><?php echo round( ( $pass / ( $pass + $fail ) * 100 ), 2) . '% ' ?></td>
</tr>
</table>
<?php if( $fail > 0 ){?>
<table>
<tr>
    <th>Failed Test</th>
    <th>Expect</th>
    <th>Result</th>
</tr>
<?php 
foreach( $errors as $error ){
?>
<tr>
<td><?php echo $error[0]; ?></td>
<td style="text-align:center"><?php echo $error[1]; ?></td>
<td><?php echo $error[2]; ?></td>
</tr>
<?php } }?>