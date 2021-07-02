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

        $frog = 365; // our frog has a set number of days to leap
        $leap = $this->frogger( $date1, $date2 ); // sets the amount of leaps         
        $splice = 1;

        $days = $this->getTotalDays( $date1, $date2 );

        if( $days > 0 ){
            $days--;
        }  

        if( is_int( $flag ) ){
            $splice = $this->getSplice( $flag - 1 );
        }
    
        if( $flag == '' ){ // we jsut return default days
            return $days;
        }

        if( $flag == 1 ){ // we want seconds 
            return $days * $splice;      
        }

        if( $flag == 2 ){ // we want minutes 
            return $days * $splice;      
        }
        
        if( $flag == 3 ){ // we want hours 
            return $days * $splice;    
        }
        
        if( $flag == 4 ){ // we want years 
            if( $days > 365 ){
                return floor( $days / ( $frog + 1 ) );
            } else {
                // we need to take leap year into account
                if( floor( ( $days - 1 ) / $frog ) < 0 ){
                    return floor( ( $days ) / $frog );
                } else {
                    return floor( ( $days - 1 ) / $frog ); // adjust as there is no leap year
                }
            }
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

        $frog = 365; // our frog has a set number of days to leap
        $leap = $this->frogger( $date1, $date2 ); // sets the amount of leaps         
        $splice = 1;
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

        if( is_int( $flag ) ){
            $splice = $this->getSplice( $flag - 1 );
        }
    
        if( $flag == '' ){ // we jsut return default days
            return $weekdays;
        }

        if( $flag == 1 ){ // we want seconds 
            return $weekdays * $splice ;
        }

        if( $flag == 2 ){ // we want minutes 
            return $weekdays * $splice;      
        }
        
        if( $flag == 3 ){ // we want hours 
            return $weekdays * $splice;    
        }
        
        if( $flag == 4 ){ // we want years
            if( $days > 365){
                //copensate for floor off by 1 in result
                return floor( ( $weekdays / 5 ) / 52 ) - 1 ; // acount for leap year in count
            } else {
                return floor( ( $weekdays / $frog ) );
            }
             
        } else {                
            // accounting for leap year when there is none and week being 7 days to make sure we throw a stable floor
            return floor( $weekdays * $splice );
        }            
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
        $leap = $this->frogger( $date1, $date2 );

        $days = $this->getTotalDaysBetween( $date1, $date2 ); // account for inbetween

        if( $days > 6 ){
            $weeks = floor( $days / 7 );          
            if( $flag == '' ){ // we jsut return default days
                return $weeks;
            }
    
            if( $flag == 1 ){ // we want seconds 
                return $weeks * $splice * 7;      
            }
    
            if( $flag == 2 ){ // we want minutes 
                return $weeks * $splice * 7;       
            }
            
            if( $flag == 3 ){ // we want hours 
                return $weeks * $splice * 7;     
            }
            
            if( $flag == 4 ){ // we want years 
                if( $days > 365 ){                
                    return floor( $weeks / 52 ) - 1; // take 1 away due to floor rounding up
                } else {
                    return floor( $weeks / ( $frog ) );
                } 
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
     *  Strips date from string 
     * 
     * @param Datetime|String $date
     * 
     * @return date|String
     * 
     */
    Public function _getDate( $date ){
        if( $date instanceof DateTime ){
            return $date;
        }
        /* echo '<br>' .  */$thisDate = $date;
        /* echo '<br>'; */
        // lets get the first digits
        /* echo '<br>Chunk : ' .  */$thisDay = strstr( $thisDate, '-', true );
        /* echo '<br>Chunk : ' .  */$day = $this->_formDigits( $thisDay );

        /* echo '<br>Chunk : ' .  */$chunk = strstr( $thisDate, '-', false );
        /* echo '<br>Chunk : ' .  */$tempDate = substr( $chunk, 1 );

        /* echo '<br>Chunk : ' .  */$thisMonth = strstr( $tempDate, '-', true );
        /* echo '<br>Chunk : ' .  */$month = $this->_formDigits( $thisMonth );
        /* echo '<br>Chunk : ' .  */$chunk = strstr( $tempDate, '-', false );
        /* echo '<br>Chunk : ' .  */$tempDate = substr( $chunk, 1 );
        if( strpos( $date, 'T') == true ){
            /* echo '<br>Chunk : ' .  */$thisYear = strstr( $tempDate, 'T', true );
        } else {
            /* echo '<br>Chunk : ' .  */$thisYear = $tempDate;
        }
        /* echo '<br>Year : ' .  */$year = $this->_formDigits( $thisYear );

        /* echo '<br>Year : ' .  */$date = $year .'-' . $month . '-' . $day;

        return $date;
    }
    
    /**
     *  Strips time from string 
     * 
     * @param Datetime|String $date
     * 
     * @return time|String
     * 
     */
    Public function _getTime( $date ){
        if( $date instanceof DateTime ){
            return $date;
        }
        $thisTime = '00:00:00';

        if( strpos( $date, ':' ) == true ){
          /*   echo '<br>' . $date; */
            /* echo '<br>Year : ' .  */$tempTime = '00:00:00';
            // reverse the order of the date strings
            //echo '<br>';
            //get all after the T
            /* echo '<br>Year : ' .  */$tempTime = strstr( $date, 'T', false );
            /* echo '<br>Year : ' .  */$tempTime = substr( $tempTime, 1 ); // strip the T
            /* echo '<br>Year : ' .  */$hour = $this->_formDigits( strstr( $tempTime, ':', true ) );
            //echo '<br>';
            /* echo '<br>Year : ' .  */$tempTime = $this->_formDigits( strstr( $tempTime, ':', false ) );
            /* echo '<br>Year : ' .  */$tempTime = substr( $tempTime, 1 );
            //echo $tempDate;
            /* echo '<br>Year : ' .  */$min = $this->_formDigits( strstr( $tempTime, ':', true ) );
            //echo '<br>';
            /* echo '<br>Year : ' .  */$tempTime = $this->_formDigits( strstr( $tempTime, ':', false ) );
            /* echo '<br>Year : ' .  */$tempTime = substr( $tempTime, 1 );
            //echo $tempDate;
            /* echo '<br>Year : ' .  */$sec = $this->_formDigits( strstr( $tempTime, 'T', true ) );
            //echo '<br>';
            /* echo '<br>Time post : ' .   */$thisTime = $hour .':' . $min . ':' . $sec;
        }

        return $thisTime;
    }

    /**
     *  Strips Timezone from string 
     * 
     * @param Datetime|String $date
     * 
     * @return tz|String
     * 
     */
    Public function _getZone( $date ){
        if( $date instanceof DateTime ){
            return $date;
        }
        $thisZone = $date;
        $tzHours = '00';
        $tzMinutes = '00';

        if( strpos( $date, '+') == true ){
            /* echo '<br>' .  */$tzString = strstr( $thisZone, '+', false ); // get all after +

            /* echo '<br> Hours' .  */$tzHours = $this->_formDigits( strstr( $tzString, ':', true ) );
            /* echo '<br> Hours' .  */$tzHours = substr( $tzHours, 1 );
            /* echo '<br>' .  */$tzMinutes = $this->_formDigits( strstr( $tzString, ':', false ) ); 
            /* echo '<br> Minutes' .  */$tzMinutes = substr( $tzMinutes, 1 );   
            /* echo '<br>' .  */$thisZone = $tzHours .':' . $tzMinutes;
        } else {
            $thisZone = '00:00';
        }  

        return $thisZone;
    }

    /**
     *  Strips date from string 
     * 
     * @param Datetime|String $date
     * 
     * @return date|String
     * 
     */
    Public function _formDigits( $digit ){ 
        $thisDigits = 0;   
        if( $digit <= 9 && $digit >= 0 ){
            $thisDigits = str_pad( $digit, 2, '0', STR_PAD_LEFT);
        } else {
            $thisDigits = $digit;
        }
       
        return $thisDigits;
    }

    /**
     *  Checks the format of the string being passed in
     *  If it is not correct then we will dry to transform it
     * 
     * @param Datetime|String $date
     * 
     * @return Datetime
     * 
     */
    Public function _dateConverter( $date ){
        //we want to know what format the date is in
        $thisDate = $date;
        $hyphen = ( strpos( $date, '-' ) == true )? true : false;
        $slash = ( strpos( $date, '/' ) == true )? true : false;
        $colon = ( strpos( $date, ':' ) == true )? true : false;
        $char_T = ( strpos( $date, 'T' ) == true )? true : false;
        $char_z = ( strpos( $date, 'Z' ) == true )? true : false;
        $plus = ( strpos( $date, '+' ) == true )? true : false;
        $blank = ( strpos( $date, ' ' ) == true )? true : false;
        $utc = ( strpos( $date, 'UTC' ) == true )? true : false;

        // lets start checking the date part first
        if( $slash == true ){
            // lets change them to hyphens to be consistent
            $thisDate = str_replace( '/', '-', $thisDate );
        }

        // lets start checking the date part first
        if( $utc == true ){
            // lets change them to hyphens to be consistent
            $thisDate = str_replace( 'UTC', 'T', $thisDate );
        }

        // lets start checking the date part first
        if( $blank == true ){
            // lets change them to hyphens to be consistent
             $thisDate = str_replace( ' ', 'T', $thisDate );
        }

        echo '<br>' . $thisDate;
        $form_date = $this->_getdate( $thisDate );
        $form_time = $this->_getTime( $thisDate );
        $form_zone = $this->_getZone( $thisDate );

        return new DateTime( $form_date . 'T' . $form_time . '+' . $form_zone );
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

        // start with no leaps and adjust along the way
        $leap = 0;

        // if the totyears > 4 then we know there is at least a leap
        // but we want to know how many leaps exist between date1 && date 2
        // so we can find the floor of totalyears / 4 (4/4 = 1, 7/4 = 1.75)
        if( $leap > 0 ){
            $leap = $leap + floor( $totalYears / 4 ) -1; // we adjust as we count the end twice
        } else {
            $leap = $leap + floor( $totalYears / 4 ); // we adjust as we count the end twice
        }

        $startDate = ( $date1 < $date2 )? $date1 : $date2;
        $endDate = ( $date1 > $date2 )? $date1 : $date2;

        $leapDayStart = $this->_setFeb29Start( $startDate ); // if not in a leap year !Important return next leap year
        $leapDayEnd = $this->_setFeb29End( $endDate ); // if not in a leap year !Important return next leap year        
        
        // we might have a leap year, so lets do the math 
        /* if( $totalYears > 0 ){      */ 
            // lets be defensive and check if the start date is before next leap year 
        if( $this->_isLeap( $startDate ) ){ 
            if( $startDate < $leapDayStart )
            {
                $leap++;
            }      
        }   

        if( $this->_isLeap( $endDate ) ){
            if( $endDate > $leapDayEnd )
            {
               $leap++;
            }
        }

        return abs( $leap ); // we have at least 1 leap year     
    }
}
?>