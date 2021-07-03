<?php
require '../aligent.class.php';
$aligent = new Aligent();

for( $i = 253402214400; $i < 253402214400+(86400*2); $i++ ){
    $date2 = $aligent->_dateConverter( $i );
    echo ( $date2 )->format('c');
    echo '<br>';
}

?>