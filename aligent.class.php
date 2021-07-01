<?php
Class Aligent extends DateTime
{   
    /**
     *  Return difference between $date1 and $date2
     * 
     * @param Datetime|String $date2
     * 
     * @return DateInterval // remove 1 day if 1 < $days > 0
     * 
     */
    Public function getTotalDays( $date1, $date2 ){
        if( !( $date1 instanceof DateTime ) ){
            $date1 = new DateTime( $date1 );
        }

        if( !( $date2 instanceof DateTime ) ){
            $date2 = new DateTime( $date2 );
        }  

        return $days = $date1->diff( $date2 )->format( '%a' );
    }
    
    /**
     *  Return difference between $date1 and $date2
     * 
     * @param Datetime|String $date2
     * 
     * @return DateInterval // remove 1 day if 1 < $days > 0
     * 
     */
    Public function getTotalDaysBetween( $date1, $date2, $flag = '' ){
        if( !( $date1 instanceof DateTime ) ){
            $date1 = new DateTime( $date1 );
        }

        if( !( $date2 instanceof DateTime ) ){
            $date2 = new DateTime( $date2 );
        }  

        $frog = 365;
        $leaps = $this->frogger( $date1, $date2 );
        $frogLeaps = $frog + $leaps;
        $splice = 1;

        $days = $this->getTotalDays( $date1, $date2 );

        if( $days > 0 ){
            $days--;
        }  

        if( is_int( $flag ) ){
            $splice = $this->getSplice( $flag - 1 );
        }

        if( $flag == 4 ){            
            return floor( $days / $frogLeaps );
        } else {
            return floor( $days * $splice );
        }
        
        return 0;
    }

    /**
     *  Return Weekdays only difference between $date1 and $date2
     * 
     * @param Datetime|String $date2
     * 
     * @return DateInterval
     * 
     */
    Public function getweekdaysBetween( $date1, $date2, $flag = '' ){

        if( !( $date1 instanceof DateTime ) ){
            $date1 = new DateTime( $date1 );
        }

        if( !( $date2 instanceof DateTime ) ){
            $date2 = new DateTime( $date2 );
        }  

         if( is_int( $flag ) ){
            $splice = $this->getSplice( $flag - 1 );
        } else {
            $splice = 1;
        }   

        $frog = 365;
        $leaps = $this->frogger( $date1, $date2 );
        $frogLeaps = $frog + $leaps;
        $days = $this->getTotalDaysBetween( $date1, $date2 ); // account for inbetween

        $weeks_difference = floor( $days / 7 ); // how many int units
        $days_remainder = floor( $days % 7 ); // how many units left over

        if( $days_remainder > 6 ){
            $days_remainder--;
        }
        if( $days_remainder > 5 ){
            $days_remainder--;
        }

        $weekdays = ($weeks_difference * 5 ) + $days_remainder ;

        if( $flag == 4 ){ 
            ( $frogger )?? $frog++;            
            $days = floor( $days / $frog );
        } else {
            $days = floor( $weekdays * $splice );
        }

        return $days;
    }
    
    /**
     *  Return Count of complete weeks $date2
     * 
     * @param Datetime|String $date2
     * 
     * @return DateInterval
     * 
     */
    function getcompleteWeeks( $date1, $date2, $flag = '' ){

        if( !( $date1 instanceof DateTime ) ){
            $date1 = new DateTime( $date1 );
        }

        if( !( $date2 instanceof DateTime ) ){
            $date2 = new DateTime( $date2 );
        }

        if( is_int( $flag ) ){
            $splice = $this->getSplice( $flag - 1 );
        } else {
            $splice = 1;
        }

        $frog = 365;
        $leaps = $this->frogger( $date1, $date2 );
        $frogLeaps = $frog + $leaps;

        $days = $this->getTotalDaysBetween( $date1, $date2 ); // account for inbetween

        if( $days > 6 ){
            switch( $flag ){
                case 1:
                case 2: 
                case 3: 
                    return floor( $days * $splice );
                    break;

                case 4: 
                default:
                    return floor( $days / 7 );
                    break;
            }  
        } else {
            return 0;
        }   
        return 0;
    }

    /**
     *  Return the timeing requried to splice the day 
     * requested by api call
     * 
     * @param Integer $flag
     * 
     * @return Integer
     * 
     */
    Public function getSplice( $flag ){
        if( !is_null( $flag ) ){
            $spliceArray = ['86400', '1400', '24', '31622400'];
            ( $flag > 0 )?? $flag--;
            return $spliceArray[ $flag ];
        } else {
            return 1;
        }
        return 0;
    }

    /**
     *  Return the year of a date 
     * 
     * @param Datetime|String $date
     * 
     * @return String
     * 
     */
    Public function _getYear( $date ){
        return $date->format('Y');
    }

    /**
     *  Return if year is a leap year 
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _isLeap( $date ){
        $year = $date->format( 'Y' );
        $start = new DateTime("$year-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ));
        $end = new DateTime("$year-12-31T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ));
        
        return ( $this->getTotalDays( $start, $end ) > 364 )? true : false;        
    }

    /**
     *  Return Date object set to YYYY-Feb 29
     * 
     * @param Datetime|String $date
     * 
     * @return Datetime
     * 
     */
    Public function _setFeb29Start( $date ){  
        $_isLeap = $this->_isLeap( $date );
        $year = $date->format( 'Y' );

        if( $_isLeap == true ) {
            return $leapDay = new DateTime("$year-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ));
        } else {
            // we need to get modulus remainder to find out previous leap year.
            // So we can return a date to count later. without it we dont have
            // defensive coding to protect the api
            
            $year_remainder = ( $year % 4 );
            $nextLeap = $year + $year_remainder + 4;
            return $leapDay = new DateTime("$nextLeap-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ));
        }
        return false;
    } 

    /**
     *  Return Previous Leap Year Date object set to YYYY-Feb 29
     * 
     * @param Datetime|String $date
     * 
     * @return Datetime
     * 
     */
    Public function _setFeb29End( $date ){  
        $_isLeap = $this->_isLeap( $date );
        $year = $date->format( 'Y' );

        if( $_isLeap == true ) {
            return $leapDay = new DateTime("$year-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ));
        } else {
            // we need to get modulus remainder to find out previous leap year.
            // So we can return a date to count later. without it we dont have
            // defensive coding to protect the api
            
            $year_remainder = ( $year % 4 );
            $nextLeap = $year - $year_remainder;
            return $leapDay = new DateTime("$nextLeap-02-29T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ));
        }
        return false;
    } 

    /**
     *  Return Count of Leapyears inbetween $date1, $date2
     * 
     * @param Datetime|String $date1, $date2
     * 
     * @return Integer
     * 
     */
    Public function frogger( $date1, $date2 ){

        if( !( $date1 instanceof DateTime ) ){
            $date1 = new DateTime( $date1 );
        }

        if( !( $date2 instanceof DateTime ) ){
            $date2 = new DateTime( $date2 );
        }

        $startYear = $this->_getYear( $date1 );
        $endYear = $this->_getYear( $date2 );
        $totalYears = $endYear - $startYear;   

        // we want to see how many leap years are in there so we floor totalYears / 4
        $leap = 0;

        $startDate = ( $date1 < $date2 )? $date1 : $date2;
        $endDate = ( $date1 > $date2 )? $date1 : $date2;

        $leapDayStart = $this->_setFeb29Start( $startDate ); // if not in a leap year !Important return next leap year
        $leapDayEnd = $this->_setFeb29End( $endDate ); // if not in a leap year !Important return next leap year        
        
        // we might have a leap year, so lets do the math 
        /* if( $totalYears > 0 ){      */ 
            // lets be defensive and check if the start date is before next leap year  
            if( $startDate < $leapDayStart && $leapDayStart != false )
            {
                $leap++;            
            }     

            // lets be defensive and check if the end date is after next leap year            
            if( $endDate > $leapDayEnd && $leapDayEnd != false)
            {
                $leap++;
            } 

            return $leap; // we have at least 1 leap year
      /*   } else {
            return 0; // we didnt need extra compute time so we just pass 0
        } */

        return 0;
    }
}
?>