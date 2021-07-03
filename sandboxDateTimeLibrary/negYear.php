<?php
require '../aligent.class.php';
$aligent = new Aligent();
echo '-----------String Start-----------';
echo '<br>';
echo 'String ' . $year1 = ('0001-1-1');
echo '<br>';
echo 'As Int ' . strtotime($year1);
echo '<br>';
echo 'As Int ' . strtotime('0010-1-1');
echo '<br>';
echo 'As Int ' . strtotime('9999-12-31');
echo '<br>';
$date1 = $aligent->_dateConverter( $year1 );
echo 'String to DateTime ' . ( $date1 )->format('c');
echo '<br>';
echo '-----------String End-----------';
echo '<br>';
echo '-----------Integer Start-----------';
echo '<br>';
echo 'Int ' . $year2 = -253402214400;
echo '<br>';
$date2 = $aligent->_dateConverter( $year2 );
echo 'Int to DateTime ' . ( $date2 )->format('c');
echo '<br>';
echo '-----------Integer End-----------';
echo '<br>';
echo '-----------Integer Start-----------';
echo '<br>';
echo 'Int ' . $year3 = 253402214400;
echo '<br>';
$date3 = $aligent->_dateConverter( $year3 );
echo 'Int to DateTime ' . ( $date3 )->format('c');
echo '<br>';
echo '-----------Integer End-----------';


?>