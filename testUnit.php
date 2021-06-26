<?php
require 'thyme.class.php';

$pass = 0;
$fail = 0;

############################################
## Test harness to check date object 1    ##
############################################
$dateobject1a = new thyme( strtotime('9999/12/31'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // limit
$dateobject1b = new thyme( strtotime('0000/1/1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // limit
$dateobject1c = new thyme( strtotime('-1/-1/-1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // OOB
$dateobject1d = new thyme( strtotime('99999/13/32'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // OOB
$dateobject1e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // In Range
$dateobject1f = new thyme( strtotime('a'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is Nan
$dateobject1g = new thyme( strtotime(NULL), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is Null
$dateobject1h = new thyme( strtotime(' '), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is space
$dateobject1i = new thyme( strtotime(''), strtotime('2021/1/2'), 0, 0, 3, 0 ); // Is empty
/* $dateobject1j = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, a, 0 ); // Undefined constant */

( $dateobject1a >= '0' ) ? $pass++ : $fail++;
( $dateobject1b >= '0' ) ? $pass++ : $fail++;
( $dateobject1c >= '0' ) ? $pass++ : $fail++;
( $dateobject1d >= '0' ) ? $pass++ : $fail++;
( $dateobject1e >= '0' ) ? $pass++ : $fail++;
( $dateobject1f >= '0' ) ? $pass++ : $fail++;
( $dateobject1g >= '0' ) ? $pass++ : $fail++;
( $dateobject1h >= '0' ) ? $pass++ : $fail++;
( $dateobject1i >= '0' ) ? $pass++ : $fail++;
/* ( $dateobject1j >= '0' ) ? $pass++ : $fail++; */

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
/* $dateobject2j = new thyme( strtotime('2021/1/1'), strtotime(a), 0, 0, a, 0 ); // Undefined constant */

( $dateobject2a >= '0' ) ? $pass++ : $fail++;
( $dateobject2b >= '0' ) ? $pass++ : $fail++;
( $dateobject2c >= '0' ) ? $pass++ : $fail++;
( $dateobject2d >= '0' ) ? $pass++ : $fail++;
( $dateobject2e >= '0' ) ? $pass++ : $fail++;
( $dateobject2f >= '0' ) ? $pass++ : $fail++;
( $dateobject2g >= '0' ) ? $pass++ : $fail++;
( $dateobject2h >= '0' ) ? $pass++ : $fail++;
( $dateobject2i >= '0' ) ? $pass++ : $fail++;
/* ( $dateobject2j >= '0' ) ? $pass++ : $fail++; */

############################################
## Test harness to check timezone object 1##
############################################
$dateobject2a = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), -12, 0, 3, 0 ); // limit
$dateobject2b = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 13, 0, 3, 0 ); // limit
$dateobject2c = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), -13, 0, 3, 0 ); // OOB
$dateobject2d = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 14, 0, 3, 0 ); // OOB
$dateobject2e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 1, 0, 3, 0 ); // In Range
$dateobject2f = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 'a', 0, 3, 0 ); // Is Nan
$dateobject2g = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), NULL, 0, 3, 0 ); // Is Null
$dateobject2h = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), ' ', 0, 3, 0 ); // Is space
$dateobject2i = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), '', 0, 3, 0); // Is empty
/* $dateobject2j = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), a, 0, a, 0 ); // Undefined constant */

( $dateobject2a >= '0' ) ? $pass++ : $fail++;
( $dateobject2b >= '0' ) ? $pass++ : $fail++;
( $dateobject2c >= '0' ) ? $pass++ : $fail++;
( $dateobject2d >= '0' ) ? $pass++ : $fail++;
( $dateobject2e >= '0' ) ? $pass++ : $fail++;
( $dateobject2f >= '0' ) ? $pass++ : $fail++;
( $dateobject2g >= '0' ) ? $pass++ : $fail++;
( $dateobject2h >= '0' ) ? $pass++ : $fail++;
( $dateobject2i >= '0' ) ? $pass++ : $fail++;
/* ( $dateobject2j >= '0' ) ? $pass++ : $fail++; */

############################################
## Test harness to check timezone object 2##
############################################
$dateobject2a = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, -12, 3, 0 ); // limit
$dateobject2b = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 13, 3, 0 ); // limit
$dateobject2c = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, -13, 3, 0 ); // OOB
$dateobject2d = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 14, 3, 0 ); // OOB
$dateobject2e = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 1, 3, 0 ); // In Range
$dateobject2f = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0,'a', 3, 0 ); // Is Nan
$dateobject2g = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, NULL, 3, 0 ); // Is Null
$dateobject2h = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, ' ', 3, 0 ); // Is space
$dateobject2i = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, '', 3, 0); // Is empty
/* $dateobject2j = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, a, a, 0 ); // Undefined constant */

( $dateobject2a >= '0' ) ? $pass++ : $fail++;
( $dateobject2b >= '0' ) ? $pass++ : $fail++;
( $dateobject2c >= '0' ) ? $pass++ : $fail++;
( $dateobject2d >= '0' ) ? $pass++ : $fail++;
( $dateobject2e >= '0' ) ? $pass++ : $fail++;
( $dateobject2f >= '0' ) ? $pass++ : $fail++;
( $dateobject2g >= '0' ) ? $pass++ : $fail++;
( $dateobject2h >= '0' ) ? $pass++ : $fail++;
( $dateobject2i >= '0' ) ? $pass++ : $fail++;
/* ( $dateobject2j >= '0' ) ? $pass++ : $fail++; */


############################################
## Test harness to check datetype select  ##
############################################
$datetype1 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 0 ); // limit
$datetype2 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 3, 0 ); // limit
$datetype3 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 4, 0 ); // OOB
$datetype4 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, -1, 0 ); // OOB
$datetype5 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 1, 0 ); // In Range
$datetype6 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 'a', 0 ); // Is Nan
$datetype7 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, NULL, 0 ); // Is Null
$datetype8 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, ' ', 0 ); // Is space
$datetype9 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, '', 0 ); // Is empty
/* $datetype10 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, a, 0 ); // Undefined constant */

( $datetype1 >= '0' ) ? $pass++ : $fail++;
( $datetype2 >= '0' ) ? $pass++ : $fail++;
( $datetype3 >= '0' ) ? $pass++ : $fail++;
( $datetype4 >= '0' ) ? $pass++ : $fail++;
( $datetype5 >= '0' ) ? $pass++ : $fail++;
( $datetype6 >= '0' ) ? $pass++ : $fail++;
( $datetype7 >= '0' ) ? $pass++ : $fail++;
( $datetype8 >= '0' ) ? $pass++ : $fail++;
( $datetype9 >= '0' ) ? $pass++ : $fail++;
/* ( $datetype10 >= '0' ) ? $pass++ : $fail++; */

// Test harness to check timetype select       
$timetype1 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 0 ); // limit
$timetype2 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 4 ); // limit
$timetype3 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 5 ); // OOB
$timetype4 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, -1 ); // OOB
$timetype5 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 1 ); // In Range
$timetype6 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, 'a' ); // Is Nan
$timetype7 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, NULL ); // Is Null
$timetype8 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, ' ' ); // Is space
$timetype9 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, '' ); // Is empty
/* $timetype10 = new thyme( strtotime('2021/1/1'), strtotime('2021/1/2'), 0, 0, 0, a ); // Undefined constant */

( $timetype1 >= '0' ) ? $pass++ : $fail++;
( $timetype2 >= '0' ) ? $pass++ : $fail++;
( $timetype3 >= '0' ) ? $pass++ : $fail++;
( $timetype4 >= '0' ) ? $pass++ : $fail++;
( $timetype5 >= '0' ) ? $pass++ : $fail++;
( $timetype6 >= '0' ) ? $pass++ : $fail++;
( $timetype7 >= '0' ) ? $pass++ : $fail++;
( $timetype8 >= '0' ) ? $pass++ : $fail++;
( $timetype9 >= '0' ) ? $pass++ : $fail++;
/* ( $timetype10 >= '0' ) ? $pass++ : $fail++; */

echo 'Total test : ' . $pass + $fail .'<br>';
echo 'Passed : ' . $pass .'<br>';
echo 'Failed : ' . $fail .'<br>';
echo ($pass / ($pass + $fail) * 100 ) . '% Success rate';