<?php
$date = strtotime('1-1-1988');
$charArray = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

foreach( $charArray as $char ){
    echo $char . ' = ' . date( '' . $char . '', $date);
    echo '<br>';
}

?>