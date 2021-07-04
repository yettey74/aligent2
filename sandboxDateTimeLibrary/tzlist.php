<?php
require '../aligent.class.php';
$aligent = new Aligent();
$dateTime = new DateTime();
$timezone = timezone_identifiers_list();
$date1 = new DateTime( "2021-01-04T00:00:00Z" );
$date2 = new DateTime( "2021-01-04T00:00:00Z" );
$pass = 0;
$fail = 0;
$errors = array();
$passarray = array();
$failarray = array();

// RFC Peek
/* 
foreach( [
    'ATOM',
    'COOKIE',
    'ISO8601',
    'RFC822',
    'RFC850',
    'RFC1036',
    'RFC1123',
    'RFC2822',
    'RFC3339',
    'RFC3339_EXTENDED',
    'RSS',
    'W3C',
] as $format ){
    eval( "print 'DateTimeInterface::$format\t' . \$dateTime->format( DateTimeInterface::$format) . \"<br>\";");
} 
*/

// STRING BUILDER
/* foreach(  $timezone as $zone ){
    $continent = strstr( $zone, '/', true );
    $city = strstr( $zone, '/', false );
    $city = substr( $city, 1 );
    if( $city == '' ){
        $city = "UTC";
    }
    //$thisCity = $zone[1];
    $city = str_replace( '-', '', $city );
    echo '$' . strtolower( $city ) . ' = new DateTimeZone( "' . $zone . '" );<br>';
    
} */

// build as an array
$tzArray = [];
$count = 0;

foreach(  $timezone as $zone ){
    $continent = strstr( $zone, '/', true );
    $city = strstr( $zone, '/', false );
    $city = substr( $city, 1 );
    if( $city == '' ){
        $city = "UTC";
    }
    $city = str_replace( '-', '_', $city );
    if( $count % 50 == 0 ){
        $tzArray[] .= $zone;
    }
    $count++;
}

$tzArray[] .= "Australia/Rome";
foreach( $tzArray as $tz ){
    echo $tz. '<br>';
}

foreach( $tzArray as $tzl ){
    try{
        if( ( $date1 )->setTimezone( new DateTimeZone($tzl) ) === false ){
            throw new Exception();
        }
    } catch ( Exception $e ){
        //var_export( $e );
        ( $date1 )->setTimezone( new DateTimeZone("UTC") );
    } /* finally {
        if( ( $date1 )->setTimezone( new DateTimeZone($tzl) ) === false ){
            ( $date1 )->setTimezone( new DateTimeZone("UTC") );
        } else {
            ( $date1 )->setTimezone(new DateTimeZone($tzl));
        }
    } */
    foreach( $tzArray as $tzl2 ){
        try{
            if( ( $date2 )->setTimezone( new DateTimeZone($tzl2) ) === false ){
                throw new Exception();
            }
        } catch ( Exception $e ){
            //var_export( $e );
            ( $date2 )->setTimezone( new DateTimeZone("UTC") );
        }/*  finally {
            if( ( $date2 )->setTimezone( new DateTimeZone($tzl2) ) === false ){
                ( $date2 )->setTimezone( new DateTimeZone("UTC") );
            } else {
                ( $date2 )->setTimezone(new DateTimeZone($tzl2));
            }
        } */

        $array_test = $aligent->getTotalDaysBetween( $date1, $date2 ); //
        ( $array_test == 0 )? $pass++ : array_push( $failarray, ['array_test', 0, $array_test ]);
    }
}


############################################
##              RESULTS SCREEN            ##
############################################ 
$row = 0;?>
<table>
<tr>
    <td>Total tests</td>
    <td><?php echo $pass + count( $failarray ); ?></td>
</tr><tr>
    <td>Success rate</td>
    <td><?php echo round( ( $pass / ( $pass + count( $failarray ) ) * 100 ), 2) . '% ' ?></td>
</tr>
</table>
<?php if( count( $failarray ) > 0 ){?>
<table>
<tr>
    <th>Error #</th>
    <th>Failed Test</th>
    <th>Expect</th>
    <th>Result</th>
</tr>
<?php 
foreach( $failarray as $error ){
    $row++;
?>
<tr>
<td><?php echo '# ' . $row ?></td>
<td><?php echo $error[0]; ?></td>
<td style="text-align:center"><?php echo $error[1]; ?></td>
<td><?php echo $error[2]; ?></td>
</tr>
<?php } }

/* echo sizeOf( $tzArray );
foreach( $tzArray as $tz ){
    echo '<br>' . $tz . '<br>';
} */

/* echo '<!--------------------------LIST of Usable-------------------------------!>';
// the above list creates entries not recognised by php DateTime
// so we will test each one before adding to the array
// build as an array
$locationArray = [];
// we can set date/time here first
$date = new DateTime( "2021-01-04T00:00:00Z" );
foreach( $tzArray as $tzl ){
    $thisLocation = $tzl;
    try{
        if( ( $date )->setTimezone( new DateTimeZone($thisLocation) ) === false ){
            throw new Exception();
        }
    } catch ( Exception $e ){

    } finally {
        if( ( $date )->setTimezone( new DateTimeZone($thisLocation) ) === false ){
            $locationArray[] .= 'new DateTimeZone("UTC")';
        } else {
            $locationArray[] .= 'new DateTimeZone("'. $thisLocation .'")';
        }
    }
} */
/* echo 'tzArray array = ' . sizeOf( $tzArray );
echo 'Location array = ' . sizeOf( $locationArray );
foreach( $tzArray as $tz ){
    $thisLocation = $tzl;
    try{
        if( ( $date )->setTimezone( new DateTimeZone($thisLocation) ) === false ){
            throw new Exception();
        }
    } catch ( Exception $e ){

    } finally {
        if( ( $date )->setTimezone( new DateTimeZone($thisLocation) ) === false ){
            $locationArray[] .= 'new DateTimeZone("UTC")';
        } else {
            $locationArray[] .= 'new DateTimeZone("'. $thisLocation .'")';
        }
    }

}
 */
// now we can iterate all we want
/* 
foreach( $tzArray as $location ){
    $thisLocation = $location;
    try{
        if( ( $date1 )->setTimezone( new DateTimeZone($thisLocation) ) === false ){
            throw new Exception();
        }
    } catch ( Exception $e ){
        // var_export( $e );
    } finally {
        if( ( $date1 )->setTimezone( new DateTimeZone($thisLocation) ) === false ){
            ( $date1 )->setTimezone( new DateTimeZone("UTC") );
        } else {
            ( $date1 )->setTimezone(new DateTimeZone($thisLocation));
        }
    } */
    // set date 2 inside the next loop
    
    /* foreach( $tzArray as $loc ){
        $thisLocation2 = $loc;
        try{
            if( ( $date2 )->setTimezone( new DateTimeZone($thisLocation2) ) === false ){
                throw new Exception();
            }
        } catch ( Exception $e ){
            // var_export( $e );
        } finally {
            if( ( $date2 )->setTimezone( new DateTimeZone($thisLocation2) ) === false ){
                ( $date2 )->setTimezone( new DateTimeZone("UTC") );
            } else {
                ( $date2 )->setTimezone(new DateTimeZone($thisLocation2));
            }
        }
    
        $array_test = $aligent->getTotalDaysBetween( $date1, $date2 ); //
        ( $array_test == 0 )? $pass++ : array_push( $failarray, ['array_test', 0, $array_test ]);
        $count++;
        if( $count == 1 ) {
            break;
        }
    } */
?>