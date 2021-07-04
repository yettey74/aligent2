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
( $d_wd_7_day == 4 )? $pass++: array_push( $failarray, ['d_wd_7_day', 4, $d_wd_7_day ]);
( $s_wd_7_day == 86400 * 4 )? $pass++: array_push( $failarray, ['s_wd_7_day', 86400 * 4, $s_wd_7_day ]);
( $m_wd_7_day == 1400 * 4 )? $pass++: array_push( $failarray, ['m_wd_7_day', 1400 * 4, $m_wd_7_day ]);
( $h_wd_7_day == 24 * 4 )? $pass++: array_push( $failarray, ['h_wd_7_day', 24 * 4, $h_wd_7_day ]);
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
( $d_wd_14_day == 1 * 9 )? $pass++: array_push( $failarray, ['d_wd_14_day', 1 * 9, $d_wd_14_day ]);
( $s_wd_14_day == 86400 * 9 )? $pass++: array_push( $failarray, ['s_wd_14_day', 86400 * 9, $s_wd_14_day ]);
( $m_wd_14_day == 1400 * 9 )? $pass++: array_push( $failarray, ['m_wd_14_day', 1400 * 9, $m_wd_14_day ]);
( $h_wd_14_day == 24 * 9 )? $pass++: array_push( $failarray, ['h_wd_14_day', 24 * 9, $h_wd_14_day ]);
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
///////////////////////////////////////
$date1 = new DateTime( "1988-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1997-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
 
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
( $d_cw_2_leapyear == 469 )? $pass++: array_push( $failarray, ['d_cw_2_leapyear', 469, $d_cw_2_leapyear ]);
( $s_cw_2_leapyear == 86400 * 469 * 7 )? $pass++: array_push( $failarray, ['s_cw_2_leapyear', 86400 * 469 * 7, $s_cw_2_leapyear ]);
( $m_cw_2_leapyear == 1400 * 469 * 7 )? $pass++: array_push( $failarray, ['m_cw_2_leapyear', 1400 * 469 * 7, $m_cw_2_leapyear ]);
( $h_cw_2_leapyear ==  24 * 469 * 7 )? $pass++: array_push( $failarray, ['h_cw_2_leapyear', 24 * 469 * 7, $h_cw_2_leapyear ]);
( $y_cw_2_leapyear == 8 )? $pass++: array_push( $failarray, ['y_cw_2_leapyear', 8, $y_cw_2_leapyear ]);

/////////////////////////////////////
//     0 Leap Year  result = 1     ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start > Feb 29                    //// 
// End > Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-03-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1988-03-03T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_0_ly_start_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_0_ly_start_end_true == 1 )? $pass++ : array_push( $failarray, ['d_td_0_ly_start_end_true', 1, $d_td_0_ly_start_end_true ]);

/////////////////////////////////////
//     0 Leap Year  result = 1     ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start < Feb 29                    //// 
// End < Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-26T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1988-02-28T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_false_end_false = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_false_end_false == 1 )? $pass++ : array_push( $failarray, ['d_td_start_false_end_false', 1, $d_td_start_false_end_false ]);

/////////////////////////////////////
//     0 Leap Year  result = 1     ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start < Feb 29                    //// 
// End > Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-28T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1988-03-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_false_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_false_end_true == 1 )? $pass++ : array_push( $failarray, ['d_td_start_false_end_true', 1, $d_td_start_false_end_true ]);

/////////////////////////////////////
//     0 Leap Year  result = 1     ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start = Feb 29                    //// 
// End > Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1988-03-02T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     0 Leap Year  result = 1     ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start < Feb 29                    //// 
// End = Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-27T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1988-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     0 Leap Year  result = 0     ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start = Feb 29                    //// 
// End = Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1988-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 0 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 0, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     1 Leap Year  result = 1460  ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start = Feb 29                    //// 
// End = Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1992-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1460 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1460, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     1 Leap Year  result = 1459  ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start > Feb 29                    //// 
// End = Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-03-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1992-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1459 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1459, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     1 Leap Year  result = 1462  ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start < Feb 29                    //// 
// End = Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-27T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1992-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1462 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1462, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     1 Leap Year  result = 1463  ///
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start < Feb 29                    //// 
// End > Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-27T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1992-03-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1463 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1463, $d_td_start_equal_end_true ]);

/////////////////////////////////////
//     1 Leap Year  result = 1460 ////
// days in leap year start  = true //// 
// days in leap year end = true     //// 
// Start < Feb 29                    //// 
// End < Feb 29                       //// 
///////////////////////////////////////////
$date1 = new DateTime( "1988-02-27T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "1992-02-27T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$d_td_start_equal_end_true = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_start_equal_end_true == 1460 )? $pass++ : array_push( $failarray, ['d_td_start_equal_end_true', 1460, $d_td_start_equal_end_true ]);


////////////////////////////
//     WEEKDAY TESTING   ////
//////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$date2 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Wednesday
$d_wd_2_mon_mon = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_2_mon_mon == 0 )? $pass++ : array_push( $failarray, ['d_wd_2_mon_mon', 0, $d_wd_2_mon_mon ]);

$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$date2 = new DateTime( "1988-01-05T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Tuesday
$d_wd_2_mon_tue = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_2_mon_tue == 0 )? $pass++ : array_push( $failarray, ['d_wd_2_mon_tue', 0, $d_wd_2_mon_tue ]);

$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$date2 = new DateTime( "1988-01-06T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Wednesday
$d_wd_2_mon_wed = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_2_mon_wed == 1 )? $pass++ : array_push( $failarray, ['d_wd_2_mon_wed', 1, $d_wd_2_mon_wed ]);

$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$date2 = new DateTime( "1988-01-07T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Thursday
$d_wd_2_mon_thu = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_2_mon_thu == 2 )? $pass++ : array_push( $failarray, ['d_wd_2_mon_thu', 2, $d_wd_2_mon_thu ]);

$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$date2 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$d_wd_2_mon_fri = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_2_mon_fri == 3 )? $pass++ : array_push( $failarray, ['d_wd_2_mon_fri', 3, $d_wd_2_mon_fri ]);

$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( "1988-01-11T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$d_wd_3_fri_mon = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_3_fri_mon == 0 )? $pass++ : array_push( $failarray, ['d_wd_3_fri_mon', 0, $d_wd_3_fri_mon ]);

$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( "1988-01-12T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Tuesday
$d_wd_4_fri_tue = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_4_fri_tue == 0 )? $pass++ : array_push( $failarray, ['d_wd_4_fri_tue', 0, $d_wd_4_fri_tue ]);

$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( "1988-01-22T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Monday
$d_wd_14_fri_mon = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_14_fri_mon == 9 )? $pass++ : array_push( $failarray, ['d_wd_14_fri_mon', 9, $d_wd_14_fri_mon ]);

$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( "1988-01-23T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Tuesday
$d_wd_15_fri_tue = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_15_fri_tue == 10 )? $pass++ : array_push( $failarray, ['d_wd_15_fri_tue', 10, $d_wd_15_fri_tue ]);

$date1 = new DateTime( "1989-01-13T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); //
$date2 = new DateTime( "1990-01-13T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); //
$d_wd_1_year_fri_mon = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_1_year_fri_mon == 260 )? $pass++ : array_push( $failarray, ['d_wd_1_year_fri_mon', 260, $d_wd_1_year_fri_mon ]);

$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( "1989-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Tuesday
$d_wd_1_leap_fri_mon = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_1_leap_fri_mon == 261 )? $pass++ : array_push( $failarray, ['d_wd_1_leap_fri_mon', 261, $d_wd_1_leap_fri_mon ]);


$date1 = new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = new DateTime( "2000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Tuesday
$d_wd_521775_sat_sat = $aligent->getWeekDaysBetween( $date1, $date2 ); //
( $d_wd_521775_sat_sat == 521775 )? $pass++ : array_push( $failarray, ['d_wd_521775_sat_sat', 521775, $d_wd_521775_sat_sat ]);

/////////////////////////////////////
//          STRING TESTS           ///
///////////////////////////////////////
$date1 = '0001-1-1'; // Friday
$date2 = '0001-1-8'; // Tuesday
$stringTest1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $stringTest1 == 6 )? $pass++ : array_push( $failarray, ['stringTest1', 6, $stringTest1 ]);

$date1 = '0010-1-1'; // Friday
$date2 = '0010-1-8'; // Tuesday
$stringTest2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $stringTest2 == 6 )? $pass++ : array_push( $failarray, ['stringTest2', 6, $stringTest2 ]);

$date1 = '0010-1-1'; // Friday
$date2 = '0010-1-8'; // Tuesday
$stringTest3 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $stringTest3 == 6 )? $pass++ : array_push( $failarray, ['stringTest3', 6, $stringTest3 ]);

/////////////////////////////////////
//           INTEGER TESTS         ///
///////////////////////////////////////

$date1 = -62135596800; // Friday
$date2 = -62135596800; // Tuesday
$integerTest1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $integerTest1 == 0 )? $pass++ : array_push( $failarray, ['integerTest1', 0, $integerTest1 ]);

$date1 = -61851600000; // Friday 0010-01-01T00:00:00+00:00
$date2 = -61850995200; // Friday 0010-01-08T00:00:00+00:00
$integerTest2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $integerTest2 == 6 )? $pass++ : array_push( $failarray, ['integerTest2', 6, $integerTest2 ]);

$date1 = -61851600000; // Friday 0010-01-01T00:00:00+00:00
$date2 = 253402214400; // Friday 9999-12-31T00:00:00+00:0
$integerTest3 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $integerTest3 == 3648770 )? $pass++ : array_push( $failarray, ['integerTest3', 3648770, $integerTest3 ]);

$date1 = -253402214400; // MIN Tuesday -6060-01-03T00:00:00+00:00 
$date2 = 253402214400; // MAX Friday 9999-12-31T00:00:00+00:00
$integerTest4 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $integerTest4 == 5865791 )? $pass++ : array_push( $failarray, ['integerTest4', 5865791, $integerTest4 ]);

//////////////////////////////
//    STRING && INT TESTS   ///
////////////////////////////////
$date1 = '0010-1-1'; // Friday 0010-01-01T00:00:00+00:00
$date2 = 253402214400; // Friday 9999-12-31T00:00:00+00:00
$string_int_test1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $string_int_test1 == 3648770 )? $pass++ : array_push( $failarray, ['string_int_test1', 3648770, $string_int_test1 ]);

$date1 = -62135596800; // 0001-01-01
$date2 = '0001-1-8'; // Tuesday
$string_int_test2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $string_int_test2 == 6 )? $pass++ : array_push( $failarray, ['string_int_test2', 6, $string_int_test2 ]);

//////////////////////////////
//   STRING && OBJECT TESTS ///
////////////////////////////////
$date1 = '0010-1-1'; // Friday
$date2 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Saturday
$string_obj_test1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $string_obj_test1 == 3652 )? $pass++ : array_push( $failarray, ['string_obj_test1', 3652, $string_obj_test1 ]);

$date1 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = '0001-1-8'; // Tuesday
$string_obj_test2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $string_obj_test2 == 372 )? $pass++ : array_push( $failarray, ['string_obj_test2', 372, $string_obj_test2 ]);

//////////////////////////////
//    INT && OBJECT TESTS   ///
////////////////////////////////
$date1 = 253402214400; // Tuesday 9999-12-31T00:00:00+00:00
$date2 = new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday 0000-01-01T00:00:00+00:00
$int_obj_test1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $int_obj_test1 == 3652423 )? $pass++ : array_push( $failarray, ['int_obj_test1', 3652423, $int_obj_test1 ]);


$date1 = new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) ); // Friday
$date2 = 253402214400; // Saturday 9999-12-31T00:00:00+00:00
$int_obj_test2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $int_obj_test2 == 3652423 )? $pass++ : array_push( $failarray, ['int_obj_test2', 3652423, $int_obj_test2 ]);

///////////////////////////////
//    NULL THROWABLE TESTS 1 ///
/////////////////////////////////
$date1 = NULL;
$date2 = '';
try {       
    if( $date1 = null === true ){
        throw new Exception();
    } 
} catch (Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} finally {  
    $date1 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

try {       
    if( $thisDate = new DateTime( NULL, new DateTimeZone( "Australia/Adelaide" ) ) === false ){
        throw new Exception();
    } 
} catch (Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} 
finally
{  
    $date2 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

$null_test1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $null_test1 == 0 )? $pass++ : array_push( $failarray, ['null_test1', 0, $null_test1 ]);

///////////////////////////////
//    NULL THROWABLE TESTS 2 ///
/////////////////////////////////
$date1 = '';
$date2 = '';
try {       
    if( $date1 = null === true ){
        throw new Exception();
    } 
} catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} finally {  
    // Zero date return
    $date1 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

try {       
    if( $thisDate = new DateTime( NULL, NULL ) === false ){
        throw new Exception();
    } 
} catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} finally {  
    $date2 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

$null_test2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $null_test2 == 0 )? $pass++ : array_push( $failarray, ['null_test2', 0, $null_test2 ]);

///////////////////////////////
//    NULL THROWABLE TESTS 3 ///
/////////////////////////////////
$date1 = '';
$date2 = '';
try {       
    if( $date1 = null === true ){
        throw new Exception();
    } 
} catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} finally {  
    $date1 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

try {       
    if( $thisDate = new DateTime( "0000-01-01T00:00:00Z", NULL ) === false ){
        throw new Exception();
    } 
} catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} finally {  
    $date2 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

$null_test3 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $null_test3 == 0 )? $pass++ : array_push( $failarray, ['null_test3', 0, $null_test3 ]);

///////////////////////////////
//    /0 THROWABLE TESTS 1   ///
/////////////////////////////////
$date1 = '';
$date2 = '';
try {       
    if( $date1 = 1/0 === false ){
        throw new Exception( "error" );
    } 
} catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} 
finally
{  
    $date1 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

try {       
    if( $date2 = new DateTime( 1/0, new DateTimeZone( "Australia/Adelaide" ) ) === false ){
        throw new Exception( "error" );
    } 
} catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) ); 
} finally {  
    $date2 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

$zeroDiv_test1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $zeroDiv_test1 == 0 )? $pass++ : array_push( $failarray, ['zeroDiv_test1', 0, $zeroDiv_test1 ]);

///////////////////////////////
//    /0 THROWABLE TESTS 2   ///
/////////////////////////////////
$date1 = '';
$date2 = '';
try {       
    if( $date1 = 1/0 === false ){
        throw new Exception( "error" );
    } 
}
catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) );
} finally {  
    $date1 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

try {       
    if( $date2 = new DateTime( 1/0 , 1/0 ) === false ){
        throw new Exception( "error" );
    } 
}
catch ( Throwable $e ) { 
    //echo print_r( var_export( $e ) );
} finally {  
    $date2 =  new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

$zeroDiv_test2 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $zeroDiv_test2 == 0 )? $pass++ : array_push( $failarray, ['zeroDiv_test2', 0, $zeroDiv_test2 ]);

/////////////////////////////////////
//              TZ TESTS           ///
///////////////////////////////////////

// Complete list of all timezones from DateTimezone interface

$abidjan = new DateTimeZone( "Africa/Abidjan" );
$accra = new DateTimeZone( "Africa/Accra" );
$addis_ababa = new DateTimeZone( "Africa/Addis_Ababa" );
$algiers = new DateTimeZone( "Africa/Algiers" );
$asmara = new DateTimeZone( "Africa/Asmara" );
$bamako = new DateTimeZone( "Africa/Bamako" );
$bangui = new DateTimeZone( "Africa/Bangui" );
$banjul = new DateTimeZone( "Africa/Banjul" );
$bissau = new DateTimeZone( "Africa/Bissau" );
$blantyre = new DateTimeZone( "Africa/Blantyre" );
$brazzaville = new DateTimeZone( "Africa/Brazzaville" );
$bujumbura = new DateTimeZone( "Africa/Bujumbura" );
$cairo = new DateTimeZone( "Africa/Cairo" );
$casablanca = new DateTimeZone( "Africa/Casablanca" );
$ceuta = new DateTimeZone( "Africa/Ceuta" );
$conakry = new DateTimeZone( "Africa/Conakry" );
$dakar = new DateTimeZone( "Africa/Dakar" );
$dar_es_salaam = new DateTimeZone( "Africa/Dar_es_Salaam" );
$djibouti = new DateTimeZone( "Africa/Djibouti" );
$douala = new DateTimeZone( "Africa/Douala" );
$el_aaiun = new DateTimeZone( "Africa/El_Aaiun" );
$freetown = new DateTimeZone( "Africa/Freetown" );
$gaborone = new DateTimeZone( "Africa/Gaborone" );
$harare = new DateTimeZone( "Africa/Harare" );
$johannesburg = new DateTimeZone( "Africa/Johannesburg" );
$juba = new DateTimeZone( "Africa/Juba" );
$kampala = new DateTimeZone( "Africa/Kampala" );
$khartoum = new DateTimeZone( "Africa/Khartoum" );
$kigali = new DateTimeZone( "Africa/Kigali" );
$kinshasa = new DateTimeZone( "Africa/Kinshasa" );
$lagos = new DateTimeZone( "Africa/Lagos" );
$libreville = new DateTimeZone( "Africa/Libreville" );
$lome = new DateTimeZone( "Africa/Lome" );
$luanda = new DateTimeZone( "Africa/Luanda" );
$lubumbashi = new DateTimeZone( "Africa/Lubumbashi" );
$lusaka = new DateTimeZone( "Africa/Lusaka" );
$malabo = new DateTimeZone( "Africa/Malabo" );
$maputo = new DateTimeZone( "Africa/Maputo" );
$maseru = new DateTimeZone( "Africa/Maseru" );
$mbabane = new DateTimeZone( "Africa/Mbabane" );
$mogadishu = new DateTimeZone( "Africa/Mogadishu" );
$monrovia = new DateTimeZone( "Africa/Monrovia" );
$nairobi = new DateTimeZone( "Africa/Nairobi" );
$ndjamena = new DateTimeZone( "Africa/Ndjamena" );
$niamey = new DateTimeZone( "Africa/Niamey" );
$nouakchott = new DateTimeZone( "Africa/Nouakchott" );
$ouagadougou = new DateTimeZone( "Africa/Ouagadougou" );
$portonovo = new DateTimeZone( "Africa/Porto-Novo" );
$sao_tome = new DateTimeZone( "Africa/Sao_Tome" );
$tripoli = new DateTimeZone( "Africa/Tripoli" );
$tunis = new DateTimeZone( "Africa/Tunis" );
$windhoek = new DateTimeZone( "Africa/Windhoek" );
$adak = new DateTimeZone( "America/Adak" );
$anchorage = new DateTimeZone( "America/Anchorage" );
$anguilla = new DateTimeZone( "America/Anguilla" );
$antigua = new DateTimeZone( "America/Antigua" );
$araguaina = new DateTimeZone( "America/Araguaina" );
$buenos_aires = new DateTimeZone( "America/Argentina/Buenos_Aires" );
$catamarca = new DateTimeZone( "America/Argentina/Catamarca" );
$cordoba = new DateTimeZone( "America/Argentina/Cordoba" );
$jujuy = new DateTimeZone( "America/Argentina/Jujuy" );
$la_rioja = new DateTimeZone( "America/Argentina/La_Rioja" );
$mendoza = new DateTimeZone( "America/Argentina/Mendoza" );
$rio_gallegos = new DateTimeZone( "America/Argentina/Rio_Gallegos" );
$salta = new DateTimeZone( "America/Argentina/Salta" );
$san_juan = new DateTimeZone( "America/Argentina/San_Juan" );
$san_luis = new DateTimeZone( "America/Argentina/San_Luis" );
$tucuman = new DateTimeZone( "America/Argentina/Tucuman" );
$ushuaia = new DateTimeZone( "America/Argentina/Ushuaia" );
$aruba = new DateTimeZone( "America/Aruba" );
$asuncion = new DateTimeZone( "America/Asuncion" );
$atikokan = new DateTimeZone( "America/Atikokan" );
$bahia = new DateTimeZone( "America/Bahia" );
$bahia_banderas = new DateTimeZone( "America/Bahia_Banderas" );
$barbados = new DateTimeZone( "America/Barbados" );
$belem = new DateTimeZone( "America/Belem" );
$belize = new DateTimeZone( "America/Belize" );
$blancsablon = new DateTimeZone( "America/Blanc-Sablon" );
$boa_vista = new DateTimeZone( "America/Boa_Vista" );
$bogota = new DateTimeZone( "America/Bogota" );
$boise = new DateTimeZone( "America/Boise" );
$cambridge_bay = new DateTimeZone( "America/Cambridge_Bay" );
$campo_grande = new DateTimeZone( "America/Campo_Grande" );
$cancun = new DateTimeZone( "America/Cancun" );
$caracas = new DateTimeZone( "America/Caracas" );
$cayenne = new DateTimeZone( "America/Cayenne" );
$cayman = new DateTimeZone( "America/Cayman" );
$chicago = new DateTimeZone( "America/Chicago" );
$chihuahua = new DateTimeZone( "America/Chihuahua" );
$costa_rica = new DateTimeZone( "America/Costa_Rica" );
$creston = new DateTimeZone( "America/Creston" );
$cuiaba = new DateTimeZone( "America/Cuiaba" );
$curacao = new DateTimeZone( "America/Curacao" );
$danmarkshavn = new DateTimeZone( "America/Danmarkshavn" );
$dawson = new DateTimeZone( "America/Dawson" );
$dawson_creek = new DateTimeZone( "America/Dawson_Creek" );
$denver = new DateTimeZone( "America/Denver" );
$detroit = new DateTimeZone( "America/Detroit" );
$dominica = new DateTimeZone( "America/Dominica" );
$edmonton = new DateTimeZone( "America/Edmonton" );
$eirunepe = new DateTimeZone( "America/Eirunepe" );
$el_salvador = new DateTimeZone( "America/El_Salvador" );
$fort_nelson = new DateTimeZone( "America/Fort_Nelson" );
$fortaleza = new DateTimeZone( "America/Fortaleza" );
$glace_bay = new DateTimeZone( "America/Glace_Bay" );
$goose_bay = new DateTimeZone( "America/Goose_Bay" );
$grand_turk = new DateTimeZone( "America/Grand_Turk" );
$grenada = new DateTimeZone( "America/Grenada" );
$guadeloupe = new DateTimeZone( "America/Guadeloupe" );
$guatemala = new DateTimeZone( "America/Guatemala" );
$guayaquil = new DateTimeZone( "America/Guayaquil" );
$guyana = new DateTimeZone( "America/Guyana" );
$halifax = new DateTimeZone( "America/Halifax" );
$havana = new DateTimeZone( "America/Havana" );
$hermosillo = new DateTimeZone( "America/Hermosillo" );
$indianapolis = new DateTimeZone( "America/Indiana/Indianapolis" );
$knox = new DateTimeZone( "America/Indiana/Knox" );
$marengo = new DateTimeZone( "America/Indiana/Marengo" );
$petersburg = new DateTimeZone( "America/Indiana/Petersburg" );
$tell_city = new DateTimeZone( "America/Indiana/Tell_City" );
$vevay = new DateTimeZone( "America/Indiana/Vevay" );
$vincennes = new DateTimeZone( "America/Indiana/Vincennes" );
$winamac = new DateTimeZone( "America/Indiana/Winamac" );
$inuvik = new DateTimeZone( "America/Inuvik" );
$iqaluit = new DateTimeZone( "America/Iqaluit" );
$jamaica = new DateTimeZone( "America/Jamaica" );
$juneau = new DateTimeZone( "America/Juneau" );
$louisville = new DateTimeZone( "America/Kentucky/Louisville" );
$monticello = new DateTimeZone( "America/Kentucky/Monticello" );
$kralendijk = new DateTimeZone( "America/Kralendijk" );
$la_paz = new DateTimeZone( "America/La_Paz" );
$lima = new DateTimeZone( "America/Lima" );
$los_angeles = new DateTimeZone( "America/Los_Angeles" );
$lower_princes = new DateTimeZone( "America/Lower_Princes" );
$maceio = new DateTimeZone( "America/Maceio" );
$managua = new DateTimeZone( "America/Managua" );
$manaus = new DateTimeZone( "America/Manaus" );
$marigot = new DateTimeZone( "America/Marigot" );
$martinique = new DateTimeZone( "America/Martinique" );
$matamoros = new DateTimeZone( "America/Matamoros" );
$mazatlan = new DateTimeZone( "America/Mazatlan" );
$menominee = new DateTimeZone( "America/Menominee" );
$merida = new DateTimeZone( "America/Merida" );
$metlakatla = new DateTimeZone( "America/Metlakatla" );
$mexico_city = new DateTimeZone( "America/Mexico_City" );
$miquelon = new DateTimeZone( "America/Miquelon" );
$moncton = new DateTimeZone( "America/Moncton" );
$monterrey = new DateTimeZone( "America/Monterrey" );
$montevideo = new DateTimeZone( "America/Montevideo" );
$montserrat = new DateTimeZone( "America/Montserrat" );
$nassau = new DateTimeZone( "America/Nassau" );
$new_york = new DateTimeZone( "America/New_York" );
$nipigon = new DateTimeZone( "America/Nipigon" );
$nome = new DateTimeZone( "America/Nome" );
$noronha = new DateTimeZone( "America/Noronha" );
$beulah = new DateTimeZone( "America/North_Dakota/Beulah" );
$center = new DateTimeZone( "America/North_Dakota/Center" );
$new_salem = new DateTimeZone( "America/North_Dakota/New_Salem" );
$nuuk = new DateTimeZone( "America/Nuuk" );
$ojinaga = new DateTimeZone( "America/Ojinaga" );
$panama = new DateTimeZone( "America/Panama" );
$pangnirtung = new DateTimeZone( "America/Pangnirtung" );
$paramaribo = new DateTimeZone( "America/Paramaribo" );
$phoenix = new DateTimeZone( "America/Phoenix" );
$portauprince = new DateTimeZone( "America/Port-au-Prince" );
$port_of_spain = new DateTimeZone( "America/Port_of_Spain" );
$porto_velho = new DateTimeZone( "America/Porto_Velho" );
$puerto_rico = new DateTimeZone( "America/Puerto_Rico" );
$punta_arenas = new DateTimeZone( "America/Punta_Arenas" );
$rainy_river = new DateTimeZone( "America/Rainy_River" );
$rankin_inlet = new DateTimeZone( "America/Rankin_Inlet" );
$recife = new DateTimeZone( "America/Recife" );
$regina = new DateTimeZone( "America/Regina" );
$resolute = new DateTimeZone( "America/Resolute" );
$rio_branco = new DateTimeZone( "America/Rio_Branco" );
$santarem = new DateTimeZone( "America/Santarem" );
$santiago = new DateTimeZone( "America/Santiago" );
$santo_domingo = new DateTimeZone( "America/Santo_Domingo" );
$sao_paulo = new DateTimeZone( "America/Sao_Paulo" );
$scoresbysund = new DateTimeZone( "America/Scoresbysund" );
$sitka = new DateTimeZone( "America/Sitka" );
$st_barthelemy = new DateTimeZone( "America/St_Barthelemy" );
$st_johns = new DateTimeZone( "America/St_Johns" );
$st_kitts = new DateTimeZone( "America/St_Kitts" );
$st_lucia = new DateTimeZone( "America/St_Lucia" );
$st_thomas = new DateTimeZone( "America/St_Thomas" );
$st_vincent = new DateTimeZone( "America/St_Vincent" );
$swift_current = new DateTimeZone( "America/Swift_Current" );
$tegucigalpa = new DateTimeZone( "America/Tegucigalpa" );
$thule = new DateTimeZone( "America/Thule" );
$thunder_bay = new DateTimeZone( "America/Thunder_Bay" );
$tijuana = new DateTimeZone( "America/Tijuana" );
$toronto = new DateTimeZone( "America/Toronto" );
$tortola = new DateTimeZone( "America/Tortola" );
$vancouver = new DateTimeZone( "America/Vancouver" );
$whitehorse = new DateTimeZone( "America/Whitehorse" );
$winnipeg = new DateTimeZone( "America/Winnipeg" );
$yakutat = new DateTimeZone( "America/Yakutat" );
$yellowknife = new DateTimeZone( "America/Yellowknife" );
$casey = new DateTimeZone( "Antarctica/Casey" );
$davis = new DateTimeZone( "Antarctica/Davis" );
$dumontdurville = new DateTimeZone( "Antarctica/DumontDUrville" );
$macquarie = new DateTimeZone( "Antarctica/Macquarie" );
$mawson = new DateTimeZone( "Antarctica/Mawson" );
$mcmurdo = new DateTimeZone( "Antarctica/McMurdo" );
$palmer = new DateTimeZone( "Antarctica/Palmer" );
$rothera = new DateTimeZone( "Antarctica/Rothera" );
$syowa = new DateTimeZone( "Antarctica/Syowa" );
$troll = new DateTimeZone( "Antarctica/Troll" );
$vostok = new DateTimeZone( "Antarctica/Vostok" );
$longyearbyen = new DateTimeZone( "Arctic/Longyearbyen" );
$aden = new DateTimeZone( "Asia/Aden" );
$almaty = new DateTimeZone( "Asia/Almaty" );
$amman = new DateTimeZone( "Asia/Amman" );
$anadyr = new DateTimeZone( "Asia/Anadyr" );
$aqtau = new DateTimeZone( "Asia/Aqtau" );
$aqtobe = new DateTimeZone( "Asia/Aqtobe" );
$ashgabat = new DateTimeZone( "Asia/Ashgabat" );
$atyrau = new DateTimeZone( "Asia/Atyrau" );
$baghdad = new DateTimeZone( "Asia/Baghdad" );
$bahrain = new DateTimeZone( "Asia/Bahrain" );
$baku = new DateTimeZone( "Asia/Baku" );
$bangkok = new DateTimeZone( "Asia/Bangkok" );
$barnaul = new DateTimeZone( "Asia/Barnaul" );
$beirut = new DateTimeZone( "Asia/Beirut" );
$bishkek = new DateTimeZone( "Asia/Bishkek" );
$brunei = new DateTimeZone( "Asia/Brunei" );
$chita = new DateTimeZone( "Asia/Chita" );
$choibalsan = new DateTimeZone( "Asia/Choibalsan" );
$colombo = new DateTimeZone( "Asia/Colombo" );
$damascus = new DateTimeZone( "Asia/Damascus" );
$dhaka = new DateTimeZone( "Asia/Dhaka" );
$dili = new DateTimeZone( "Asia/Dili" );
$dubai = new DateTimeZone( "Asia/Dubai" );
$dushanbe = new DateTimeZone( "Asia/Dushanbe" );
$famagusta = new DateTimeZone( "Asia/Famagusta" );
$gaza = new DateTimeZone( "Asia/Gaza" );
$hebron = new DateTimeZone( "Asia/Hebron" );
$ho_chi_minh = new DateTimeZone( "Asia/Ho_Chi_Minh" );
$hong_kong = new DateTimeZone( "Asia/Hong_Kong" );
$hovd = new DateTimeZone( "Asia/Hovd" );
$irkutsk = new DateTimeZone( "Asia/Irkutsk" );
$jakarta = new DateTimeZone( "Asia/Jakarta" );
$jayapura = new DateTimeZone( "Asia/Jayapura" );
$jerusalem = new DateTimeZone( "Asia/Jerusalem" );
$kabul = new DateTimeZone( "Asia/Kabul" );
$kamchatka = new DateTimeZone( "Asia/Kamchatka" );
$karachi = new DateTimeZone( "Asia/Karachi" );
$kathmandu = new DateTimeZone( "Asia/Kathmandu" );
$khandyga = new DateTimeZone( "Asia/Khandyga" );
$kolkata = new DateTimeZone( "Asia/Kolkata" );
$krasnoyarsk = new DateTimeZone( "Asia/Krasnoyarsk" );
$kuala_lumpur = new DateTimeZone( "Asia/Kuala_Lumpur" );
$kuching = new DateTimeZone( "Asia/Kuching" );
$kuwait = new DateTimeZone( "Asia/Kuwait" );
$macau = new DateTimeZone( "Asia/Macau" );
$magadan = new DateTimeZone( "Asia/Magadan" );
$makassar = new DateTimeZone( "Asia/Makassar" );
$manila = new DateTimeZone( "Asia/Manila" );
$muscat = new DateTimeZone( "Asia/Muscat" );
$nicosia = new DateTimeZone( "Asia/Nicosia" );
$novokuznetsk = new DateTimeZone( "Asia/Novokuznetsk" );
$novosibirsk = new DateTimeZone( "Asia/Novosibirsk" );
$omsk = new DateTimeZone( "Asia/Omsk" );
$oral = new DateTimeZone( "Asia/Oral" );
$phnom_penh = new DateTimeZone( "Asia/Phnom_Penh" );
$pontianak = new DateTimeZone( "Asia/Pontianak" );
$pyongyang = new DateTimeZone( "Asia/Pyongyang" );
$qatar = new DateTimeZone( "Asia/Qatar" );
$qostanay = new DateTimeZone( "Asia/Qostanay" );
$qyzylorda = new DateTimeZone( "Asia/Qyzylorda" );
$riyadh = new DateTimeZone( "Asia/Riyadh" );
$sakhalin = new DateTimeZone( "Asia/Sakhalin" );
$samarkand = new DateTimeZone( "Asia/Samarkand" );
$seoul = new DateTimeZone( "Asia/Seoul" );
$shanghai = new DateTimeZone( "Asia/Shanghai" );
$singapore = new DateTimeZone( "Asia/Singapore" );
$srednekolymsk = new DateTimeZone( "Asia/Srednekolymsk" );
$taipei = new DateTimeZone( "Asia/Taipei" );
$tashkent = new DateTimeZone( "Asia/Tashkent" );
$tbilisi = new DateTimeZone( "Asia/Tbilisi" );
$tehran = new DateTimeZone( "Asia/Tehran" );
$thimphu = new DateTimeZone( "Asia/Thimphu" );
$tokyo = new DateTimeZone( "Asia/Tokyo" );
$tomsk = new DateTimeZone( "Asia/Tomsk" );
$ulaanbaatar = new DateTimeZone( "Asia/Ulaanbaatar" );
$urumqi = new DateTimeZone( "Asia/Urumqi" );
$ustnera = new DateTimeZone( "Asia/Ust-Nera" );
$vientiane = new DateTimeZone( "Asia/Vientiane" );
$vladivostok = new DateTimeZone( "Asia/Vladivostok" );
$yakutsk = new DateTimeZone( "Asia/Yakutsk" );
$yangon = new DateTimeZone( "Asia/Yangon" );
$yekaterinburg = new DateTimeZone( "Asia/Yekaterinburg" );
$yerevan = new DateTimeZone( "Asia/Yerevan" );
$azores = new DateTimeZone( "Atlantic/Azores" );
$bermuda = new DateTimeZone( "Atlantic/Bermuda" );
$canary = new DateTimeZone( "Atlantic/Canary" );
$cape_verde = new DateTimeZone( "Atlantic/Cape_Verde" );
$faroe = new DateTimeZone( "Atlantic/Faroe" );
$madeira = new DateTimeZone( "Atlantic/Madeira" );
$reykjavik = new DateTimeZone( "Atlantic/Reykjavik" );
$south_georgia = new DateTimeZone( "Atlantic/South_Georgia" );
$st_helena = new DateTimeZone( "Atlantic/St_Helena" );
$stanley = new DateTimeZone( "Atlantic/Stanley" );
$adelaide = new DateTimeZone( "Australia/Adelaide" );
$brisbane = new DateTimeZone( "Australia/Brisbane" );
$broken_hill = new DateTimeZone( "Australia/Broken_Hill" );
$darwin = new DateTimeZone( "Australia/Darwin" );
$eucla = new DateTimeZone( "Australia/Eucla" );
$hobart = new DateTimeZone( "Australia/Hobart" );
$lindeman = new DateTimeZone( "Australia/Lindeman" );
$lord_howe = new DateTimeZone( "Australia/Lord_Howe" );
$melbourne = new DateTimeZone( "Australia/Melbourne" );
$perth = new DateTimeZone( "Australia/Perth" );
$sydney = new DateTimeZone( "Australia/Sydney" );
$amsterdam = new DateTimeZone( "Europe/Amsterdam" );
$andorra = new DateTimeZone( "Europe/Andorra" );
$astrakhan = new DateTimeZone( "Europe/Astrakhan" );
$athens = new DateTimeZone( "Europe/Athens" );
$belgrade = new DateTimeZone( "Europe/Belgrade" );
$berlin = new DateTimeZone( "Europe/Berlin" );
$bratislava = new DateTimeZone( "Europe/Bratislava" );
$brussels = new DateTimeZone( "Europe/Brussels" );
$bucharest = new DateTimeZone( "Europe/Bucharest" );
$budapest = new DateTimeZone( "Europe/Budapest" );
$busingen = new DateTimeZone( "Europe/Busingen" );
$chisinau = new DateTimeZone( "Europe/Chisinau" );
$copenhagen = new DateTimeZone( "Europe/Copenhagen" );
$dublin = new DateTimeZone( "Europe/Dublin" );
$gibraltar = new DateTimeZone( "Europe/Gibraltar" );
$guernsey = new DateTimeZone( "Europe/Guernsey" );
$helsinki = new DateTimeZone( "Europe/Helsinki" );
$isle_of_man = new DateTimeZone( "Europe/Isle_of_Man" );
$istanbul = new DateTimeZone( "Europe/Istanbul" );
$jersey = new DateTimeZone( "Europe/Jersey" );
$kaliningrad = new DateTimeZone( "Europe/Kaliningrad" );
$kiev = new DateTimeZone( "Europe/Kiev" );
$kirov = new DateTimeZone( "Europe/Kirov" );
$lisbon = new DateTimeZone( "Europe/Lisbon" );
$ljubljana = new DateTimeZone( "Europe/Ljubljana" );
$london = new DateTimeZone( "Europe/London" );
$luxembourg = new DateTimeZone( "Europe/Luxembourg" );
$madrid = new DateTimeZone( "Europe/Madrid" );
$malta = new DateTimeZone( "Europe/Malta" );
$mariehamn = new DateTimeZone( "Europe/Mariehamn" );
$minsk = new DateTimeZone( "Europe/Minsk" );
$monaco = new DateTimeZone( "Europe/Monaco" );
$moscow = new DateTimeZone( "Europe/Moscow" );
$oslo = new DateTimeZone( "Europe/Oslo" );
$paris = new DateTimeZone( "Europe/Paris" );
$podgorica = new DateTimeZone( "Europe/Podgorica" );
$prague = new DateTimeZone( "Europe/Prague" );
$riga = new DateTimeZone( "Europe/Riga" );
$rome = new DateTimeZone( "Europe/Rome" );
$samara = new DateTimeZone( "Europe/Samara" );
$san_marino = new DateTimeZone( "Europe/San_Marino" );
$sarajevo = new DateTimeZone( "Europe/Sarajevo" );
$saratov = new DateTimeZone( "Europe/Saratov" );
$simferopol = new DateTimeZone( "Europe/Simferopol" );
$skopje = new DateTimeZone( "Europe/Skopje" );
$sofia = new DateTimeZone( "Europe/Sofia" );
$stockholm = new DateTimeZone( "Europe/Stockholm" );
$tallinn = new DateTimeZone( "Europe/Tallinn" );
$tirane = new DateTimeZone( "Europe/Tirane" );
$ulyanovsk = new DateTimeZone( "Europe/Ulyanovsk" );
$uzhgorod = new DateTimeZone( "Europe/Uzhgorod" );
$vaduz = new DateTimeZone( "Europe/Vaduz" );
$vatican = new DateTimeZone( "Europe/Vatican" );
$vienna = new DateTimeZone( "Europe/Vienna" );
$vilnius = new DateTimeZone( "Europe/Vilnius" );
$volgograd = new DateTimeZone( "Europe/Volgograd" );
$warsaw = new DateTimeZone( "Europe/Warsaw" );
$zagreb = new DateTimeZone( "Europe/Zagreb" );
$zaporozhye = new DateTimeZone( "Europe/Zaporozhye" );
$zurich = new DateTimeZone( "Europe/Zurich" );
$antananarivo = new DateTimeZone( "Indian/Antananarivo" );
$chagos = new DateTimeZone( "Indian/Chagos" );
$christmas = new DateTimeZone( "Indian/Christmas" );
$cocos = new DateTimeZone( "Indian/Cocos" );
$comoro = new DateTimeZone( "Indian/Comoro" );
$kerguelen = new DateTimeZone( "Indian/Kerguelen" );
$mahe = new DateTimeZone( "Indian/Mahe" );
$maldives = new DateTimeZone( "Indian/Maldives" );
$mauritius = new DateTimeZone( "Indian/Mauritius" );
$mayotte = new DateTimeZone( "Indian/Mayotte" );
$reunion = new DateTimeZone( "Indian/Reunion" );
$apia = new DateTimeZone( "Pacific/Apia" );
$auckland = new DateTimeZone( "Pacific/Auckland" );
$bougainville = new DateTimeZone( "Pacific/Bougainville" );
$chatham = new DateTimeZone( "Pacific/Chatham" );
$chuuk = new DateTimeZone( "Pacific/Chuuk" );
$easter = new DateTimeZone( "Pacific/Easter" );
$efate = new DateTimeZone( "Pacific/Efate" );
$enderbury = new DateTimeZone( "Pacific/Enderbury" );
$fakaofo = new DateTimeZone( "Pacific/Fakaofo" );
$fiji = new DateTimeZone( "Pacific/Fiji" );
$funafuti = new DateTimeZone( "Pacific/Funafuti" );
$galapagos = new DateTimeZone( "Pacific/Galapagos" );
$gambier = new DateTimeZone( "Pacific/Gambier" );
$guadalcanal = new DateTimeZone( "Pacific/Guadalcanal" );
$guam = new DateTimeZone( "Pacific/Guam" );
$honolulu = new DateTimeZone( "Pacific/Honolulu" );
$kiritimati = new DateTimeZone( "Pacific/Kiritimati" );
$kosrae = new DateTimeZone( "Pacific/Kosrae" );
$kwajalein = new DateTimeZone( "Pacific/Kwajalein" );
$majuro = new DateTimeZone( "Pacific/Majuro" );
$marquesas = new DateTimeZone( "Pacific/Marquesas" );
$midway = new DateTimeZone( "Pacific/Midway" );
$nauru = new DateTimeZone( "Pacific/Nauru" );
$niue = new DateTimeZone( "Pacific/Niue" );
$norfolk = new DateTimeZone( "Pacific/Norfolk" );
$noumea = new DateTimeZone( "Pacific/Noumea" );
$pago_pago = new DateTimeZone( "Pacific/Pago_Pago" );
$palau = new DateTimeZone( "Pacific/Palau" );
$pitcairn = new DateTimeZone( "Pacific/Pitcairn" );
$pohnpei = new DateTimeZone( "Pacific/Pohnpei" );
$port_moresby = new DateTimeZone( "Pacific/Port_Moresby" );
$rarotonga = new DateTimeZone( "Pacific/Rarotonga" );
$saipan = new DateTimeZone( "Pacific/Saipan" );
$tahiti = new DateTimeZone( "Pacific/Tahiti" );
$tarawa = new DateTimeZone( "Pacific/Tarawa" );
$tongatapu = new DateTimeZone( "Pacific/Tongatapu" );
$wake = new DateTimeZone( "Pacific/Wake" );
$wallis = new DateTimeZone( "Pacific/Wallis" );
$utc = new DateTimeZone( "UTC" );
$bad = "Australia/Rome"; 


// above list comes from this little function 
/* $tzArray = [];
$timezone = timezone_identifiers_list();
foreach( $timezone as $zone ){
    $continent = strstr( $zone, '/', true );
    $city = strstr( $zone, '/', false );
    $city = substr( $city, 1 );
    if( $city == '' ){
        $city = "UTC";
    }
    $city = str_replace( '-', '', $city );
    $tzArray[] .= $zone;
} */

// we can set date/time here first
$date1 = new DateTime( "2021-01-04T00:00:00Z" );
$date2 = new DateTime( "2021-01-04T00:00:00Z" );
$count = 0;
// now we can iterate all we want
// build as an array
$timezone = timezone_identifiers_list();
$tzArray = [];
$count = 0;

foreach(  $timezone as $zone ){
    if( $count % 2 == 0 ){
        $tzArray[] .= $zone;
    }
    $count++;
}


$tzArray[] .= $bad;

foreach( $tzArray as $tz ){
    echo $tz. '<br>';
}

foreach( $tzArray as $tzl ){
    try{
        if( ( $date1 )->setTimezone( new DateTimeZone($tzl) ) === false ){
            throw new Exception();
        }
    } catch ( Exception $e ){
        ( $date1 )->setTimezone( new DateTimeZone("UTC") );
    } 
    foreach( $tzArray as $tzl2 ){
        try{
            if( ( $date2 )->setTimezone( new DateTimeZone($tzl2) ) === false ){
                throw new Exception();
            }
        } catch ( Exception $e ){
            ( $date2 )->setTimezone( new DateTimeZone("UTC") );
        }

        $array_test = $aligent->getTotalDaysBetween( $date1, $date2 ); //
        ( $array_test == 0 )? $pass++ : array_push( $failarray, ['array_test', 0, $array_test ]);
    }
}

/////////////////////
//    TZ BadTest   ///
///////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z" );
$date2 = new DateTime( "2021-01-04T00:00:00Z" );
try{
    if( ( $date1 )->setTimezone( $london ) === false ){
        throw new Exception();    
    }
} catch( Exception $e ){
    //echo var_export( $e );
} finally {
    ( $date1 )->setTimezone( new DateTimeZone( "Europe/London" ) );
}

try{
    if( ( $date2 )->setTimezone( new DateTimeZone( $bad ) ) === false ){
        throw new Exception();    
    }
} catch( Exception $e ){
   // echo var_export( $e );
} finally {
    ( $date2 )->setTimezone( new DateTimeZone( "Europe/London" ) );
}
$d_td_0_day_TZ_bad = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_0_day_TZ_bad == 0 )? $pass++ : array_push( $failarray, ['d_td_0_day_TZ_bad', 0, $d_td_0_day_TZ_bad ]);

/////////////////////
//    TZ +0        ///
///////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z" );
$date2 = new DateTime( "2021-01-04T00:00:00Z" );

( $date1 )->setTimezone( $london );
( $date2 )->setTimezone( $london );

$d_td_0_day_TZ_plus_0 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_0_day_TZ_plus_0 == 0 )? $pass++ : array_push( $failarray, ['d_td_0_day_TZ_plus_0', 0, $d_td_0_day_TZ_plus_0 ]);

/////////////////////
//    TZ +1        ///
///////////////////////
( $date1 )->setTimezone( $london );
( $date2 )->setTimezone( $rome );
$d_td_0_day_TZ_plus_1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_0_day_TZ_plus_1 == 0 )? $pass++ : array_push( $failarray, ['d_td_0_day_TZ_plus_1', 0, $d_td_0_day_TZ_plus_1 ]);

/////////////////////
//    TZ +2        ///
///////////////////////
( $date1 )->setTimezone( $london );
( $date2 )->setTimezone( $rome );
$d_td_0_day_TZ_plus_1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_0_day_TZ_plus_1 == 0 )? $pass++ : array_push( $failarray, ['d_td_0_day_TZ_plus_1', 0, $d_td_0_day_TZ_plus_1 ]);

/////////////////////
//    TZ +1        ///
///////////////////////
( $date1 )->setTimezone( $london );
( $date2 )->setTimezone( $rome );
$d_td_0_day_TZ_plus_1 = $aligent->getTotalDaysBetween( $date1, $date2 ); //
( $d_td_0_day_TZ_plus_1 == 0 )? $pass++ : array_push( $failarray, ['d_td_0_day_TZ_plus_1', 0, $d_td_0_day_TZ_plus_1 ]);



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