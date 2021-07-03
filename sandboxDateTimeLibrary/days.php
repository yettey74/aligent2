<?php
$date = strtotime('2-1-1988');
$charArray = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

foreach( $charArray as $char ){
    echo $char . ' = ' . date( '' . $char . '', $date);
    echo '<br>';
}

foreach( $charArray as $char ){
    echo strtoupper( $char ) . ' = ' . date( '' . strtoupper( $char )  . '', $date);
    echo '<br>';
}

foreach( $charArray as $x ){
    foreach( $charArray as $y ){       
        echo strtoupper( $x ) . $y . ' = ' . date( '' . strtoupper( $x ) . $y . '', $date);
        echo '<br>';
    }
}

?>