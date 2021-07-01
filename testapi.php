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
( $d_cw_14_day == 1 * 1 )? $pass++: array_push( $failarray, ['d_cw_14_day', 0, $d_cw_14_day ]);
( $s_cw_14_day == 1123200 * 1 )? $pass++: array_push( $failarray, ['s_cw_14_day', 1123200 * 1, $s_cw_14_day ]);
( $m_cw_14_day == 18200 * 1 )? $pass++: array_push( $failarray, ['m_cw_14_day', 18200 * 1, $m_cw_14_day ]);
( $h_cw_14_day == 312 * 1 )? $pass++: array_push( $failarray, ['h_cw_14_day', 312 * 1, $h_cw_14_day ]);
( $y_cw_14_day == 1 * 1 )? $pass++: array_push( $failarray, ['y_cw_14_day', 1 * 1, $y_cw_14_day ]);

/////////////////////////////////////
//              1 Year             ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2022-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_365_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_365_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_365_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_365_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_365_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_365_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_365_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_365_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_365_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_365_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_365_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_365_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_365_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_365_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_365_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_365_day == 364 )? $pass++ : array_push( $failarray, ['d_td_365_day', 1 * 364, $d_td_365_day ]);
( $s_td_365_day == 86400 * 364 )? $pass++: array_push( $failarray, ['s_td_365_day', 86400 * 364, $s_td_365_day ]);
( $m_td_365_day == 1400 * 364 )? $pass++: array_push( $failarray, ['m_td_365_day', 14000 * 364, $m_td_365_day ]);
( $h_td_365_day == 24 * 364)? $pass++: array_push( $failarray, ['h_td_365_day', 24 * 364, $h_td_365_day ]);
( $y_td_365_day == 0 )? $pass++: array_push( $failarray, ['y_td_365_day', 0, $y_td_365_day ]);
( $d_wd_365_day == 52 * 5 )? $pass++: array_push( $failarray, ['d_wd_365_day', 52 * 5, $d_wd_365_day ]);
( $s_wd_365_day == 86400 * 52 * 5 )? $pass++: array_push( $failarray, ['s_wd_365_day', 86400 * 52 * 5, $s_wd_365_day ]);
( $m_wd_365_day == 1400 * 52 * 5 )? $pass++: array_push( $failarray, ['m_wd_365_day', 1400 * 52 * 5, $m_wd_365_day ]);
( $h_wd_365_day == 24 * 52 * 5 )? $pass++: array_push( $failarray, ['h_wd_365_day', 24 * 10, $h_wd_365_day ]);
( $y_wd_365_day == 0 )? $pass++: array_push( $failarray, ['y_wd_365_day', 0, $y_wd_365_day ]);
( $d_cw_365_day == 52 * 1 )? $pass++: array_push( $failarray, ['d_cw_365_day', 52 * 1, $d_cw_365_day ]);
( $s_cw_365_day == 86400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['s_cw_365_day', 86400 * 7 * 52 * 1, $s_cw_365_day ]);
( $m_cw_365_day == 1400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['m_cw_365_day', 1400 * 7 * 52 * 1, $m_cw_365_day ]);
( $h_cw_365_day ==  24 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['h_cw_365_day', 24 * 7 * 52 * 1, $h_cw_365_day ]);
( $y_cw_365_day == 1 * 52 * 1 )? $pass++: array_push( $failarray, ['y_cw_365_day', 1 * 52 * 1, $y_cw_365_day ]);

/////////////////////////////////////
//              1 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1989-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_366_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_366_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_366_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_366_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_366_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_366_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_366_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_366_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_366_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_366_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_366_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_366_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_366_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_366_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_366_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_366_day == 365 )? $pass++ : array_push( $failarray, ['d_td_366_day', 1 * 365, $d_td_366_day ]);
( $s_td_366_day == 86400 * 365 )? $pass++: array_push( $failarray, ['s_td_366_day', 86400 * 365, $s_td_366_day ]);
( $m_td_366_day == 1400 * 365 )? $pass++: array_push( $failarray, ['m_td_366_day', 14000 * 365, $m_td_366_day ]);
( $h_td_366_day == 24 * 365)? $pass++: array_push( $failarray, ['h_td_366_day', 24 * 365, $h_td_366_day ]);
( $y_td_366_day == 0 )? $pass++: array_push( $failarray, ['y_td_366_day', 0, $y_td_366_day ]);
( $d_wd_366_day == 260 + 1 )? $pass++: array_push( $failarray, ['d_wd_366_day', 260 + 1, $d_wd_366_day ]);
( $s_wd_366_day == 86400 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['s_wd_366_day', 86400 * ( 260 + 1 ), $s_wd_366_day ]);
( $m_wd_366_day == 1400 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['m_wd_366_day', 1400 * ( 260 + 1 ) , $m_wd_366_day ]);
( $h_wd_366_day == 24 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['h_wd_366_day', 24 * ( 260 + 1 ), $h_wd_366_day ]);
( $y_wd_366_day == 0 )? $pass++: array_push( $failarray, ['y_wd_366_day', 0, $y_wd_366_day ]);
( $d_cw_366_day == 52 * 1 )? $pass++: array_push( $failarray, ['d_cw_366_day', 52 * 1, $d_cw_366_day ]);
( $s_cw_366_day == 86400 * 7 * 52 )? $pass++: array_push( $failarray, ['s_cw_366_day', 86400 * 7 * 52 * 1, $s_cw_366_day ]);
( $m_cw_366_day == 1400 * 7 * 52 )? $pass++: array_push( $failarray, ['m_cw_366_day', 1400 * 52 * 1, $m_cw_366_day ]);
( $h_cw_366_day ==  24 * 7 * 52 )? $pass++: array_push( $failarray, ['h_cw_366_day', 24 * 7 * 52 * 1, $h_cw_366_day ]);
( $y_cw_366_day == 1 )? $pass++: array_push( $failarray, ['y_cw_366_day', 1, $y_cw_366_day ]);

/////////////////////////////////////
//              2 Years            ///
////////////////////////////////////////
$date1 = new DateTime( "2018-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2020-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_730_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_730_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_730_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_730_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_730_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_730_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_730_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_730_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_730_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_730_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_730_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_730_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_730_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_730_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_730_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_730_day == 730 - 1)? $pass++ : array_push( $failarray, ['d_td_730_day',  730 - 1, $d_td_730_day ]);
( $s_td_730_day == 86400 * ( 730 - 1 ) )? $pass++: array_push( $failarray, ['s_td_730_day', 86400 * ( 730 - 1 ), $s_td_730_day ]);
( $m_td_730_day == 1400 * ( 730 - 1 ))? $pass++: array_push( $failarray, ['m_td_730_day', 14000 * ( 730 - 1 ), $m_td_730_day ]);
( $h_td_730_day == 24 * ( 730 - 1 ))? $pass++: array_push( $failarray, ['h_td_730_day', 24 * ( 730 - 1 ), $h_td_730_day ]);
( $y_td_730_day == 1 )? $pass++: array_push( $failarray, ['y_td_730_day', 1, $y_td_730_day ]);
( $d_wd_730_day == 52 * 5 * 2 + 1 )? $pass++: array_push( $failarray, ['d_wd_730_day', 52 * 5 * 2 + 1, $d_wd_730_day ]);
( $s_wd_730_day == 86400 * 52 * 5 )? $pass++: array_push( $failarray, ['s_wd_730_day', 86400 * 52 * 5, $s_wd_730_day ]);
( $m_wd_730_day == 1400 * 52 * 5 )? $pass++: array_push( $failarray, ['m_wd_730_day', 1400 * 52 * 5, $m_wd_730_day ]);
( $h_wd_730_day == 24 * 52 * 5 )? $pass++: array_push( $failarray, ['h_wd_730_day', 24 * 10, $h_wd_730_day ]);
( $y_wd_730_day == 0 )? $pass++: array_push( $failarray, ['y_wd_730_day', 0, $y_wd_730_day ]);
( $d_cw_730_day == 52 * 1 )? $pass++: array_push( $failarray, ['d_cw_730_day', 52 * 1, $d_cw_730_day ]);
( $s_cw_730_day == 86400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['s_cw_730_day', 86400 * 7 * 52 * 1, $s_cw_730_day ]);
( $m_cw_730_day == 1400 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['m_cw_730_day', 1400 * 7 * 52 * 1, $m_cw_730_day ]);
( $h_cw_730_day ==  24 * 7 * 52 * 1 )? $pass++: array_push( $failarray, ['h_cw_730_day', 24 * 7 * 52 * 1, $h_cw_730_day ]);
( $y_cw_730_day == 52 * 2 - 1 )? $pass++: array_push( $failarray, ['y_cw_730_day', 52 * 2 - 1, $y_cw_730_day ]);

/////////////////////////////////////
//              2 Leap Year        ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_732_day = $aligent->getTotalDaysBetween( $date1, $date2 ); //
$s_td_732_day = $aligent->getTotalDaysBetween( $date1, $date2 , 1 ); // 
$m_td_732_day = $aligent->getTotalDaysBetween( $date1, $date2, 2 ); // 
$h_td_732_day = $aligent->getTotalDaysBetween( $date1, $date2, 3 ); // 
$y_td_732_day = $aligent->getTotalDaysBetween( $date1, $date2, 4 ); //
$d_wd_732_day = $aligent->getweekdaysBetween( $date1, $date2 ); //
$s_wd_732_day = $aligent->getweekdaysBetween( $date1, $date2 , 1 ); // 
$m_wd_732_day = $aligent->getweekdaysBetween( $date1, $date2, 2 ); // 
$h_wd_732_day = $aligent->getweekdaysBetween( $date1, $date2, 3 ); // 
$y_wd_732_day = $aligent->getweekdaysBetween( $date1, $date2, 4 ); // 
$d_cw_732_day = $aligent->getcompleteWeeks( $date1, $date2 ); //
$s_cw_732_day = $aligent->getcompleteWeeks( $date1, $date2 , 1 ); // 
$m_cw_732_day = $aligent->getcompleteWeeks( $date1, $date2, 2 ); // 
$h_cw_732_day = $aligent->getcompleteWeeks( $date1, $date2, 3 ); // 
$y_cw_732_day = $aligent->getcompleteWeeks( $date1, $date2, 4 ); // 
( $d_td_732_day == 3287 )? $pass++ : array_push( $failarray, ['d_td_732_day', 3287, $d_td_732_day ]);
( $s_td_732_day == 86400 * 3287 )? $pass++: array_push( $failarray, ['s_td_732_day', 86400 * 3287, $s_td_732_day ]);
( $m_td_732_day == 1400 * 3287 )? $pass++: array_push( $failarray, ['m_td_732_day', 14000 * 3287, $m_td_732_day ]);
( $h_td_732_day == 24 * 3287)? $pass++: array_push( $failarray, ['h_td_732_day', 24 * 3287, $h_td_732_day ]);
( $y_td_732_day == 0 )? $pass++: array_push( $failarray, ['y_td_732_day', 0, $y_td_732_day ]);
( $d_wd_732_day == 260 + 1 )? $pass++: array_push( $failarray, ['d_wd_732_day', 260 + 1, $d_wd_732_day ]);
( $s_wd_732_day == 86400 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['s_wd_732_day', 86400 * ( 260 + 1 ), $s_wd_732_day ]);
( $m_wd_732_day == 1400 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['m_wd_732_day', 1400 * ( 260 + 1 ) , $m_wd_732_day ]);
( $h_wd_732_day == 24 * ( 260 + 1 ) )? $pass++: array_push( $failarray, ['h_wd_732_day', 24 * ( 260 + 1 ), $h_wd_732_day ]);
( $y_wd_732_day == 0 )? $pass++: array_push( $failarray, ['y_wd_732_day', 0, $y_wd_732_day ]);
( $d_cw_732_day == 52 * 1 )? $pass++: array_push( $failarray, ['d_cw_732_day', 52 * 1, $d_cw_732_day ]);
( $s_cw_732_day == 86400 * 7 * 52 )? $pass++: array_push( $failarray, ['s_cw_732_day', 86400 * 7 * 52 * 1, $s_cw_732_day ]);
( $m_cw_732_day == 1400 * 7 * 52 )? $pass++: array_push( $failarray, ['m_cw_732_day', 1400 * 52 * 1, $m_cw_732_day ]);
( $h_cw_732_day ==  24 * 7 * 52 )? $pass++: array_push( $failarray, ['h_cw_732_day', 24 * 7 * 52 * 1, $h_cw_732_day ]);
( $y_cw_732_day == 1 )? $pass++: array_push( $failarray, ['y_cw_732_day', 1, $y_cw_732_day ]);

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