<?php
class dateException extends Exception{    
    Public function fixDateNullError(){       
        new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
        echo 'True';
    }
}

try {       
    if( $thisDate = new DateTime( NULL, new DateTimeZone( "Australia/Adelaide" ) ) === false ){
        throw new customException();
    } 
}

catch (customException $e ) {
    echo $e->fixDateNullError();
    echo 'Custom Exception Handler';
}
catch (Exception $e ) { 
    echo $e;   
    echo 'Exception';
}
finally
{  
    $thisDate =  new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
}

echo ( $thisDate )->format('c');

?>