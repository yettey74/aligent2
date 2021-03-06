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
        if( is_array($this->dateObject1)){
            return 0;
        }     
        return $this->dateObject1;        
    }
        
    /**
     * Getter : dateObject2
     * var : $dateObject2
     * return date()
     */
    function getDateObject2(){
        if( is_array($this->dateObject2)){
            return 0;
        }     
        return $this->dateObject2;
    }
    
    /**
     * Getter : datetype
     * var : $datetype
     * return int
     */
    function getDateType(){
        if( $this->datetype >= 0 && $this->datetype <= 3 ){
            return $this->datetype;
        } else {
            return 0;
        }
    }
    
    /**
     * Getter : timetype
     * var : $timetype
     * return int
     */
    function getTimeType(){
        if( $this->timetype >= 0 && $this->timetype <= 4 ){
            return $this->timetype;
        } else {
            return 0;
        }
    }

    /**
     * Getter : timezone1
     * var : $timezone1
     * return int
     */
    function getTimezone1(){
        if( $this->timezone1 >= -12 && $this->timezone1 <= 13){
            return $this->timezone1;            
        }                
        return 0;
    }

    /**
     * Getter : timezone2
     * var : $timezone2
     * return int
     */
    function getTimezone2(){        
        if( $this->timezone2 >= -12 && $this->timezone2 <= 13){
            return $this->timezone2;
        }          
        return 0;
    }
    
    /**
     * Sets the time interval to return result as.
     * 0=>days, 1=>seconds, 2=>minutes, 3=>hours, 4=>years
     * var : $timetype
     * return int 
     */
    function getSplice( $timetype ){
        if( !is_null( $timetype ) ){
            if( $this->timetype >= 0 && $this->timetype <= 4){
                $spliceArray = ['0'=> 1, '1'=> 86400, '2'=> 1400, '3'=> 24, '4'=> 31622400];
                return $spliceArray[ $timetype ];
            } else {
                return 0;
            }
        } else {
            return 0;
        }
        return 0;
    }

    /**
     * Takes 2 timezones and works out the difference
     * var : $timezone1, $timezone2
     * return int or 0
     */
    function getZoneDiff( $timezone1, $timezone2 ){
        if( $timezone1 != $timezone2 ){
            if( $timezone1 < 0 && $timezone2 < 0 ){
                //Handle negative numbers
                if( $timezone1 < $timezone2 ){
                    return abs( $timezone1 - $timezone2 );
                } else {
                    return abs( $timezone2 - $timezone1 );
                }
            }
            
            if( $timezone1 < 0 && $timezone2 > 0 ){
                return abs( $timezone1 - $timezone2 );
            }
            
            if( $timezone1 > 0 && $timezone2 < 0 ){   
                return abs( $timezone1 + abs( $timezone2 ) );
            }
            
            if( $timezone1 > 0 && $timezone2 > 0 ){      
                return abs( $timezone1 - $timezone2 );
            } 
        } else {
            return 0;
        }
        return 0;
    }

    /**
     * Displays the Group by choice as text
     * var : $datetype
     * return int
     */
    function getDisplayTypeText( $datetype ){
        if( $this->datetype >= 0 && $this->datetype <= 3){
            $displayTypeArray = ['0' => 'Total Days','1' => 'Total Days', '2'=> 'Total Weekdays', '3'=> 'Complete Weeks' ];
            return $displayTypeArray[ $datetype ];
        }
        return 0;
    }

    /**
     * Displays the time choice as text
     * var : $timetype
     * return int
     */
    function getDateTypeText( $timetype ){
        if( $this->timetype >= 0 && $this->timetype <= 4){
            $dateTypeArray = ['0' => 'Days', '1'=> 'Seconds', '2'=> 'Minutes', '3'=> 'Hours', '4'=> 'Years'];
            return $dateTypeArray[ $timetype ];
        }
        return 0;
    }

    /**
     * Works out the total days between 2 dates
     * ABS is usd as we dont care which date comes first
     * There is always going to a time lapse between both
     * var : $dateObject1, $dateObject2
     * return int
     */

    function getDaysBetween(){
        $days = ceil( abs( ( strtotime( $this->getDateObject1() ) - strtotime( $this->getDateObject2() )  )/ 86400 ) ); 

      /*   if( is_int( $this->getDateObject1() ) && is_int( $this->getDateObject2() ) ){
            $days = ceil( abs( ( $this->getDateObject1() - $this->getDateObject2()  )/ 86400 ) );        
        } */

        // Just return 0 days as we dont want -1
        if( $days == 0 ){
            $days = 0;
        }
        // if days is greater than 2 we 
        if( $days == 1){
            $days = 0;
        } 

        if( $days > 1 ){
            --$days;
        }
        
        return $days;
    }

    /**
     * Works out the total weekdays between 2 dates
     * var : $dateObject1, $dateObject2
     * return int
     */
    function getweekdaysBetween(){
        $difference = ceil( abs( ( $this->getDaysBetween() ) ) );
        $days_difference = floor( $difference );
        $weeks_difference = floor( $days_difference / 7 );
        $days_remainder = floor( $days_difference % 7 );
        // Deal with Sunday
        if ( $days_remainder > 6 ) { 
            $days_remainder--;
        }
        // Deal with Saturday
        if ( $days_remainder > 5 ) { 
            $days_remainder--;
        }
        return ( ( $weeks_difference * 5 ) + $days_remainder );
    }
    
    /**
     * Works out the total weeks between 2 dates
     * Handles options if total days or just weekdays
     * var : $dateObject1, $dateObject2
     * return int total weeks or 0
     */
    function getcompleteWeeks(){
        if( $this->getDaysBetween() > 6 ){
            return round( ( $this->getDaysBetween() / 7), 0) ;
        } else {
            return 0;
        }        
    }

    /**
     * Works out the integer value
     * var : $timetype, $datetype
     * return int
     */
    function _apiObject( $timetype, $datetype ){
        $timeToken = 0;
        $splice = $this->getSplice( $this->timetype );
        $date1 = $this->getDateObject1();
        $date2 = $this->getDateObject2();
        $datecheck1 = $this->_isDateValid( $date1 );
        $datecheck2 = $this->_isDateValid( $date2 );
        if( $this->getDaysBetween() > 0){
            $offset = ( $this->getZoneDiff( $this->timezone1, $this->timezone2 ) > 24 )? 1 : 0;
        } else {
            $offset = 0;
        }

        if( is_string( $this->getDateObject1() ) && is_string( $this->getDateObject2() ) ){
            if( $datecheck1 == true && $datecheck2 == true ){
                // deal with total days
                switch( $datetype ){
                    // total weekdays                
                    case 2:
                        if( $timetype == 4 ){
                            return floor( ($this->getweekdaysBetween() + $offset ) / 365 );
                        } else {
                            return floor( $this->getweekdaysBetween() + $offset ) * $splice;
                        }
                    break;
                    // Complete Weeks
                    case 3:
                        if( $timetype == 4 ){
                            return floor( ($this->getcompleteWeeks() + $offset ) / 365 );
                        } else {
                            if( $timetype == 0 ){ // deal with seconds
                                return floor( $this->getcompleteWeeks( ) ) * $splice;
                            } else {
                                return ( floor( $this->getcompleteWeeks() ) * 7 ) * $splice;
                            } 
                        }
                    break;
                    //total days
                    default:
                        if( $timetype == 4 ){
                            if( $this->_isLeapYear() ){
                                return floor( ($this->getDaysBetween() + $offset ) / 366 );
                            } else {                            
                                return floor( ($this->getDaysBetween() + $offset ) / 365 );
                            }
                        } else {
                            return floor( $this->getDaysBetween() + $offset ) * $splice;
                        }
                    break; 
                } 
            } else {
                return 0;
            } 
        } else {
            return 0;
        }
    }

    function _isDateValid( $date ){
        // we want to check the string has some form of date structure
        // as DateTime lib does not handle null or NaN either 
        if( strtotime( $date ) == NULL ){ return 0;}
        //if( is_array( $date ) ){ return 0;}
        $pos1 = 0;
        $pos2 = 0;         
        $temp = token_get_all( $date );
        $datestring = $temp[0][1];        
        $pos1 = strpos($datestring, '/');
        $pos2 = strpos($datestring, '-');
        
        if( $pos1 > 0 || $pos2 > 0 ){
            return 1;
        }
        return 0;         
    }

    function _isLeapYear(){
        $days = $this->getDaysBetween();
        if( $days > 364 ){
            return 1;
        }
        return 0;
    }

    /**
     * Formats the objects into a string to output to screen
     * return string
     */
    function _toString()
    {
        return  'Date 1 strtotime: ' . strtotime( $this->getDateObject1() )  . '<br>' .
                'Date 1 RAW: ' . $this->dateObject1 . '<br>' .
                'Date 1 Valid: ' . ( ( $this->_isDateValid( $this->dateObject1) )? 'True': 'False') . '<br>' .
                'Timezone 1: ' . $this->getTimezone1() . '<br>' .
                'Date 2 strtotime: ' . strtotime( $this->getDateObject2() ) . '<br>' .
                'Date 2 RAW: ' . $this->dateObject2 . '<br>' .
                'Date 1 Valid: ' . ( ( $this->_isDateValid( $this->dateObject2 ) )? 'True': 'False') . '<br>' .
                'Timezone 2: ' . $this->getTimezone2() . '<br>' .
                'Days Between: ' . $this->getDaysBetween() . '<br>' .
                'Weekdays Between: ' . $this->getweekdaysBetween() . '<br>' .
                'Complete Weeks: ' . $this->getcompleteWeeks() . '<br>' .
                'Count By: ' . $this->datetype . '=>' . $this->getDisplayTypeText( $this->datetype ) . '<br>' .
                'Display in: ' . $this->timetype . '=>' . $this->getDateTypeText( $this->timetype ) . '<br>' .
                'Zone Diff: ' . $this->getZoneDiff( $this->timezone1, $this->timezone2 ) . ' Hours<br>' .
                'Leap Year: ' . $this->_isLeapYear() . '<br>' .
                'API Request: ' . $this->_apiObject( $this->timetype, $this->datetype ) . '<br>';
    }
}
?>