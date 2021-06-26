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
	private $datetype2;
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
                            $this->datetype = $datetype;
                            $this->timetype = $timetype;
                            $this->timezone1 = $timezone1;
                            $this->timezone2 = $timezone2;
                        }
    
    /**
     * Setter : dateObject1
     * var : $dateObject1
     * return date()
     */
    function setDateObject1( $dateObject1 ){
        return $this->dateObject1;
    }
    
    /**
     * Getter : dateObject1
     * var : $dateObject1
     * return date()
     */
    function getDateObject1(){
        return $this->dateObject1;
    }
    
    /**
     * Setter : dateObject2
     * var : $dateObject2
     * return date()
     */
    function setDateObject2( $dateObject2 ){
        return $this->dateObject2;
    }
    
    /**
     * Getter : dateObject2
     * var : $dateObject2
     * return date()
     */
    function getDateObject2(){
        return $this->dateObject2;
    }
    
    /**
     * Setter : datetype
     * var : $datetype
     * return date()
     */
    function setDateType( $datetype ){
        return $this->datetype;
    }
    
    /**
     * Getter : datetype
     * var : $datetype
     * return date()
     */
    function getDateType(){
        return $this->datetype;
    }
    
    /**
     * Setter : timetype
     * var : $timetype
     * return date()
     */
    function setTimeType( $timetype ){
        return $this->timetype;
    }
    
    /**
     * Getter : timetype
     * var : $timetype
     * return date()
     */
    function getTimeType(){
        return $this->timetype;        
    }
    
    /**
     * Setter : timezone1
     * var : $timezone1
     * return date()
     */
    function setTimezone1( $timezone1 ){
        return $this->timezone1;        
    }

    /**
     * Getter : timezone1
     * var : $timezone1
     * return date()
     */
    function getTimezone1(){
        return $this->timezone1;        
    }

    /**
     * Setter : timezone2
     * var : $timezone2
     * return date()
     */
    function setTimezone2( $timezone2 ){
        return $this->timezone2;        
    }

    /**
     * Getter : timezone2
     * var : $timezone2
     * return date()
     */
    function getTimezone2(){
        return $this->timezone2;        
    }

    function _toString()
    {
        return  'Date 1: ' . date( 'd/m/Y @ H:m:s ',$this->dateObject1 ) . '<br>' .
                'Timezone 1: ' . $this->timezone1 . '<br>' .
                'Date 2: ' . date( 'd/m/Y @ H:m:s ',$this->dateObject2 ) . '<br>' .
                'Timezone 2: ' . $this->timezone2 . '<br>';
    }
}

?>