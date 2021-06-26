<?php
/**
 * Author : Scot Henderson
 * date : 25/06/2021
 * package : Thyme
 * No Requirment for Public / Private key
 */

class thyme
{
    private $dateObject1;
	private $dateObject2;
	private $timezone1;
	private $timezone2;
	private $datetype;
	private $timetype;

    /**
     * Construct : thyme Object
     * vars : $dateObject1, $dateObject2, $timezone1, $timezone2, $datetype, $timetype
     * return Object
     */
    function __construct(   
                            $dateObject1, 
                            $dateObject2,
                            $timezone1 = '',
                            $timezone2 = '',
                            $datetype = '',
                            $timetype = ''
                        )
                        {
                            $this->dateObject1 = $dateObject1;
                            $this->dateObject2 = $dateObject2;
                            $this->timezone1 = $timezone1;
                            $this->timezone2 = $timezone2;
                            $this->datetype = $datetype;
                            $this->timetype = $timetype;
                        }
        
    /**
     * Getter : dateObject1
     * var : $dateObject1
     * return date()
     */
    function getDateObject1(){
        if( _isValid( $this->dateObject1 ) ){
            return $this->dateObject1;
        }
        return false;
    }
        
    /**
     * Getter : dateObject2
     * var : $dateObject2
     * return date()
     */
    function getDateObject2(){
        if( _isValid( $this->dateObject2 ) ){
            return $this->dateObject2;
        }
        return false;
    }
    
    /**
     * Getter : datetype
     * var : $datetype
     * return date()
     */
    function getDateType(){
        if( $this->datetype >= 0 && $this->datetype <= 3 ){
            return $this->datetype;
        }
        return false;
    }
    
    /**
     * Getter : timetype
     * var : $timetype
     * return date()
     */
    function getTimeType(){
        if( $this->timetype >= 0 && $this->timetype <= 4 ){
            return $this->timetype;
        }
        return false;
    }

    /**
     * Getter : timezone1
     * var : $timezone1
     * return date()
     */
    function getTimezone1(){
        if( $this->timezone1 >= -12 && $this->timezone1 <= 13){
            return $this->timezone1;
        }
        return false;
    }

    /**
     * Getter : timezone2
     * var : $timezone2
     * return date()
     */
    function getTimezone2(){
        if( $this->timezone2 >= -12 && $this->timezone2 <= 13){
            return $this->timezone2;
        }
        return false;
    }
    
    /**
     * Sets the time interval to return result as.
     * 0=>days, 1=>seconds, 2=>minutes, 3=>hours, 4=>years
     * var : $timetype
     * return int $splice
     */
    function getSplice( $timetype ){
        if( $this->timetype >= 0 && $this->timetype <= 4){
            $spliceArray = ['0'=> 1, '1'=> 86400, '2'=> 1400, '3'=> 24, '4'=> 31622400];
            return $spliceArray[ $timetype ];
        }
        return false;
    }   

    function getZoneDiff( $timezone1, $timezone2 ){
        if( $timezone1 != $timezone2 ){
            return abs($timezone1) + abs( $timezone2 );
        } else {
            return 0;
        }
        return false;
    }

    function getDisplayTypeText( $datetype ){
        if( $this->datetype >= 0 && $this->datetype <= 3){
            $displayTypeArray = ['0' => 'Total Days','1' => 'Total Days', '2'=> 'Total Weekdays', '3'=> 'Complete Weeks' ];
            return $displayTypeArray[ $datetype ];
        }
        return false;
    }

    function getDateTypeText( $timetype ){
        if( $this->timetype >= 0 && $this->timetype <= 4){
            $dateTypeArray = ['0' => 'Days', '1'=> 'Seconds', '2'=> 'Minutes', '3'=> 'Hours', '4'=> 'Years'];
            return $dateTypeArray[ $timetype ];
        }
        return false;
    }

    function daysbetween( $dateObject1, $dateObject2 ){
        return ceil( abs( ( $dateObject2 - $dateObject1 ) / 86400 ) );
    }

    function weekdaysBetween( $dateObject1, $dateObject2 ){        
        
        // get difference in days
        $difference = ( $dateObject2 - $dateObject1 ) / 86400 ;

        if( $difference > 0 ){
            // floor the result to round down to nearest complete day
            $days_difference  = floor( $difference );

            // floor the result to round down to nearest Complete week
            $weeks_difference = floor($days_difference / 7);

            // Start day in seconds
            $first_day = date("w", strtotime($dateObject1) );

            // Do we have a Sunday in the remainder
            $days_remainder = floor($days_difference % 7);

            // Do we have a Saturday in the remainder
            $odd_days = $first_day + $days_remainder; 

            // Sunday
            if ($odd_days > 7) { 
                $days_remainder--;
            }

            // Saturday
            if ($odd_days > 6) { 
                $days_remainder--;
            }

            return (($weeks_difference * 5) + $days_remainder);
        }

        return 0;
    }
    
    function completeWeeks( $dateObject1, $dateObject2 ){  
        return  ( floor( $dateObject2 - $dateObject1 ) / 604800 );
    }

    function _apiObject( $timetype, $datetype ){
        //establish unit of type to return as
        $splice = $this->getSplice( $this->timetype );
        $offset = ( $this->getZoneDiff( $this->timezone1, $this->timezone2 ) >= 24 )? 1 : 0;

        switch( $datetype ){
            case '2':
                if( $timetype == 4 ){
                    return ( ( ($this->weekdaysBetween( $this->dateObject1, $this->dateObject2 ) + $offset ) / $splice ) / 10000000 );
                } else {
                    return ( ( $this->weekdaysBetween( $this->dateObject1, $this->dateObject2 ) + $offset ) * $splice );
                }
            break;
            case '3':
                $week = $this->completeWeeks( $this->dateObject1, $this->dateObject2 );
                if( $datetype == 0 || $datetype == 1 ){
                    $days = $week * 7;
                } else {
                    $days = $week * 5;
                }

                if( $timetype == 4 ){ // We return as a year
                    return floor( ( ( ( $days * $splice ) + $offset ) / $splice ) / 10000000 );
                } else {
                    return ( ( $days * $splice ) + $offset );
                }
            break;
            default:
                if( $timetype == 4 ){
                    return round( ( ($this->daysbetween( $this->dateObject1, $this->dateObject2 )  + $offset ) / 365), 2 );
                } else {
                    return ( ( $this->daysbetween( $this->dateObject1, $this->dateObject2 ) + $offset ) * $splice );
                }                
            break;
        }
    }

    function _isValid( $var ){
        $check = false;
        $check = ( is_null( $var ) )?? true;
        $check = ( is_nan( $var ) )?? true;
        $check = ( is_int( $var ) )?? true;
       // $check = ( is_object( $var ) )?? true;

        return $check;
    }

    function _toString()
    {
        return  'Date 1: ' . date( 'd/m/Y', $this->dateObject1 ) . '<br>' .
                'Timezone 1: ' . $this->getTimezone1() . '<br>' .
                'Date 2: ' . date( 'd/m/Y', $this->dateObject2 ) . '<br>' .
                'Timezone 2: ' . $this->getTimezone2(). '<br>' .
                'Days Between: ' . $this->daysbetween( $this->dateObject1, $this->dateObject2 ) . '<br>' .
                'Weekdays Between: ' . $this->weekdaysBetween( $this->dateObject1, $this->dateObject2 ) . '<br>' .
                'Complete Weeks: ' . $this->completeWeeks( $this->dateObject1, $this->dateObject2 ) . '<br>' .
                'Group By: ' . $this->datetype . '=>' . $this->getDisplayTypeText( $this->datetype ) . '<br>' .
                'Display in: ' . $this->timetype . '=>' . $this->getDateTypeText( $this->timetype ) . '<br>' .
                'Zone Diff: ' . $this->getZoneDiff( $this->timezone1, $this->timezone2 ) . ' Hours<br>' .
                'API Request: ' . $this->_apiObject( $this->timetype, $this->datetype ) . '<br>';
    }
}

?>