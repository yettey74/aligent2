<?php
/**
 * This Testunit will check each object variable
 * If the test returns a '0' then we have either an error 
 * or an actual result where 2 dates are < 1 day
 * nil error chack on OBJECT or CONST
 */

require 'thyme.class.php';

$pass = 0;
$fail = 0;
$errors = array(); 

############################################
## Test harness to check date object 1    ##
############################################

$dateobject1a = new thyme( strtotime('9999/12/31'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Upper limit
$dateobject1b = new thyme( strtotime('0000/1/1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Lower limit
$dateobject1c = new thyme( strtotime('-1/-1/-1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // OOB
$dateobject1d = new thyme( strtotime('99999/13/32'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // OOB
$dateobject1e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // In Range
$dateobject1f = new thyme( strtotime('a'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is Nan
$dateobject1g = new thyme( strtotime(NULL), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is Null
$dateobject1h = new thyme( strtotime(' '), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is space
$dateobject1i = new thyme( strtotime(''), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is empty
$dateobject1j = new thyme( '', strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is empty
$dateobject1k = new thyme( ' ', strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is space
$dateobject1l = new thyme( NULL, strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is Null
$dateobject1m = new thyme( 'a', strtotime('2021/1/2'), 0, 0, 3, 0 ); // In Nan
$dateobject1n = new thyme( '2021/1/1', strtotime('2021/1/2'), 0, 0, 3, 0 ); // In Range
$dateobject1o = new thyme( '99999/13/32', strtotime('2021/1/2'), 0, 0, 3, 0 ); // OOB
$dateobject1p = new thyme( '-1/-1/-1', strtotime('2021/1/2'), 0, 0, 3, 0 ); // OOB
$dateobject1q = new thyme( '0000/1/1', strtotime('2021/1/2'), 0, 0, 3, 0 ); // Lower limit
$dateobject1r = new thyme( '9999/12/31', strtotime('2021/1/2'), 0, 0, 3, 0 ); // Upper limit
$dateobject1s = new thyme( [], strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is Array
( $dateobject1a >= '0' ) ? $pass++ : $fail++;
( $dateobject1b >= '0' ) ? $pass++ : $fail++;
( $dateobject1c >= '0' ) ? $pass++ : $fail++;
( $dateobject1d >= '0' ) ? $pass++ : $fail++;
( $dateobject1e >= '0' ) ? $pass++ : $fail++;
( $dateobject1f >= '0' ) ? $pass++ : $fail++;
( $dateobject1g >= '0' ) ? $pass++ : $fail++;
( $dateobject1h >= '0' ) ? $pass++ : $fail++;
( $dateobject1i >= '0' ) ? $pass++ : $fail++;
( $dateobject1j >= '0' ) ? $pass++ : $fail++;
( $dateobject1k >= '0' ) ? $pass++ : $fail++;
( $dateobject1l >= '0' ) ? $pass++ : $fail++;
( $dateobject1m >= '0' ) ? $pass++ : $fail++;
( $dateobject1n >= '0' ) ? $pass++ : $fail++;
( $dateobject1o >= '0' ) ? $pass++ : $fail++;
( $dateobject1p >= '0' ) ? $pass++ : $fail++;
( $dateobject1q >= '0' ) ? $pass++ : $fail++;
( $dateobject1r >= '0' ) ? $pass++ : $fail++;
( $dateobject1s >= '0' ) ? $pass++ : $fail++;
############################################
## Test harness to check date object 2    ##
############################################

$dateobject2a = new thyme( strtotime('2021/1/1'), strtotime('9999/12/31'), 0, 0, 3, 0 ); // limit
$dateobject2b = new thyme( strtotime('2021/1/1'), strtotime('0000/1/1'), 0, 0, 3, 0 ); // limit
$dateobject2c = new thyme( strtotime('2021/1/1'), strtotime('-1/-1/-1'), 0, 0, 3, 0 ); // OOB
$dateobject2d = new thyme( strtotime('2021/1/1'), strtotime('99999/13/32'), 0, 0, 3, 0 ); // OOB
$dateobject2e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 3, 0 ); // In Range
$dateobject2f = new thyme( strtotime('2021/1/1'), strtotime('a'), 0, 0, 3, 0 ); // Is Nan
$dateobject2g = new thyme( strtotime('2021/1/1'), strtotime(NULL), 0, 0, 3, 0 ); // Is Null
$dateobject2h = new thyme( strtotime('2021/1/1'), strtotime(' '), 0, 0, 3, 0 ); // Is space
$dateobject2i = new thyme( strtotime('2021/1/1'), strtotime(''), 0, 0, 3, 0 ); // Is empty
$dateobject2j = new thyme( strtotime('2021/1/1'), '9999/12/31', 0, 0, 3, 0 ); // limit
$dateobject2k = new thyme( strtotime('2021/1/1'), '0000/1/1', 0, 0, 3, 0 ); // limit
$dateobject2l = new thyme( strtotime('2021/1/1'), '-1/-1/-1', 0, 0, 3, 0 ); // OOB
$dateobject2m = new thyme( strtotime('2021/1/1'), '99999/13/32', 0, 0, 3, 0 ); // OOB
$dateobject2n = new thyme( strtotime('2021/1/1'), '2021/1/1', 0, 0, 3, 0 ); // In Range
$dateobject2o = new thyme( strtotime('2021/1/1'), 'a', 0, 0, 3, 0 ); // Is Nan
$dateobject2p = new thyme( strtotime('2021/1/1'), NULL, 0, 0, 3, 0 ); // Is Null
$dateobject2q = new thyme( strtotime('2021/1/1'), ' ', 0, 0, 3, 0 ); // Is space
$dateobject2r = new thyme( strtotime('2021/1/1'), '', 0, 0, 3, 0 ); // Is empty
$dateobject2s = new thyme( strtotime('2021/1/2'), [], 0, 0, 3, 0 ); // Is Array
( $dateobject2a >= '0' ) ? $pass++ : $fail++;
( $dateobject2b >= '0' ) ? $pass++ : $fail++;
( $dateobject2c >= '0' ) ? $pass++ : $fail++;
( $dateobject2d >= '0' ) ? $pass++ : $fail++;
( $dateobject2e >= '0' ) ? $pass++ : $fail++;
( $dateobject2f >= '0' ) ? $pass++ : $fail++;
( $dateobject2g >= '0' ) ? $pass++ : $fail++;
( $dateobject2h >= '0' ) ? $pass++ : $fail++;
( $dateobject2i >= '0' ) ? $pass++ : $fail++;
( $dateobject2j >= '0' ) ? $pass++ : $fail++;
( $dateobject2k >= '0' ) ? $pass++ : $fail++;
( $dateobject2l >= '0' ) ? $pass++ : $fail++;
( $dateobject2m >= '0' ) ? $pass++ : $fail++;
( $dateobject2n >= '0' ) ? $pass++ : $fail++;
( $dateobject2o >= '0' ) ? $pass++ : $fail++;
( $dateobject2p >= '0' ) ? $pass++ : $fail++;
( $dateobject2q >= '0' ) ? $pass++ : $fail++;
( $dateobject2r >= '0' ) ? $pass++ : $fail++;
( $dateobject2s >= '0' ) ? $pass++ : $fail++;

#############################################
## Test harness to check timezone object 1 ##
#############################################

$tz1a = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), -12, 0, 3, 0 ); // limit
$tz1b = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 13, 0, 3, 0 ); // limit
$tz1c = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), -13, 0, 3, 0 ); // OOB
$tz1d = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 14, 0, 3, 0 ); // OOB
$tz1e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 1, 0, 3, 0 ); // In Range
$tz1f = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 'a', 0, 3, 0 ); // Is Nan
$tz1g = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), NULL, 0, 3, 0 ); // Is Null
$tz1h = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), ' ', 0, 3, 0 ); // Is space
$tz1i = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), '', 0, 3, 0); // Is empty
$tz1j = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), [], 0, 3, 0 ); // Is Array
( $tz1a >= '0' ) ? $pass++ : $fail++;
( $tz1b >= '0' ) ? $pass++ : $fail++;
( $tz1c >= '0' ) ? $pass++ : $fail++;
( $tz1d >= '0' ) ? $pass++ : $fail++;
( $tz1e >= '0' ) ? $pass++ : $fail++;
( $tz1f >= '0' ) ? $pass++ : $fail++;
( $tz1g >= '0' ) ? $pass++ : $fail++;
( $tz1h >= '0' ) ? $pass++ : $fail++;
( $tz1i >= '0' ) ? $pass++ : $fail++;
( $tz1j >= '0' ) ? $pass++ : $fail++;

#############################################
## Test harness to check timezone object 2 ##
#############################################

$tz2a = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, -12, 3, 0 ); // limit
$tz2b = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 13, 3, 0 ); // limit
$tz2c = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, -13, 3, 0 ); // OOB
$tz2d = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 14, 3, 0 ); // OOB
$tz2e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 1, 3, 0 ); // In Range
$tz2f = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0,'a', 3, 0 ); // Is Nan
$tz2g = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, NULL, 3, 0 ); // Is Null
$tz2h = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, ' ', 3, 0 ); // Is space
$tz2i = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, '', 3, 0 ); // Is empty
$tz2j = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, [], 3, 0 ); // Is Array
( $tz2a >= '0' ) ? $pass++ : $fail++;
( $tz2b >= '0' ) ? $pass++ : $fail++;
( $tz2c >= '0' ) ? $pass++ : $fail++;
( $tz2d >= '0' ) ? $pass++ : $fail++;
( $tz2e >= '0' ) ? $pass++ : $fail++;
( $tz2f >= '0' ) ? $pass++ : $fail++;
( $tz2g >= '0' ) ? $pass++ : $fail++;
( $tz2h >= '0' ) ? $pass++ : $fail++;
( $tz2i >= '0' ) ? $pass++ : $fail++;
( $tz2j >= '0' ) ? $pass++ : $fail++;

############################################
## Test harness to check datetype select  ##
############################################

$dta = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 0 ); // limit
$dtb = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // limit
$dtc = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 4, 0 ); // OOB
$dtd = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, -1, 0 ); // OOB
$dte = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 0 ); // In Range
$dtf = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 'a', 0 ); // Is Nan
$dtg = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, NULL, 0 ); // Is Null
$dth = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, ' ', 0 ); // Is space
$dti = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, '', 0 ); // Is empty
$dtj = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 3, [], 0 ); // Is Array
( $dta >= '0' ) ? $pass++ : $fail++;
( $dtb >= '0' ) ? $pass++ : $fail++;
( $dtc >= '0' ) ? $pass++ : $fail++;
( $dtd >= '0' ) ? $pass++ : $fail++;
( $dte >= '0' ) ? $pass++ : $fail++;
( $dtf >= '0' ) ? $pass++ : $fail++;
( $dtg >= '0' ) ? $pass++ : $fail++;
( $dth >= '0' ) ? $pass++ : $fail++;
( $dti >= '0' ) ? $pass++ : $fail++;
( $dtj >= '0' ) ? $pass++ : $fail++;

############################################
## Test harness to check timetype select  ##
############################################

$tta = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 0 ); // limit
$ttb = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 4 ); // limit
$ttc = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 5 ); // OOB
$ttd = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, -1 ); // OOB
$tte = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 1 ); // In Range
$ttf = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 'a' ); // Is Nan
$ttg = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, NULL ); // Is Null
$tth = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, ' ' ); // Is space
$tti = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, '' ); // Is empty
$ttj = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 3, 0, [] ); // Is Array
( $tta >= '0' ) ? $pass++ : $fail++;
( $ttb >= '0' ) ? $pass++ : $fail++;
( $ttc >= '0' ) ? $pass++ : $fail++;
( $ttd >= '0' ) ? $pass++ : $fail++;
( $tte >= '0' ) ? $pass++ : $fail++;
( $ttf >= '0' ) ? $pass++ : $fail++;
( $ttg >= '0' ) ? $pass++ : $fail++;
( $tth >= '0' ) ? $pass++ : $fail++;
( $tti >= '0' ) ? $pass++ : $fail++;
( $ttj >= '0' ) ? $pass++ : $fail++;

#######################################################
## Test harness to check correct BETWEEN TOTAL DAYS  ##
#######################################################
//////////////////////////////////
// Same Day TOTAL DAYS Test set ///
// sdtd [NaN]                   ////
/////////////////////////////////////
// (Total Days, Days)
$sdtda = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 0 );
if( $sdtda->_apiObject( $sdtda->getTimeType(), $sdtda->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtda', '0', $sdtda->_apiObject( $sdtda->getTimeType(), $sdtda->getDateType() ) ] );
} 

// TZ = 25
$sdtdb = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), -12, 13, 1, 0 );
if( $sdtdb->_apiObject( $sdtdb->getTimeType(), $sdtdb->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdb', '0', $sdtdb->_apiObject( $sdtdb->getTimeType(), $sdtdb->getDateType() ) ] );
} 

// (Total Days, Seconds)
$sdtdc = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 1 ); 
if( $sdtdc->_apiObject( $sdtdc->getTimeType(), $sdtdc->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdc', '0', $sdtdc->_apiObject( $sdtdc->getTimeType(), $sdtdc->getDateType() ) ] );
} 

// (Total Days, minutes)
$sdtdd = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 2 ); 
if( $sdtdd->_apiObject( $sdtdd->getTimeType(), $sdtdd->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdd', '0', $sdtdd->_apiObject( $sdtdd->getTimeType(), $sdtdd->getDateType() ) ] );
} 

// (Total Days, hours)
$sdtde = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 3 ); 
if( $sdtde->_apiObject( $sdtde->getTimeType(), $sdtde->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtde', '0', $sdtde->_apiObject( $sdtde->getTimeType(), $sdtde->getDateType() ) ] );
} 

// (Total Days, years)
$sdtdf = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 4 ); 
if( $sdtdf->_apiObject( $sdtdf->getTimeType(), $sdtdf->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdf', '0', $sdtdf->_apiObject( $sdtdf->getTimeType(), $sdtdf->getDateType() ) ] );
} 

//////////////////////////////////
// Same Day WEEK DAYS Test set ////
// sdwd [NaN]                   ////
/////////////////////////////////////
// (Total Days, Days)
$sdwda = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 0 );
if( $sdwda->_apiObject( $sdwda->getTimeType(), $sdwda->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwda', '0', $sdwda->_apiObject( $sdwda->getTimeType(), $sdwda->getDateType() ) ] );
} 
// Same Day Week Day Sat-Sun TZ = 25 (Total Days, days)
$sdwdb = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), -12, 13, 1, 0 );
if( $sdwdb->_apiObject( $sdwdb->getTimeType(), $sdwdb->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdb', '0', $sdwdb->_apiObject( $sdwdb->getTimeType(), $sdwdb->getDateType() ) ] );
} 
// (Total Days, Seconds)
$sdwdc = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 1 );
if( $sdwdc->_apiObject( $sdwdc->getTimeType(), $sdwdc->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdc', '0', $sdwdc->_apiObject( $sdwdc->getTimeType(), $sdwdc->getDateType() ) ] );
} 

// (Total Days, minutes)
$sdwdd = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 2 );
if( $sdwdd->_apiObject( $sdwdd->getTimeType(), $sdwdd->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdd', '0', $sdwdd->_apiObject( $sdwdd->getTimeType(), $sdwdd->getDateType() ) ] );
} 

// (Total Days, hours)
$sdwde = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 3 ); 
if( $sdwde->_apiObject( $sdwde->getTimeType(), $sdwde->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwde', '0', $sdwde->_apiObject( $sdwde->getTimeType(), $sdwde->getDateType() ) ] );
} 

// (Total Days, years)
$sdwdf = new thyme( strtotime('2021/1/1'), strtotime('2021/1/1'), 0, 0, 1, 4 ); 
if( $sdwdf->_apiObject( $sdwdf->getTimeType(), $sdwdf->getDateType() ) == '0' )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdf', '0', $sdwdf->_apiObject( $sdwdf->getTimeType(), $sdwdf->getDateType() ) ] );
} 

//////////////////////////////////
// Next Day TOTAL DAYS Test set ///
// ndtd [NaN]                   ////
/////////////////////////////////////
// Next Day (Total Days, days)
$ndtda = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 0 ); 
if( $ndtda->_apiObject( $ndtda->getTimeType(), $ndtda->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtda', '0', $ndtda->_apiObject( $ndtda->getTimeType(), $ndtda->getDateType() ) ] );
} 

// Next Day Sat-Sun TZ = 25
$ndtdb = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), -12, 13, 1, 0 ); 
if( $ndtdb->_apiObject( $ndtdb->getTimeType(), $ndtdb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdb', 0, $ndtdb->_apiObject( $ndtdb->getTimeType(), $ndtdb->getDateType() ) ] );
} 

 // Next Day (Total Days, seconds)
$ndtdc = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 1 );
if( $ndtdc->_apiObject( $ndtdc->getTimeType(), $ndtdc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdc', 0, $ndtdc->_apiObject( $ndtdc->getTimeType(), $ndtdc->getDateType() ) ] );
} 

// Next Day (Total Days, minutes)
$ndtdd = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 2 ); 
if( $ndtdd->_apiObject( $ndtdd->getTimeType(), $ndtdd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdd', 0, $ndtdd->_apiObject( $ndtdd->getTimeType(), $ndtdd->getDateType() ) ] );
} 

// Next Day (Total Days, hours)
$ndtde = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 3 ); 
if( $ndtde->_apiObject( $ndtde->getTimeType(), $ndtde->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtde', 0, $ndtde->_apiObject( $ndtde->getTimeType(), $ndtde->getDateType() ) ] );
} 

// Next Day (Total Days, years)
$ndtdf = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 4 ); 
if( $ndtdf->_apiObject( $ndtdf->getTimeType(), $ndtdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdf', 0, $ndtdf->_apiObject( $ndtdf->getTimeType(), $ndtdf->getDateType() ) ] );
} 

//////////////////////////////////
// 2 Days TOTAL DAYS Test set   ///
// twodaystd [NaN]              ////
/////////////////////////////////////
// 2 Days (Total Days, days)
$twodaystda = new thyme( strtotime('2021/1/1'), strtotime('2021/1/3'), 0, 0, 1, 0 );
if( $twodaystda->_apiObject( $twodaystda->getTimeType(), $twodaystda->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystda', 1, $twodaystda->_apiObject( $twodaystda->getTimeType(), $twodaystda->getDateType() ) ] );
} 

// 2 Days TZ = 25 (Total Days, days)
$twodaystdb = new thyme( strtotime('2021/1/1'), strtotime('2021/1/3'), -12, 13, 1, 0 ); 
if( $twodaystdb->_apiObject( $twodaystdb->getTimeType(), $twodaystdb->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdb', 2, $twodaystdb->_apiObject( $twodaystdb->getTimeType(), $twodaystdb->getDateType() ) ] );
} 

 // 2 Days (Total Days, seconds)
$twodaystdc = new thyme( strtotime('2021/1/1'), strtotime('2021/1/3'), 0, 0, 1, 1 );
if( $twodaystdc->_apiObject( $twodaystdc->getTimeType(), $twodaystdc->getDateType() ) == 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdc', 86400, $twodaystdc->_apiObject( $twodaystdc->getTimeType(), $twodaystdc->getDateType() ) ] );
} 

// 2 Days (Total Days, minutes)
$twodaystdd = new thyme( strtotime('2021/1/1'), strtotime('2021/1/3'), 0, 0, 1, 2 );
if( $twodaystdd->_apiObject( $twodaystdd->getTimeType(), $twodaystdd->getDateType() ) == 1400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdd', 1400 , $twodaystdd->_apiObject( $twodaystdd->getTimeType(), $twodaystdd->getDateType() ) ] );
} 

// 2 Days (Total Days, hours)
$twodaystde = new thyme( strtotime('2021/1/1'), strtotime('2021/1/3'), 0, 0, 1, 3 );
if( $twodaystde->_apiObject( $twodaystde->getTimeType(), $twodaystde->getDateType() ) == 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystde', 24, $twodaystde->_apiObject( $twodaystde->getTimeType(), $twodaystde->getDateType() ) ] );
} 

// 2 Days (Total Days, years)
$twodaystdf = new thyme( strtotime('2021/1/1'), strtotime('2021/1/3'), 0, 0, 1, 4 ); 
if( $twodaystdf->_apiObject( $twodaystdf->getTimeType(), $twodaystdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdf', 0, $twodaystdf->_apiObject( $twodaystdf->getTimeType(), $twodaystdf->getDateType() ) ] );
} 

//////////////////////////////////
// 2 Days Week DAYS Test set    ///
// twodayswd [NaN]              ////
/////////////////////////////////////
// 2 Days (Total Days, days)
$twodayswda = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 1, 0 );
if( $twodayswda->_apiObject( $twodayswda->getTimeType(), $twodayswda->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswda', 1, $twodayswda->_apiObject( $twodayswda->getTimeType(), $twodayswda->getDateType() ) ] );
} 

// 2 Days TZ = 25 (Total Days, days)
$twodayswdb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), -12, 13, 1, 0 ); 
if( $twodayswdb->_apiObject( $twodayswdb->getTimeType(), $twodayswdb->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdb', 2, $twodayswdb->_apiObject( $twodayswdb->getTimeType(), $twodayswdb->getDateType() ) ] );
} 

 // 2 Days (Total Days, seconds)
$twodayswdc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 1, 1 );
if( $twodayswdc->_apiObject( $twodayswdc->getTimeType(), $twodayswdc->getDateType() ) == 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdc', 86400, $twodayswdc->_apiObject( $twodayswdc->getTimeType(), $twodayswdc->getDateType() ) ] );
} 

// 2 Days (Total Days, minutes)
$twodayswdd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 1, 2 );
if( $twodayswdd->_apiObject( $twodayswdd->getTimeType(), $twodayswdd->getDateType() ) == 1400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdd', 1400 , $twodayswdd->_apiObject( $twodayswdd->getTimeType(), $twodayswdd->getDateType() ) ] );
} 

// 2 Days (Total Days, hours)
$twodayswde = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 1, 3 );
if( $twodayswde->_apiObject( $twodayswde->getTimeType(), $twodayswde->getDateType() ) == 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswde', 24, $twodayswde->_apiObject( $twodayswde->getTimeType(), $twodayswde->getDateType() ) ] );
} 

// 2 Days (Total Days, years)
$twodayswdf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 1, 4 ); 
if( $twodayswdf->_apiObject( $twodayswdf->getTimeType(), $twodayswdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdf', 0, $twodayswdf->_apiObject( $twodayswdf->getTimeType(), $twodayswdf->getDateType() ) ] );
} 

/////////////////////////////////////
// 2 Days Complete Week Test set   ///
// twodayscw [NaN]                 ////
////////////////////////////////////////
// 2 Days ( Complete Week, days )
$twodayscwa = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 3, 0 );
if( $twodayscwa->_apiObject( $twodayscwa->getTimeType(), $twodayscwa->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwa', 0, $twodayscwa->_apiObject( $twodayscwa->getTimeType(), $twodayscwa->getDateType() ) ] );
} 

// 2 Days TZ = 25 ( Complete Week, days )
$twodayscwb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), -12, 13, 3, 0 ); 
if( $twodayscwb->_apiObject( $twodayscwb->getTimeType(), $twodayscwb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwb', 0, $twodayscwb->_apiObject( $twodayscwb->getTimeType(), $twodayscwb->getDateType() ) ] );
} 

 // 2 Days ( Complete Week, seconds )
$twodayscwc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 3, 1 );
if( $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwc', 0, $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) ] );
} 

// 2 Days ( Complete Week, minutes )
$twodayscwd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 3, 2 );
if( $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwd', 0, $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) ] );
} 

// 2 Days ( Complete Week, hours )
$twodayscwe = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 3, 3 );
if( $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwe', 0, $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) ] );
} 

// 2 Days ( Complete Week, years )
$twodayscwf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/6'), 0, 0, 3, 4 ); 
if( $twodayswdf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwf', 0, $twodayscwf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 7 Days Total Days Test set      ///
// sevendaystd [NaN]               ////
////////////////////////////////////////
// ( Complete Week, days )
$sevendaystda = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 0 );
if( $sevendaystda->_apiObject( $sevendaystda->getTimeType(), $sevendaystda->getDateType() ) == 7 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendaystda', 7, $sevendaystda->_apiObject( $sevendaystda->getTimeType(), $sevendaystda->getDateType() ) ] );
} 

// TZ = 25 ( Complete Week, days )
$sevendaystdb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), -12, 13, 1, 0 ); 
if( $sevendaystdb->_apiObject( $sevendaystdb->getTimeType(), $sevendaystdb->getDateType() ) == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendaystdb', 8, $sevendaystdb->_apiObject( $sevendaystdb->getTimeType(), $sevendaystdb->getDateType() ) ] );
} 

 // ( Complete Week, seconds )
$twodayscwc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 1 );
if( $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) == 604800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwc', 86604800400, $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) ] );
} 

//  Complete Week, minutes )
$twodayscwd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 2 );
if( $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) == 9800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwd', 9800, $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) ] );
} 

// ( Complete Week, hours )
$twodayscwe = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 3 );
if( $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) == 168 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwe', 168, $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) ] );
} 

// ( Complete Week, years )
$twodayscwf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 4 ); 
if( $twodayswdf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwf', 0, $twodayscwf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 7 Days Week DAYS Test set       ///
// sevendayswd [NaN]               ////
////////////////////////////////////////
// ( Week DAYS, days )
$sevendayswda = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 2, 0 );
if( $sevendayswda->_apiObject( $sevendayswda->getTimeType(), $sevendayswda->getDateType() ) == 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswda', 5, $sevendayswda->_apiObject( $sevendayswda->getTimeType(), $sevendayswda->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$sevendayswdb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), -12, 13, 1, 0 ); 
if( $sevendayswdb->_apiObject( $sevendayswdb->getTimeType(), $sevendayswdb->getDateType() ) == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdb', 8, $sevendayswdb->_apiObject( $sevendayswdb->getTimeType(), $sevendayswdb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$sevendayswdc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 1 );
if( $sevendayswdc->_apiObject( $sevendayswdc->getTimeType(), $sevendayswdc->getDateType() ) == 604800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdc', 604800, $sevendayswdc->_apiObject( $sevendayswdc->getTimeType(), $sevendayswdc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$sevendayswdd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 2 );
if( $sevendayswdd->_apiObject( $sevendayswdd->getTimeType(), $sevendayswdd->getDateType() ) == 9800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdd', 9800, $sevendayswdd->_apiObject( $sevendayswdd->getTimeType(), $sevendayswdd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$sevendayswde = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 3 );
if( $sevendayswde->_apiObject( $sevendayswde->getTimeType(), $sevendayswde->getDateType() ) == 168 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswde', 168, $sevendayswde->_apiObject( $sevendayswde->getTimeType(), $sevendayswde->getDateType() ) ] );
} 

// ( Week DAYS, years )
$sevendayswdf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 1, 4 ); 
if( $sevendayswdf->_apiObject( $sevendayswdf->getTimeType(), $sevendayswdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdf', 0, $sevendayswdf->_apiObject( $sevendayswdf->getTimeType(), $sevendayswdf->getDateType() ) ] );
}

/////////////////////////////////////
// 7 Days Complete Week Test set   ///
// sevendayscw [NaN]               ////
////////////////////////////////////////
// ( Week DAYS, days )
$sevendayscwa = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 3, 0 );
if( $sevendayscwa->_apiObject( $sevendayscwa->getTimeType(), $sevendayscwa->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwa', 1, $sevendayscwa->_apiObject( $sevendayscwa->getTimeType(), $sevendayscwa->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$sevendayscwb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), -12, 13, 3, 0 ); 
if( $sevendayscwb->_apiObject( $sevendayscwb->getTimeType(), $sevendayscwb->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwb', 1, $sevendayscwb->_apiObject( $sevendayscwb->getTimeType(), $sevendayscwb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$sevendayscwc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 3, 1 );
if( $sevendayscwc->_apiObject( $sevendayscwc->getTimeType(), $sevendayscwc->getDateType() ) == 604800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwc', 604800, $sevendayscwc->_apiObject( $sevendayscwc->getTimeType(), $sevendayscwc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$sevendayscwd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 3, 2 );
if( $sevendayscwd->_apiObject( $sevendayscwd->getTimeType(), $sevendayscwd->getDateType() ) == 9800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwd', 9800, $sevendayscwd->_apiObject( $sevendayscwd->getTimeType(), $sevendayscwd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$sevendayscwe = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 3, 3 );
if( $sevendayscwe->_apiObject( $sevendayscwe->getTimeType(), $sevendayscwe->getDateType() ) == 168 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwe', 168, $sevendayscwe->_apiObject( $sevendayscwe->getTimeType(), $sevendayscwe->getDateType() ) ] );
} 

// ( Week DAYS, years )
$sevendayscwf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/12'), 0, 0, 3, 4 ); 
if( $sevendayscwf->_apiObject( $sevendayscwf->getTimeType(), $sevendayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwf', 0, $sevendayscwf->_apiObject( $sevendayscwf->getTimeType(), $sevendayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 14 Days Total Days              ///
// fourteendaystd [NaN]            ////
////////////////////////////////////////
// ( Week DAYS, days )
$fourteendaystda = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 1, 0 );
if( $fourteendaystda->_apiObject( $fourteendaystda->getTimeType(), $fourteendaystda->getDateType() ) == 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystda', 14, $fourteendaystda->_apiObject( $fourteendaystda->getTimeType(), $fourteendaystda->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$fourteendaystdb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), -12, 13, 1, 0 ); 
if( $fourteendaystdb->_apiObject( $fourteendaystdb->getTimeType(), $fourteendaystdb->getDateType() ) == 15 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdb', 15, $fourteendaystdb->_apiObject( $fourteendaystdb->getTimeType(), $fourteendaystdb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$fourteendaystdc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 1, 1 );
if( $fourteendaystdc->_apiObject( $fourteendaystdc->getTimeType(), $fourteendaystdc->getDateType() ) == 86400 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdc', 86400 * 14, $fourteendaystdc->_apiObject( $fourteendaystdc->getTimeType(), $fourteendaystdc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$fourteendaystdd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 1, 2 );
if( $fourteendaystdd->_apiObject( $fourteendaystdd->getTimeType(), $fourteendaystdd->getDateType() ) == 1400 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdd', 1400 * 14, $fourteendaystdd->_apiObject( $fourteendaystdd->getTimeType(), $fourteendaystdd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$fourteendaystde = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 1, 3 );
if( $fourteendaystde->_apiObject( $fourteendaystde->getTimeType(), $fourteendaystde->getDateType() ) == 24 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystde', 24 * 14, $fourteendaystde->_apiObject( $fourteendaystde->getTimeType(), $fourteendaystde->getDateType() ) ] );
} 

// ( Week DAYS, years )
$fourteendaystdf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 1, 4 ); 
if( $fourteendaystdf->_apiObject( $fourteendaystdf->getTimeType(), $fourteendaystdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdf', 0, $fourteendaystdf->_apiObject( $fourteendaystdf->getTimeType(), $fourteendaystdf->getDateType() ) ] );
} 

/////////////////////////////////////
// 14 Days Week Days               ///
// fourteendayswd [NaN]            ////
////////////////////////////////////////
// ( Week DAYS, days )
$fourteendayswa = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 2, 0 );
if( $fourteendayswa->_apiObject( $fourteendayswa->getTimeType(), $fourteendayswa->getDateType() ) == 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswa', 10, $fourteendayswa->_apiObject( $fourteendayswa->getTimeType(), $fourteendayswa->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$fourteendayswb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), -12, 13, 2, 0 ); 
if( $fourteendayswb->_apiObject( $fourteendayswb->getTimeType(), $fourteendayswb->getDateType() ) == 11 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswb', 11, $fourteendayswb->_apiObject( $fourteendayswb->getTimeType(), $fourteendayswb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$fourteendayswc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 2, 1 );
if( $fourteendayswc->_apiObject( $fourteendayswc->getTimeType(), $fourteendayswc->getDateType() ) == 86400 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswc', 86400 * 10, $fourteendayswc->_apiObject( $fourteendayswc->getTimeType(), $fourteendayswc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$fourteendayswd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 2, 2 );
if( $fourteendayswd->_apiObject( $fourteendayswd->getTimeType(), $fourteendayswd->getDateType() ) == 1400 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswd', 1400 * 10, $fourteendayswd->_apiObject( $fourteendayswd->getTimeType(), $fourteendayswd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$fourteendayswe = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 2, 3 );
if( $fourteendayswe->_apiObject( $fourteendayswe->getTimeType(), $fourteendayswe->getDateType() ) == 24 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswe', 24 * 10, $fourteendayswe->_apiObject( $fourteendayswe->getTimeType(), $fourteendayswe->getDateType() ) ] );
} 

// ( Week DAYS, years )
$fourteendayswf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 2, 4 ); 
if( $fourteendayswf->_apiObject( $fourteendayswf->getTimeType(), $fourteendayswf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswf', 0, $fourteendayswf->_apiObject( $fourteendayswf->getTimeType(), $fourteendayswf->getDateType() ) ] );
} 

/////////////////////////////////////
// 14 Days Complete Week           ///
// fourteendayscw [NaN]            ////
////////////////////////////////////////
// ( Week DAYS, days )
$fourteendayscwa = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 3, 0 );
if( $fourteendayscwa->_apiObject( $fourteendayscwa->getTimeType(), $fourteendayscwa->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwa', 2, $fourteendayscwa->_apiObject( $fourteendayscwa->getTimeType(), $fourteendayscwa->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$fourteendayscwb = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), -12, 13, 3, 0 ); 
if( $fourteendayscwb->_apiObject( $fourteendayscwb->getTimeType(), $fourteendayscwb->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwb', 2, $fourteendayscwb->_apiObject( $fourteendayscwb->getTimeType(), $fourteendayscwb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$fourteendayscwc = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 3, 1 );
if( $fourteendayscwc->_apiObject( $fourteendayscwc->getTimeType(), $fourteendayscwc->getDateType() ) == 1209600 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwc', 1209600, $fourteendayscwc->_apiObject( $fourteendayscwc->getTimeType(), $fourteendayscwc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$fourteendayscwd = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 3, 2 );
if( $fourteendayscwd->_apiObject( $fourteendayscwd->getTimeType(), $fourteendayscwd->getDateType() ) == 1400 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwd', 1400 * 14, $fourteendayscwd->_apiObject( $fourteendayscwd->getTimeType(), $fourteendayscwd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$fourteendayscwe = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 3, 3 );
if( $fourteendayscwe->_apiObject( $fourteendayscwe->getTimeType(), $fourteendayscwe->getDateType() ) == 24 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwe', 24 * 14, $fourteendayscwe->_apiObject( $fourteendayscwe->getTimeType(), $fourteendayscwe->getDateType() ) ] );
} 

// ( Week DAYS, years )
$fourteendayscwf = new thyme( strtotime('2021/1/4'), strtotime('2021/1/19'), 0, 0, 3, 4 ); 
if( $fourteendayscwf->_apiObject( $fourteendayscwf->getTimeType(), $fourteendayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwf', 0, $fourteendayscwf->_apiObject( $fourteendayscwf->getTimeType(), $fourteendayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 1 Year Leapyear Total Days      ///
// leapyeartd [NaN]                ////
////////////////////////////////////////
// ( Total DAYS, days )
$leapyeartda = new thyme( strtotime('1987/1/1'), strtotime('1988/1/1'), 0, 0, 1, 0 );
if( $leapyeartda->_apiObject( $leapyeartda->getTimeType(), $leapyeartda->getDateType() ) == 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['leapyeartda', 364, $leapyeartda->_apiObject( $leapyeartda->getTimeType(), $leapyeartda->getDateType() ) ] );
} 

// TZ = 25 ( Total DAYS, days )
$leapyeartdb = new thyme( strtotime('1987/1/1'), strtotime('1988/1/1'), -12, 13, 1, 0 ); 
if( $leapyeartdb->_apiObject( $leapyeartdb->getTimeType(), $leapyeartdb->getDateType() ) == 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['leapyeartdb', 365, $leapyeartdb->_apiObject( $leapyeartdb->getTimeType(), $leapyeartdb->getDateType() ) ] );
} 

// ( Total DAYS, years )
$leapyeartdf = new thyme( strtotime('1988/1/1'), strtotime('1989/1/1'), 0, 0, 1, 4 ); 
if( $leapyeartdf->_apiObject( $leapyeartdf->getTimeType(), $leapyeartdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['leapyeartdf', 1, $leapyeartdf->_apiObject( $leapyeartdf->getTimeType(), $leapyeartdf->getDateType() ) ] );
} 

############################################
##              RESULTS SCREEN            ##
############################################ 
echo 'Total test : ' . $pass + $fail .'<br>';
echo 'Passed : ' . $pass .'<br>';
echo 'Failed : ' . $fail .'<br>';
echo round( ( $pass / ( $pass + $fail ) * 100 ), 2) . '% Success rate<br>';
foreach( $errors as $error ){
    foreach( $error as $e ){
        echo $e . ', ';
    }
    echo '<br>';
}