<?php
// string to char

// get the string
$date = new DateTime("01-01-01T00:00:00Z", new DateTimeZone( "Australia/Adelaide" )); // throws bad year if < 2000

if( $date instanceof DateTime ){
    // convert to string
    $date = date( ( $date )->format('c'));
}

$dateArray = token_get_all( $date );
echo print_r($dateArray);
//get array index 1
$thisDate = $dateArray[0][1];
$length = strlen( $thisDate );
echo '<br>';
echo 'Length is : ' . $length;
echo '<br>';
for( $i = 0; $i < $length; $i++ ){
    echo $thisDate[$i] . '<br>';
}


?>