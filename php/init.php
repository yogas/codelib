<?php
/**
* Функция для откладки кода
* @params mixed $var
* @return void
*/
function dump( $var, $dir = false ) {
    global $USER;
    if( $USER->IsAdmin() ) {
        echo "<pre>"; print_r( $var ); echo "</pre>";
    }
    
    if($die) {
        die();
    }
}
?>