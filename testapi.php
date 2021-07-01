<?php
require 'aligent.class.php';
$aligent = new Aligent();

$pass = 0;
$fail = 0;
$errors = array();
$passarray = array();
$failarray = array();

/////////////////////////////////////
//              Same Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_sd = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_sd = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_sd = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_sd = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_sd = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_sd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_sd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_sd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_sd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_sd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_sd = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_sd = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_sd = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_sd = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_sd = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_sd == 0 )? $pass++: array_push( $failarray, ['d_td_sd', 0, $d_td_sd ]);
( $s_td_sd == 0 )? $pass++: array_push( $failarray, ['s_td_sd', 0, $s_td_sd ]);
( $m_td_sd == 0 )? $pass++: array_push( $failarray, ['m_td_sd', 0, $m_td_sd ]);
( $h_td_sd == 0 )? $pass++: array_push( $failarray, ['h_td_sd', 0, $h_td_sd ]);
( $y_td_sd == 0 )? $pass++: array_push( $failarray, ['y_td_sd', 0, $y_td_sd ]);
( $d_wd_sd == 0 )? $pass++: array_push( $failarray, ['d_wd_sd', 0, $d_wd_sd ]);
( $s_wd_sd == 0 )? $pass++: array_push( $failarray, ['s_wd_sd', 0, $s_wd_sd ]);
( $m_wd_sd == 0 )? $pass++: array_push( $failarray, ['m_wd_sd', 0, $m_wd_sd ]);
( $h_wd_sd == 0 )? $pass++: array_push( $failarray, ['h_wd_sd', 0, $h_wd_sd ]);
( $y_wd_sd == 0 )? $pass++: array_push( $failarray, ['y_wd_sd', 0, $y_wd_sd ]);
( $d_cw_sd == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);
( $s_cw_sd == 0 )? $pass++: array_push( $failarray, ['s_cw_sd', 0, $s_cw_sd ]);
( $m_cw_sd == 0 )? $pass++: array_push( $failarray, ['m_cw_sd', 0, $m_cw_sd ]);
( $h_cw_sd == 0 )? $pass++: array_push( $failarray, ['h_cw_sd', 0, $h_cw_sd ]);
( $y_cw_sd == 0 )? $pass++: array_push( $failarray, ['y_cw_sd', 0, $y_cw_sd ]);

/////////////////////////////////////
//              Next Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-05T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_nd = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_nd = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_nd = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_nd = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_nd = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_nd = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_nd = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_nd = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_nd = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_nd = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_nd = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_nd = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_nd = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_nd = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_nd = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_nd == 0 )? $pass++: array_push( $failarray, ['d_td_nd', 0, $d_td_nd ]);
( $s_td_nd == 0 )? $pass++: array_push( $failarray, ['s_td_nd', 0, $s_td_nd ]);
( $m_td_nd == 0 )? $pass++: array_push( $failarray, ['m_td_nd', 0, $m_td_nd ]);
( $h_td_nd == 0 )? $pass++: array_push( $failarray, ['h_td_nd', 0, $m_td_nd ]);
( $y_td_nd == 0 )? $pass++: array_push( $failarray, ['y_td_nd', 0, $y_td_nd ]);
( $d_wd_nd == 0 )? $pass++: array_push( $failarray, ['d_wd_nd', 0, $d_wd_nd ]);
( $s_wd_nd == 0 )? $pass++: array_push( $failarray, ['s_wd_nd', 0, $s_wd_nd ]);
( $m_wd_nd == 0 )? $pass++: array_push( $failarray, ['m_wd_nd', 0, $s_wd_nd ]);
( $h_wd_nd == 0 )? $pass++: array_push( $failarray, ['h_wd_nd', 0, $h_wd_nd ]);
( $y_wd_nd == 0 )? $pass++: array_push( $failarray, ['y_wd_nd', 0, $y_wd_nd ]);
( $d_cw_nd == 0 )? $pass++: array_push( $failarray, ['d_cw_nd', 0, $d_cw_nd ]);
( $s_cw_nd == 0 )? $pass++: array_push( $failarray, ['s_cw_nd', 0, $s_cw_nd ]);
( $m_cw_nd == 0 )? $pass++: array_push( $failarray, ['m_cw_nd', 0, $m_cw_nd ]);
( $h_cw_nd == 0 )? $pass++: array_push( $failarray, ['h_cw_nd', 0, $h_cw_nd ]);
( $y_cw_nd == 0 )? $pass++: array_push( $failarray, ['y_cw_nd', 0, $y_cw_nd ]);


///////////////////////////////////
//              +2 Day           ///
/////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-06T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_2_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_2_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_2_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_2_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_2_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_2_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_2_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_2_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_2_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_2_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_2_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_2_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_2_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_2_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_2_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_2_day == 1 )? $pass++: array_push( $failarray, ['d_td_2_day', 1, $d_td_2_day ]);
( $s_td_2_day == 86400 )? $pass++: array_push( $failarray, ['s_td_2_day', 86400, $s_td_2_day ]);
( $m_td_2_day == 1400 )? $pass++: array_push( $failarray, ['m_td_2_day', 1400, $m_td_2_day ]);
( $h_td_2_day == 24 )? $pass++: array_push( $failarray, ['h_td_2_day', 24, $h_td_2_day ]);
( $y_td_2_day == 0 )? $pass++: array_push( $failarray, ['y_td_2_day', 0, $y_td_2_day ]);
( $d_wd_2_day == 1 )? $pass++: array_push( $failarray, ['d_wd_2_day', 1, $d_wd_2_day ]);
( $s_wd_2_day == 86400 )? $pass++: array_push( $failarray, ['s_wd_2_day', 86400, $s_wd_2_day ]);
( $m_wd_2_day == 1400 )? $pass++: array_push( $failarray, ['m_wd_2_day', 1400, $m_wd_2_day ]);
( $h_wd_2_day == 24 )? $pass++: array_push( $failarray, ['h_wd_2_day', 24, $h_wd_2_day ]);
( $y_wd_2_day == 0 )? $pass++: array_push( $failarray, ['y_wd_2_day', 0, $y_wd_2_day ]);
( $d_cw_2_day == 0 )? $pass++: array_push( $failarray, ['d_cw_2_day', 0, $d_cw_2_day ]);
( $s_cw_2_day == 0 )? $pass++: array_push( $failarray, ['s_cw_2_day', 0, $s_cw_2_day ]);
( $m_cw_2_day == 0 )? $pass++: array_push( $failarray, ['m_cw_2_day', 0, $m_cw_2_day ]);
( $h_cw_2_day == 0 )? $pass++: array_push( $failarray, ['h_cw_2_day', 0, $h_cw_2_day ]);
( $y_cw_2_day == 0 )? $pass++: array_push( $failarray, ['y_cw_2_day', 0, $y_cw_2_day ]);

/////////////////////////////////////
//              +3 Day             ///
///////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-07T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_3_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_3_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_3_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_3_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_3_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_3_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_3_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_3_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_3_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_3_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_3_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_3_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_3_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_3_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_3_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_3_day == 1 * 2 )? $pass++ : array_push( $failarray, ['d_td_3_day', 1 * 2, $d_td_3_day ]);
( $s_td_3_day == 86400 * 2 )? $pass++: array_push( $failarray, ['s_td_3_day', 86400 * 2, $s_td_3_day ]);
( $m_td_3_day == 1400 * 2 )? $pass++: array_push( $failarray, ['m_td_3_day', 14000 * 2, $m_td_3_day ]);
( $h_td_3_day == 24 * 2 )? $pass++: array_push( $failarray, ['h_td_3_day', 24 * 2, $h_td_3_day ]);
( $y_td_3_day == 0 * 2 )? $pass++: array_push( $failarray, ['y_td_3_day', 0 * 2, $y_td_3_day ]);
( $d_wd_3_day == 1 * 2 )? $pass++: array_push( $failarray, ['d_wd_3_day', 1 * 2, $d_wd_3_day ]);
( $s_wd_3_day == 86400 * 2 )? $pass++: array_push( $failarray, ['s_wd_3_day', 86400 * 2, $s_wd_3_day ]);
( $m_wd_3_day == 1400 * 2 )? $pass++: array_push( $failarray, ['m_wd_3_day', 1400 * 2, $m_wd_3_day ]);
( $h_wd_3_day == 24 * 2 )? $pass++: array_push( $failarray, ['h_wd_3_day', 24 * 2, $h_wd_3_day ]);
( $y_wd_3_day == 0 )? $pass++: array_push( $failarray, ['y_wd_3_day', 0, $y_wd_3_day ]);
( $d_cw_3_day == 0 )? $pass++: array_push( $failarray, ['d_cw_3_day', 0, $d_cw_3_day ]);
( $s_cw_3_day == 0 )? $pass++: array_push( $failarray, ['s_cw_3_day', 0, $s_cw_3_day ]);
( $m_cw_3_day == 0 )? $pass++: array_push( $failarray, ['m_cw_3_day', 0, $m_cw_3_day ]);
( $h_cw_3_day == 0 )? $pass++: array_push( $failarray, ['h_cw_3_day', 0, $h_cw_3_day ]);
( $y_cw_3_day == 0 )? $pass++: array_push( $failarray, ['y_cw_3_day', 0, $y_cw_3_day ]);

/////////////////////////////////////
//              +4 Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_4_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_4_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_4_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_4_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_4_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_4_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_4_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_4_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_4_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_4_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_4_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_4_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_4_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_4_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_4_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_4_day == 1 * 3 )? $pass++ : array_push( $failarray, ['d_td_4_day', 1 * 3, $d_td_4_day ]);
( $s_td_4_day == 86400 * 3 )? $pass++: array_push( $failarray, ['s_td_4_day', 86400 * 3, $s_td_4_day ]);
( $m_td_4_day == 1400 * 3 )? $pass++: array_push( $failarray, ['m_td_4_day', 14000 * 3, $m_td_4_day ]);
( $h_td_4_day == 24 * 3 )? $pass++: array_push( $failarray, ['h_td_4_day', 24 * 3, $h_td_4_day ]);
( $y_td_4_day == 0 )? $pass++: array_push( $failarray, ['y_td_4_day', 0, $y_td_4_day ]);
( $d_wd_4_day == 1 * 3 )? $pass++: array_push( $failarray, ['d_wd_4_day', 1 * 3, $d_wd_4_day ]);
( $s_wd_4_day == 86400 * 3 )? $pass++: array_push( $failarray, ['s_wd_4_day', 86400 * 3, $s_wd_4_day ]);
( $m_wd_4_day == 1400 * 3 )? $pass++: array_push( $failarray, ['m_wd_4_day', 1400 * 3, $m_wd_4_day ]);
( $h_wd_4_day == 24 * 3 )? $pass++: array_push( $failarray, ['h_wd_4_day', 24 * 3, $h_wd_4_day ]);
( $y_wd_4_day == 0 )? $pass++: array_push( $failarray, ['y_wd_4_day', 0, $y_wd_4_day ]);
( $d_cw_4_day == 0 )? $pass++: array_push( $failarray, ['d_cw_4_day', 0, $d_cw_4_day ]);
( $s_cw_4_day == 0 )? $pass++: array_push( $failarray, ['s_cw_4_day', 0, $s_cw_4_day ]);
( $m_cw_4_day == 0 )? $pass++: array_push( $failarray, ['m_cw_4_day', 0, $m_cw_4_day ]);
( $h_cw_4_day == 0 )? $pass++: array_push( $failarray, ['h_cw_4_day', 0, $h_cw_4_day ]);
( $y_cw_4_day == 0 )? $pass++: array_push( $failarray, ['y_cw_4_day', 0, $y_cw_4_day ]);

/////////////////////////////////////
//              +5 Day             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-09T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_5_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_5_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_5_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_5_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_5_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_5_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_5_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_5_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_5_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_5_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_5_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_5_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_5_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_5_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_5_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_5_day == 1 * 4 )? $pass++ : array_push( $failarray, ['d_td_5_day', 1 * 4, $d_td_5_day ]);
( $s_td_5_day == 86400 * 4 )? $pass++: array_push( $failarray, ['s_td_5_day', 86400 * 4, $s_td_5_day ]);
( $m_td_5_day == 1400 * 4 )? $pass++: array_push( $failarray, ['m_td_5_day', 14000 * 4, $m_td_5_day ]);
( $h_td_5_day == 24 * 4 )? $pass++: array_push( $failarray, ['h_td_5_day', 24 * 4, $h_td_5_day ]);
( $y_td_5_day == 0 )? $pass++: array_push( $failarray, ['y_td_5_day', 0, $y_td_5_day ]);
( $d_wd_5_day == 1 * 4 )? $pass++: array_push( $failarray, ['d_wd_5_day', 1 * 4, $d_wd_5_day ]);
( $s_wd_5_day == 86400 * 4 )? $pass++: array_push( $failarray, ['s_wd_5_day', 86400 * 4, $s_wd_5_day ]);
( $m_wd_5_day == 1400 * 4 )? $pass++: array_push( $failarray, ['m_wd_5_day', 1400 * 4, $m_wd_5_day ]);
( $h_wd_5_day == 24 * 4 )? $pass++: array_push( $failarray, ['h_wd_5_day', 24 * 4, $h_wd_5_day ]);
( $y_wd_5_day == 0 )? $pass++: array_push( $failarray, ['y_wd_5_day', 0, $y_wd_5_day ]);
( $d_cw_5_day == 0 )? $pass++: array_push( $failarray, ['d_cw_5_day', 0, $d_cw_5_day ]);
( $s_cw_5_day == 0 )? $pass++: array_push( $failarray, ['s_cw_5_day', 0, $s_cw_5_day ]);
( $m_cw_5_day == 0 )? $pass++: array_push( $failarray, ['m_cw_5_day', 0, $m_cw_5_day ]);
( $h_cw_5_day == 0 )? $pass++: array_push( $failarray, ['h_cw_5_day', 0, $h_cw_5_day ]);
( $y_cw_5_day == 0 )? $pass++: array_push( $failarray, ['y_cw_5_day', 0, $y_cw_5_day ]);

/////////////////////////////////////
//              +6 Day             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-10T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_6_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_6_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_6_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_6_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_6_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_6_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_6_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_6_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_6_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_6_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_6_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_6_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_6_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_6_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_6_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_6_day == 1 * 5 )? $pass++ : array_push( $failarray, ['d_td_6_day', 1 * 5, $d_td_6_day ]);
( $s_td_6_day == 86400 * 5 )? $pass++: array_push( $failarray, ['s_td_6_day', 86400 * 5, $s_td_6_day ]);
( $m_td_6_day == 1400 * 5 )? $pass++: array_push( $failarray, ['m_td_6_day', 14000 * 5, $m_td_6_day ]);
( $h_td_6_day == 24 * 5 )? $pass++: array_push( $failarray, ['h_td_6_day', 24 * 5, $h_td_6_day ]);
( $y_td_6_day == 0 )? $pass++: array_push( $failarray, ['y_td_6_day', 0, $y_td_6_day ]);
( $d_wd_6_day == 1 * 5 )? $pass++: array_push( $failarray, ['d_wd_6_day', 1 * 5, $d_wd_6_day ]);
( $s_wd_6_day == 86400 * 5 )? $pass++: array_push( $failarray, ['s_wd_6_day', 86400 * 5, $s_wd_6_day ]);
( $m_wd_6_day == 1400 * 5 )? $pass++: array_push( $failarray, ['m_wd_6_day', 1400 * 5, $m_wd_6_day ]);
( $h_wd_6_day == 24 * 5 )? $pass++: array_push( $failarray, ['h_wd_6_day', 24 * 5, $h_wd_6_day ]);
( $y_wd_6_day == 0 )? $pass++: array_push( $failarray, ['y_wd_6_day', 0, $y_wd_6_day ]);
( $d_cw_6_day == 0 )? $pass++: array_push( $failarray, ['d_cw_6_day', 0, $d_cw_6_day ]);
( $s_cw_6_day == 0 )? $pass++: array_push( $failarray, ['s_cw_6_day', 0, $s_cw_6_day ]);
( $m_cw_6_day == 0 )? $pass++: array_push( $failarray, ['m_cw_6_day', 0, $m_cw_6_day ]);
( $h_cw_6_day == 0 )? $pass++: array_push( $failarray, ['h_cw_6_day', 0, $h_cw_6_day ]);
( $y_cw_6_day == 0 )? $pass++: array_push( $failarray, ['y_cw_6_day', 0, $y_cw_6_day ]);

/////////////////////////////////////
//              +7 Day             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-11T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_7_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_7_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_7_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_7_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_7_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_7_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_7_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_7_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_7_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_7_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_7_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_7_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_7_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_7_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_7_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_7_day == 1 * 6 )? $pass++ : array_push( $failarray, ['d_td_7_day', 1 * 6, $d_td_7_day ]);
( $s_td_7_day == 86400 * 6 )? $pass++: array_push( $failarray, ['s_td_7_day', 86400 * 6, $s_td_7_day ]);
( $m_td_7_day == 1400 * 6 )? $pass++: array_push( $failarray, ['m_td_7_day', 14000 * 6, $m_td_7_day ]);
( $h_td_7_day == 24 * 6 )? $pass++: array_push( $failarray, ['h_td_7_day', 24 * 6, $h_td_7_day ]);
( $y_td_7_day == 0 )? $pass++: array_push( $failarray, ['y_td_7_day', 0, $y_td_7_day ]);
( $d_wd_7_day == 1 * 5 )? $pass++: array_push( $failarray, ['d_wd_7_day', 1 * 5, $d_wd_7_day ]);
( $s_wd_7_day == 86400 * 5 )? $pass++: array_push( $failarray, ['s_wd_7_day', 86400 * 5, $s_wd_7_day ]);
( $m_wd_7_day == 1400 * 5 )? $pass++: array_push( $failarray, ['m_wd_7_day', 1400 * 5, $m_wd_7_day ]);
( $h_wd_7_day == 24 * 5 )? $pass++: array_push( $failarray, ['h_wd_7_day', 24 * 5, $h_wd_7_day ]);
( $y_wd_7_day == 0 )? $pass++: array_push( $failarray, ['y_wd_7_day', 0, $y_wd_7_day ]);
( $d_cw_7_day == 0 )? $pass++: array_push( $failarray, ['d_cw_7_day', 0, $d_cw_7_day ]);
( $s_cw_7_day == 0 )? $pass++: array_push( $failarray, ['s_cw_7_day', 0, $s_cw_7_day ]);
( $m_cw_7_day == 0 )? $pass++: array_push( $failarray, ['m_cw_7_day', 0, $m_cw_7_day ]);
( $h_cw_7_day == 0 )? $pass++: array_push( $failarray, ['h_cw_7_day', 0, $h_cw_7_day ]);
( $y_cw_7_day == 0 )? $pass++: array_push( $failarray, ['y_cw_7_day', 0, $y_cw_7_day ]);

/////////////////////////////////////
//              2 Weeks            ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-18T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_14_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_14_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_14_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_14_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_14_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_14_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_14_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_14_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_14_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_14_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_14_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_14_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_14_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_14_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_14_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_14_day == 1 * 13 )? $pass++ : array_push( $failarray, ['d_td_14_day', 1 * 13, $d_td_14_day ]);
( $s_td_14_day == 86400 * 13 )? $pass++: array_push( $failarray, ['s_td_14_day', 86400 * 13, $s_td_14_day ]);
( $m_td_14_day == 1400 * 13 )? $pass++: array_push( $failarray, ['m_td_14_day', 14000 * 13, $m_td_14_day ]);
( $h_td_14_day == 24 * 13 )? $pass++: array_push( $failarray, ['h_td_14_day', 24 * 13, $h_td_14_day ]);
( $y_td_14_day == 0 )? $pass++: array_push( $failarray, ['y_td_14_day', 0, $y_td_14_day ]);
( $d_wd_14_day == 1 * 10 )? $pass++: array_push( $failarray, ['d_wd_14_day', 1 * 10, $d_wd_14_day ]);
( $s_wd_14_day == 86400 * 10 )? $pass++: array_push( $failarray, ['s_wd_14_day', 86400 * 10, $s_wd_14_day ]);
( $m_wd_14_day == 1400 * 10 )? $pass++: array_push( $failarray, ['m_wd_14_day', 1400 * 10, $m_wd_14_day ]);
( $h_wd_14_day == 24 * 10 )? $pass++: array_push( $failarray, ['h_wd_14_day', 24 * 10, $h_wd_14_day ]);
( $y_wd_14_day == 0 )? $pass++: array_push( $failarray, ['y_wd_14_day', 0, $y_wd_14_day ]);
( $d_cw_14_day == 1 )? $pass++: array_push( $failarray, ['d_cw_14_day', 1, $d_cw_14_day ]);
( $s_cw_14_day == 86400 * 7 * 1 )? $pass++: array_push( $failarray, ['s_cw_14_day', 86400 * 7 * 1, $s_cw_14_day ]);
( $m_cw_14_day == 1400 * 7 )? $pass++: array_push( $failarray, ['m_cw_14_day', 1400 * 7, $m_cw_14_day ]);
( $h_cw_14_day == 24 * 7 )? $pass++: array_push( $failarray, ['h_cw_14_day', 24 * 7, $h_cw_14_day ]);
( $y_cw_14_day == 0 )? $pass++: array_push( $failarray, ['y_cw_14_day', 0, $y_cw_14_day ]);

/////////////////////////////////////
//              1 Year             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2022-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_1_year = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_1_year = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_1_year = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_1_year = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_1_year = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_1_year = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_1_year = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_1_year = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_1_year = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_1_year = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_1_year = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_1_year = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_1_year = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_1_year = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_1_year = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_1_year == 364 )? $pass++ : array_push( $failarray, ['d_td_1_year', 1 * 364, $d_td_1_year ]);
( $s_td_1_year == 86400 * 364 )? $pass++: array_push( $failarray, ['s_td_1_year', 86400 * 364, $s_td_1_year ]);
( $m_td_1_year == 1400 * 364 )? $pass++: array_push( $failarray, ['m_td_1_year', 14000 * 364, $m_td_1_year ]);
( $h_td_1_year == 24 * 364)? $pass++: array_push( $failarray, ['h_td_1_year', 24 * 364, $h_td_1_year ]);
( $y_td_1_year == 0 )? $pass++: array_push( $failarray, ['y_td_1_year', 0, $y_td_1_year ]);
( $d_wd_1_year == 52 * 5 )? $pass++: array_push( $failarray, ['d_wd_1_year', 52 * 5, $d_wd_1_year ]);
( $s_wd_1_year == 86400 * 52 * 5 )? $pass++: array_push( $failarray, ['s_wd_1_year', 86400 * 52 * 5, $s_wd_1_year ]);
( $m_wd_1_year == 1400 * 52 * 5 )? $pass++: array_push( $failarray, ['m_wd_1_year', 1400 * 52 * 5, $m_wd_1_year ]);
( $h_wd_1_year == 24 * 52 * 5 )? $pass++: array_push( $failarray, ['h_wd_1_year', 24 * 10, $h_wd_1_year ]);
( $y_wd_1_year == 0 )? $pass++: array_push( $failarray, ['y_wd_1_year', 0, $y_wd_1_year ]);
( $d_cw_1_year == 52 )? $pass++: array_push( $failarray, ['d_cw_1_year', 52, $d_cw_1_year ]);
( $s_cw_1_year == 86400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['s_cw_1_year', 86400 * 7 * 52 * 1, $s_cw_1_year ]);
( $m_cw_1_year == 1400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['m_cw_1_year', 1400 * 7 * 52 * 1, $m_cw_1_year ]);
( $h_cw_1_year ==  24 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['h_cw_1_year', 24 * 7 * 52 * 1, $h_cw_1_year ]);
( $y_cw_1_year == 0 )? $pass++: array_push( $failarray, ['y_cw_1_year', 0, $y_cw_1_year ]);

/////////////////////////////////////
//              1 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1989-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$d_td_1_leapyear = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_1_leapyear = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_1_leapyear = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_1_leapyear = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_1_leapyear = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_1_leapyear = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_1_leapyear = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_1_leapyear = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_1_leapyear = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_1_leapyear = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_1_leapyear = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_1_leapyear = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_1_leapyear = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_1_leapyear = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_1_leapyear = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_1_leapyear == 365 )? $pass++ : array_push( $failarray, ['d_td_1_leapyear', 365, $d_td_1_leapyear ]);
( $s_td_1_leapyear == 86400 * 365 )? $pass++: array_push( $failarray, ['s_td_1_leapyear', 86400 * 365, $s_td_1_leapyear ]);
( $m_td_1_leapyear == 1400 * 365 )? $pass++: array_push( $failarray, ['m_td_1_leapyear', 14000 * 365, $m_td_1_leapyear ]);
( $h_td_1_leapyear == 24 * 365)? $pass++: array_push( $failarray, ['h_td_1_leapyear', 24 * 365, $h_td_1_leapyear ]);
( $y_td_1_leapyear == 0 )? $pass++: array_push( $failarray, ['y_td_1_leapyear', 0, $y_td_1_leapyear ]);
( $d_wd_1_leapyear == 260 + 1 )? $pass++: array_push( $failarray, ['d_wd_1_leapyear', 260 + 1, $d_wd_1_leapyear ]);
( $s_wd_1_leapyear == 86400 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['s_wd_1_leapyear', 86400 * ( 260 + 1 ), $s_wd_1_leapyear ]);
( $m_wd_1_leapyear == 1400 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['m_wd_1_leapyear', 1400 * ( 260 + 1 ) , $m_wd_1_leapyear ]);
( $h_wd_1_leapyear == 24 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['h_wd_1_leapyear', 24 * ( 260 + 1 ), $h_wd_1_leapyear ]);
( $y_wd_1_leapyear == 0 )? $pass++: array_push( $failarray, ['y_wd_1_leapyear', 0, $y_wd_1_leapyear ]);
( $d_cw_1_leapyear == 52 * 1 )? $pass++: array_push( $failarray, ['d_cw_1_leapyear', 52 * 1, $d_cw_1_leapyear ]);
( $s_cw_1_leapyear == 86400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['s_cw_1_leapyear', 86400 *7 * 52 * 1 , $s_cw_1_leapyear ]);
( $m_cw_1_leapyear == 1400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['m_cw_1_leapyear', 1400 *7 * 52 * 1 , $m_cw_1_leapyear ]);
( $h_cw_1_leapyear == 24 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['h_cw_1_leapyear', 24 *7 * 52 * 1, $h_cw_1_leapyear ]);
( $y_cw_1_leapyear == 0 )? $pass++: array_push( $failarray, ['y_cw_1_leapyear', 0, $y_cw_1_leapyear ]);

/////////////////////////////////////
//              2 Years            ///
////////////////////////////////////////
$date1 = new DateTime( "2018-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2020-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$d_td_2_year = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_2_year = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_2_year = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_2_year = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_2_year = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_2_year = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_2_year = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_2_year = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_2_year = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_2_year = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_2_year = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_2_year = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_2_year = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_2_year = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_2_year = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_2_year == 730 - 1)? $pass++ : array_push( $failarray, ['d_td_2_year',  730 - 1, $d_td_2_year ]);
( $s_td_2_year == 86400 * ( 730 - 1 ) )? $pass++: array_push( $failarray, ['s_td_2_year', 86400 * ( 730 - 1 ), $s_td_2_year ]);
( $m_td_2_year == 1400 * ( 730 - 1 ))? $pass++: array_push( $failarray, ['m_td_2_year', 14000 * ( 730 - 1 ), $m_td_2_year ]);
( $h_td_2_year == 24 * ( 730 - 1 ))? $pass++: array_push( $failarray, ['h_td_2_year', 24 * ( 730 - 1 ), $h_td_2_year ]);
( $y_td_2_year == 1 )? $pass++: array_push( $failarray, ['y_td_2_year', 1, $y_td_2_year ]);
( $d_wd_2_year == 52 * 5 * 2 + 1 )? $pass++: array_push( $failarray, ['d_wd_2_year', 52 * 5 * 2 + 1, $d_wd_2_year ]);
( $s_wd_2_year == 86400 * ( 52 * 5 * 2 + 1 ) )? $pass++: array_push( $failarray, ['s_wd_2_year', 86400 * 52 * 52 * 5 * 2 + 1, $s_wd_2_year ]);
( $m_wd_2_year == 1400 * ( 52 * 5 * 2 + 1 ) )? $pass++: array_push( $failarray, ['m_wd_2_year', 1400 * 52 * 52 * 5 * 2 + 1, $m_wd_2_year ]);
( $h_wd_2_year == 24 * ( 52 * 5 * 2 + 1 ) )? $pass++: array_push( $failarray, ['h_wd_2_year', 24 * 52 * 5 * 252 * 5 * 2 + 1, $h_wd_2_year ]);
( $y_wd_2_year == 1 )? $pass++: array_push( $failarray, ['y_wd_2_year', 1, $y_wd_2_year ]);
( $d_cw_2_year == 52 * 2 )? $pass++: array_push( $failarray, ['d_cw_2_year', 52 * 2 , $d_cw_2_year ]);
( $s_cw_2_year == 86400 * 7 * ( 52 * 2 ) )? $pass++: array_push( $failarray, ['s_cw_2_year', 86400 * 7 * ( 52 * 2 ) - 1 , $s_cw_2_year ]);
( $m_cw_2_year == 1400 * 7 * ( 52 * 2 ) )? $pass++: array_push( $failarray, ['m_cw_2_year', 1400 * 7 * ( 52 * 2 ), $m_cw_2_year ]);
( $h_cw_2_year ==  24 * 7 * ( 52 * 2 ) )? $pass++: array_push( $failarray, ['h_cw_2_year', 24 * 7 * ( 52 * 2 ) - 1 , $h_cw_2_year ]);
( $y_cw_2_year == 1 )? $pass++: array_push( $failarray, ['y_cw_2_year', 1, $y_cw_2_year ]);

/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
/* 
$d_td_2_leapyear = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_2_leapyear = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_2_leapyear = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_2_leapyear = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_2_leapyear = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_2_leapyear = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_2_leapyear = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_2_leapyear = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_2_leapyear = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_2_leapyear = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_2_leapyear = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_2_leapyear = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_2_leapyear= $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_2_leapyear = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_2_leapyear = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_2_leapyear == 3287 )? $pass++ : array_push( $failarray, ['d_td_2_leapyear', 3287, $d_td_2_leapyear ]);
( $s_td_2_leapyear == 86400 * 3287 )? $pass++: array_push( $failarray, ['s_td_2_leapyear', 86400 * 3287, $s_td_2_leapyear ]);
( $m_td_2_leapyear == 1400 * 3287 )? $pass++: array_push( $failarray, ['m_td_2_leapyear', 14000 * 3287, $m_td_2_leapyear ]);
( $h_td_2_leapyear == 24 * 3287)? $pass++: array_push( $failarray, ['h_td_2_leapyear', 24 * 3287, $h_td_2_leapyear ]);
( $y_td_2_leapyear == 8 )? $pass++: array_push( $failarray, ['y_td_2_leapyear', 8, $y_td_2_leapyear ]);
( $d_wd_2_leapyear == 2349 )? $pass++: array_push( $failarray, ['d_wd_2_leapyear', 2349, $d_wd_2_leapyear ]);
( $s_wd_2_leapyear == 86400 * 2349 )? $pass++: array_push( $failarray, ['s_wd_2_leapyear', 86400 * 2349, $s_wd_2_leapyear ]);
( $m_wd_2_leapyear == 1400 * 2349 )? $pass++: array_push( $failarray, ['m_wd_2_leapyear', 1400 * 2349, $m_wd_2_leapyear ]);
( $h_wd_2_leapyear == 24 * 2349 )? $pass++: array_push( $failarray, ['h_wd_2_leapyear', 24 * 2349, $h_wd_2_leapyear ]);
( $y_wd_2_leapyear == 8 )? $pass++: array_push( $failarray, ['y_wd_2_leapyear', 8, $y_wd_2_leapyear ]);
( $d_cw_2_leapyear == 469 )? $pass++: array_push( $failarray, ['d_cw_2_leapyear', 52 * 1, $d_cw_2_leapyear ]);
( $s_cw_2_leapyear == 86400 * 469 )? $pass++: array_push( $failarray, ['s_cw_2_leapyear', 86400 * 469, $s_cw_2_leapyear ]);
( $m_cw_2_leapyear == 1400 * 469 )? $pass++: array_push( $failarray, ['m_cw_2_leapyear', 1400 * 52 * 1, $m_cw_2_leapyear ]);
( $h_cw_2_leapyear ==  24 * 469 )? $pass++: array_push( $failarray, ['h_cw_2_leapyear', 24 * 469, $h_cw_2_leapyear ]);
( $y_cw_2_leapyear == 8 )? $pass++: array_push( $failarray, ['y_cw_2_leapyear', 8, $y_cw_2_leapyear ]);
 */
/////////////////////////////////////
//              TZ TESTS           ///
///////////////////////////////////////
/* $London = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "" ) ); // -12
$London = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "" ) ); // -11 
$Hawaii = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Hawaii" ) ); // -10
$Marquesas = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Marquesas" ) ); // -95
$Alaska = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Alaska" ) ); // -9
$California = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "California" ) ); // -8
$Yukon = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Yukon" ) ); // -7
$Saskatchewan = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Saskatchewan" ) ); // -6
$Havana = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Havana" ) ); // -5
$Santiago = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Santiago" ) ); // -4
$NewFoundland = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "NewFoundland" ) ); // -3.5*/
//$Salvador = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Salvador" ) ); // -3
//$London = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Europe/London" ) ); // -2
//$Azores = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Azores" ) ); // -1
$London = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Europe/London" ) ); // +0
$Paris = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Europe/Paris" ) ); // +1
//$date2 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Tripoli" ) ); // +2
//$date3 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Baghdad" ) ); // +3
//$date35 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Tehran" ) ); // +3.5
//$date4 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Abu Dhabi" ) ); // +4
//$date5 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Karachi" ) ); // +5
//$date55 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Mumbai" ) ); // +5.5
//$date545 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Kathmandu" ) ); // +5.45
//$date6 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Africa/Dhaka" ) ); // +6
//$date65 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Rangoon" ) ); // +6.5
//$date7 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Hovd" ) ); // +7
$Perth = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Perth" ) ); // +8
//$date85 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Eucia" ) ); // +85
$Seoul = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Asia/Seoul" ) ); // +9
$Adelaide = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // +95
$Hobart = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Hobart" ) ); // +10
//$date105 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "AustraliaLord Howe Is." ) ); // +10.5
//$date11 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Solomon Is." ) ); // +11
//$date12 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Fiji" ) ); // +12
//$date10 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "New Zealand/Auckland" ) ); // +12
//$date1245 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Catham Is." ) ); // +1245
//$date13 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Samoa" ) ); // +13
//$date14 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Kiritimati Is." ) ); // +14
/* 
$d_td_2_day_TZ_minus_1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_2_day_TZ_minus_1 = $aligent->getTotalDaysBetween( $date1, $date2, 1 ); //
$m_td_2_day_TZ_minus_1 = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); //
$h_td_2_day_TZ_minus_1 = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); //
$y_td_2_day_TZ_minus_1 = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //

( $d_td_2_day_TZ_minus_1 == 2 )? $pass++: array_push( $failarray, ['d_td_2_day_TZ_minus_1', 2, $d_td_2_day_TZ_minus_1 ]);
( $s_td_2_day_TZ_minus_1 == 2 )? $pass++: array_push( $failarray, ['s_td_2_day_TZ_minus_1', 2, $s_td_2_day_TZ_minus_1 ]);
( $m_td_2_day_TZ_minus_1 == 2 )? $pass++: array_push( $failarray, ['m_td_2_day_TZ_minus_1', 2, $m_td_2_day_TZ_minus_1 ]);
( $h_td_2_day_TZ_minus_1 == 2 )? $pass++: array_push( $failarray, ['h_td_2_day_TZ_minus_1', 2, $h_td_2_day_TZ_minus_1 ]);
( $y_td_2_day_TZ_minus_1 == 2 )? $pass++: array_push( $failarray, ['y_td_2_day_TZ_minus_1', 2, $y_td_2_day_TZ_minus_1 ]);
 */
############################################
##              RESULTS SCREEN            ##
############################################ 
$row = 0;?>
<table>
<tr>
    <td>Total tests</td>
    <td><?php echo $pass + count( $failarray ); ?></td>
</tr><tr>
    <td>Success rate</td>
    <td><?php echo round( ( $pass / ( $pass + count( $failarray ) ) * 100 ), 2) . '% ' ?></td>
</tr>
</table>
<?php if( count( $failarray ) > 0 ){?>
<table>
<tr>
    <th>Error #</th>
    <th>Failed Test</th>
    <th>Expect</th>
    <th>Result</th>
</tr>
<?php 
foreach( $failarray as $error ){
    $row++;
?>
<tr>
<td><?php echo '# ' . $row ?></td>
<td><?php echo $error[0]; ?></td>
<td style="text-align:center"><?php echo $error[1]; ?></td>
<td><?php echo $error[2]; ?></td>
</tr>
<?php } }?>