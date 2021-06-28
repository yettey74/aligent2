<?php
// lets check how the date library handles things

$checkarray = [ '2021-01-01','a', '', NULL, NAN, ' ' ];

foreach( $checkarray as $date ){
    if( is_string( $date )){
        echo 'String->'. ( is_null( $date )? 'NULL': $date ) . ' = True';
        echo '<br>';
        if( $date != '' || $date > ' ' || !is_null( $date ) || !is_nan( $date )){
            $checkthis = _isDateValid( $date);
            if( $checkthis ){            
                echo 'String->' . $date . ' still True';
                echo '<br>';
            } else {
                echo 'String->' . $date . ' now False';
                echo '<br>';
            }
        }
    } else {
        echo 'String->' . ( is_null( $date )? 'NULL': $date ) . ' is False ';
        echo '<br>';
        
    }
}

function _isDateValid( $date ){
    // we want to check the string has some form of date structure
    // as DateTime lib does not handle null or NaN either 
    return ( is_null( $date ))?? false;
    $pos = 0;            
    $temp = token_get_all( $date );
    $datestring = $temp[0][1];        
    $pos1 = strpos($datestring, '/');
    $pos2 = strpos($datestring, '-');
    
    if( $pos1 > 0 || $pos2 > 0 ){
        return true;
    }
    return false;         
}
?>