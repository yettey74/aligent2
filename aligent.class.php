<?php
Class Aligent extends DateTime 
{       
    const MAX_YEAR_STRING = '9999-31-12T23:59:59+00:00';
    const MAX_YEAR_INT = '253402214400';
    const MIN_YEAR_STRING = '-6060-01-03T00:00:00+00:00';
    const MIN_YEAR_INT = '-253402214400';
    const MAX_LEAP_STRING = '9996-02-29T23:59:59+00:00';
    const MAX_LEAP_INT = '';
    const MIN_LEAP_STRING = '-6060-02-29T00:00:00+00:00';
    const MIN_LEAP_INT = '';

    /**
     *  Return difference between $date1 and $date2
     * 
     * @param Datetime|String $date2
     * 
     * @return DateInterval 
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
            if( is_int( $date1 ) ){
                $date1 = $this->_dateConverter( $date1 );
            } else {
                $date1 = new DateTime( $date1 );
            }
        }

        if( !( $date2 instanceof DateTime ) ){
            if( is_int( $date2 ) ){
                $date2 = $this->_dateConverter( $date2 );
            } else {
                $date2 = new DateTime( $date2 );
                ( $date2 )->format('c');
            }
        }
    
        $leap = $this->frogger( $date1, $date2 );
        $splice = 1;
        $days = $this->getTotalDays( $date1, $date2 );

        if( $days > 0 ){
            $days--; // offset for last day included in count
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
            if( $days < 365 ){ // its less than 1 year
                return floor( $days / 365 );
            } elseif( $days > 365 ){ // its > 1 year
                if( $leap == 0 ){ // there is no leap so we return result
                    return floor( $days / 365 ); 
                } else { // we adjust for the leap math
                    return floor( $days / 365 ) - 1; 
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
        
        $splice = 1;
        $days = $this->getTotalDays( $date1, $date2 );

        $weekday_start = $this->_getWeekdayInt( $date1 );   
        $weekday_end = $this->_getWeekdayInt( $date2 );
 
        $weeks_difference = floor( $days / 7 ); // how many week units
        $days_remainder = floor( $days % 7 ); // how many days left over

        if( $days_remainder > 7 ){
            $days_remainder--;
        }
        if( $days_remainder > 6 ){
            $days_remainder--;
        }

        $weekdays = ($weeks_difference * 5 ) + $days_remainder ;

        if( $weekday_start == 5 && $weekday_end == 1 && $days < 4 ){ // specifically looking at Fri-Mon           
            $weekdays = 0;
        } 
        
        if( $weekday_start == 5 && $weekday_end == 2 && $days < 5 ){ // specifically looking at Fri-Mon           
            $weekdays = 0;
        } 

        if(  0 < $weekday_start && $weekday_start < 6 ){ // if between day = 0 (sunday) and day = 6 (saturday)
            if( $weekdays > 0 ){
                $weekdays--;
            }
        }

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
            if( $days < 365 ){ // wide net for leap year count over 2000 years
                return floor( ( $days ) / 365 );
            } else{
                return floor( ( $days ) / 365 ) - 1; // adjust -1 for leap year offset
            }
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
                if( $leap > 0 ){
                    return floor( $weeks / 52 ) - 1; // take 1 away due to floor rounding up     
                } else {
                    return floor( ( $weeks * 7 ) / 365 ); // take 1 away due to floor rounding up  
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
        if( $date instanceof DateTime ){
            return $date->format('Y');
        } else {
            // pluck year from string
            $thisDate = $date;
            /* echo '<br>'; */
            // lets get the first digits
            /* echo '<br>Chunk : ' .  */$thisDay = strstr( $thisDate, '-', true );
            /* echo '<br>Chunk : ' .  */$day = $this->_formTwoDigits( $thisDay );

            /* echo '<br>Chunk : ' .  */$chunk = strstr( $thisDate, '-', false );
            /* echo '<br>Chunk : ' .  */$tempDate = substr( $chunk, 1 );

            /* echo '<br>Chunk : ' .  */$thisMonth = strstr( $tempDate, '-', true );
            /* echo '<br>Chunk : ' .  */$month = $this->_formTwoDigits( $thisMonth );
            /* echo '<br>Chunk : ' .  */$chunk = strstr( $tempDate, '-', false );
            /* echo '<br>Chunk : ' .  */$tempDate = substr( $chunk, 1 );
            if( strpos( $date, 'T') == true ){
                /* echo '<br>Chunk : ' .  */$thisYear = strstr( $tempDate, 'T', true );
            } else {
                /* echo '<br>Chunk : ' .  */$thisYear = $tempDate;
            }
            /* echo '<br>Year : ' .  */$year = $this->_formYearDigits( $thisYear );
        return $year;

        }
    }

    /**
     *  Return true if Monday is start
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _getWeekdayInt( $date ){
        return ( $date )->format( 'w' );    
    }

    /**
     *  Return true if Monday is start
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _strungOutDate( $date ){
        $charArray = [];
        $dateArray = token_get_all( $date );
        $thisDate = $dateArray[0][1];
        $length = strlen( $thisDate );

        for( $i = 0; $i < $length; $i++ ){
            $charArray[$i] = $thisDate[$i] . '<br>';
        }

        return $charArray;

    }

    /**
     *  Return true if has Null 
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _isDateNull( $date ){
        
        if( strpos( $date, 'null') == true ){
            return true;
        }
        if( is_null( $date ) ){
            return true;
        }

        return false;
    }

    /**
     *  Return true if Monday is start
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _isWeekday( $date ){
        $day = ( $date )->format( 'w' );
        
        if( $day > '0' && $day < '6'){
            return 1;
        }
        return 0;    
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

        if( $year != 0 && $year > -6055 && $year < 9995 ){ // YEAR 0000 did not have a leap year
            $start = new DateTime("$year-01-01T00:00:00Z", new DateTimeZone( "UTC" )); // throws bad year if < 2000
            $end = new DateTime("$year-12-31T00:00:00Z", new DateTimeZone( "UTC" ));// throws bad year if < 2000

            return ( $this->getTotalDays( $start, $end )  > 364 )? true : false;
        }
        
        return false;
    }

    /**
     *  Return Date object set to YYYY-Feb 29
     * 
     * @param Datetime|String $date
     * 
     * @return Datetime
     * 
     */
    Public function _setFeb29( $date ){ 
        //the first year cannot be counted due to 4 year = 1 leap day .. must start at 6056
        // a new circular end = start reference point must exist to deal with this infinite time loop
        $MinleapDay = new DateTime("-6056-02-29T00:00:00Z", new DateTimeZone( "UTC" ));
        $MaxleapDay = new DateTime("9996-02-29T00:00:00Z", new DateTimeZone( "UTC" ));
        
        if( $date > $MaxleapDay ){
            $leapDay = $MinleapDay;
        } elseif( $date > $MinleapDay ){
            $leapDay = $MinleapDay;
        } else {
            $year = $date->format( 'o' );
            if( $this->_isLeap( $date) == true ){
                return $leapDay = new DateTime("$year-02-29T00:00:00Z", new DateTimeZone( "UTC" ));
            } else {
                $year_remainder = ( $year % 4 ); 
                $nextLeap = $this->_formYearDigits( $year + 4 - $year_remainder );          
                $leapDay = new DateTime("$nextLeap-02-29T00:00:00Z", new DateTimeZone( "UTC" ));         
            }
            return $leapDay;
        }        
        return $MaxleapDay;
    } 

    /**
     *  Strips date from string and formats it to play nice with datetime
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

        $thisDate = $date;
        $day = strstr( $thisDate, '-', true );
        $chunk = strstr( $thisDate, '-', false );
        $tempDate = substr( $chunk, 1 );
        $month = strstr( $tempDate, '-', true );
        $chunk = strstr( $tempDate, '-', false );
        $tempDate = substr( $chunk, 1 );
        if( strpos( $date, 'T') == true ){
            $thisYear = strstr( $tempDate, 'T', true );
        } else {
            $thisYear = $tempDate;
        }
        $year = $this->_formYearDigits( $thisYear );

        $thisDate = $year .'-' . $month . '-' . $day;

        return $thisDate;
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
            /* echo '<br>Year : ' .  */$hour = $this->_formTimeDigits( strstr( $tempTime, ':', true ) );
            //echo '<br>';
            /* echo '<br>Year : ' .  */$tempTime = $this->_formTimeDigits( strstr( $tempTime, ':', false ) );
            /* echo '<br>Year : ' .  */$tempTime = substr( $tempTime, 1 );
            //echo $tempDate;
            /* echo '<br>Year : ' .  */$min = $this->_formTimeDigits( strstr( $tempTime, ':', true ) );
            //echo '<br>';
            /* echo '<br>Year : ' .  */$tempTime = $this->_formTimeDigits( strstr( $tempTime, ':', false ) );
            /* echo '<br>Year : ' .  */$tempTime = substr( $tempTime, 1 );
            //echo $tempDate;
            /* echo '<br>Year : ' .  */$sec = $this->_formTimeDigits( strstr( $tempTime, 'T', true ) );
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

            /* echo '<br> Hours' .  */$tzHours = $this->_formTimeDigits( strstr( $tzString, ':', true ) );
            /* echo '<br> Hours' .  */$tzHours = substr( $tzHours, 1 );
            /* echo '<br>' .  */$tzMinutes = $this->_formTimeDigits( strstr( $tzString, ':', false ) ); 
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
    Public function _formTwoDigits( $digit ){ 
        $thisDigits = 0;
        // strip leading '0' if any
           
        if( $digit < 10 ){
            $thisDigits = str_pad( $digit, 1, '0', STR_PAD_LEFT);
        } 
       
        return $thisDigits;
    }

    /**
     *  Strips date from string 
     * 
     * @param Datetime|String $date
     * 
     * @return date|String
     * 
     */
    Public function _formYearDigits( $digit ){ 
        $thisDigits = 0;   
        if( $digit < 10 ){
            $thisDigits = str_pad( $digit, 4, '0', STR_PAD_LEFT);
        } elseif( $digit < 100 ){
            $thisDigits = str_pad( $digit, 3, '0', STR_PAD_LEFT);
        } elseif( $digit < 1000 ){
            $thisDigits = str_pad( $digit, 2, '0', STR_PAD_LEFT);
        } else {
            $thisDigits = $digit;
        }
       
        return $thisDigits;
    }

    /**
     *  Checks the format of the time Integer being passed in
     *  If it is not correct then we will dry to transform it
     * 
     * @param time|Integer $date
     * 
     * @return date|String
     * 
     */
    Public function _timeToDate( $date ){
        if( $date instanceof DateTime ){
            return $date;
        }
        if( is_string ( $date ) ){
            return new DateTime( $date );
        }
        return date( $date );
    }

    /**
     *  Checks the format of the string or object being passed in
     *  If it is not correct then we will dry to transform it
     *  If not then we can throw an exception and deal with that instead
     * 
     * @param Datetime|String $date
     * 
     * @return Datetime
     * 
     */
    Public function _dateConverter( $date ){
        $thisDate = new DateTime();

        if( is_object( $date )){
            try{
                if( $date === false ){
                    throw new Exception();
                }
            } catch( Throwable $e ) {

            } finally {
                $thisDate =  $date;
            }
            //get TZ info
            try{
                if( $thisDate->getTimezone() === false ) {
                    throw new Exception();
                } 
            } catch ( Throwable $e ){
                echo print_r( var_export( $e ) );
            } finally {
                $thisDate = $thisDate->setTimezone(new DateTimeZone( "Europe/Paris" ));  
            }
            return $thisDate;
        }

        // check if int and try
        if( is_int( $date )){
            try{    
                if( new DateTime( date( 'Y-m-d', $date ), new DateTimeZone( "UTC" ) ) === false ){
                    throw new Exception();
                }
            } catch( Throwable $e ) {

            } finally {
                return new DateTime( date( 'Y-m-d', $date  ), new DateTimeZone( "UTC" ) );
            }
        }      

        if( is_string( $date )){
            
            $_isDateNull = ( $this->_isDateNull( $date ) )? true : false;
            $date = $this->_getDate( $date );
            if( $_isDateNull == true ){  // its just empty
                return new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "UTC" ) );
            } 

            if( $date instanceof DateTime && $_isDateNull == true){ // Bad date object
                return new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "UTC" ) );
            }        

            $hyphen = ( strpos( $date, '-' ) == true )? true : false;
            $forwardslash = ( strpos( $date, '/' ) == true )? true : false;
            $backslash = ( strpos( $date, '\\' ) == true )? true : false;
            $colon = ( strpos( $date, ':' ) == true )? true : false;
            $char_T = ( strpos( $date, 'T' ) == true )? true : false;
            $char_z = ( strpos( $date, 'Z' ) == true )? true : false;
            $plus = ( strpos( $date, '+' ) == true )? true : false;
            $blank = ( strpos( $date, ' ' ) == true )? true : false;
            $utc = ( strpos( $date, 'UTC' ) == true )? true : false;

            // lets start checking the date part first
            if( $forwardslash == true ){
                // lets change them to hyphens to be consistent
                $thisDate = str_replace( '/', '-', $thisDate );
            }

            if( $backslash == true ){
                // lets change them to hyphens to be consistent
                $thisDate = str_replace( '\\', '-', $thisDate );
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
            $stringDate = new DateTime( $date );
            return $stringDate;
        }
        return new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "UTC" ) );
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
            $leap = $leap + floor( $totalYears / 4 ) - 1; // we adjust as we count the end twice
        } else {
            $leap = $leap + floor( $totalYears / 4 ); // we adjust as we count the end twice
        }

        $startDate = ( $date1 < $date2 )? $date1 : $date2;
        $endDate = ( $date1 > $date2 )? $date1 : $date2;

        $leapDayStart = $this->_setFeb29( $startDate ); // if not in a leap year !Important return next leap year
        
        if( $endDate < new DateTime('9996-02-29T23:59:59+00:00' ) ){// make this a CONST MAXDATE
            $leapDayEnd = $this->_setFeb29( $endDate ); // if not in a leap year !Important return next leap
        } else {
            $leapDayEnd = new DateTime('9996-02-29T23:59:59+00:00' ); // set to last leap day ever
        }                 
        
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