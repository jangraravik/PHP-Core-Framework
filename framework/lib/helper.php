<?php

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('You cannot directly access this file'); };

function test($test){
echo "<pre>";
print_r($test);
echo "</pre>";
}

function putInFile($value,$filname='putInFile.txt'){
// The new of the file
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($filname, var_export($value, true), FILE_APPEND | LOCK_EX);
}	


## Error Handler Advance php/mysql errors Detector ##
function errorHandler($errno, $errstr, $errfile, $errline){
switch($errno){
case 1: $errTyp = 'E_ERROR'; break;
case 2: $errTyp = 'E_WARNING'; break;
case 4: $errTyp = 'E_PARSE'; break;
case 8: $errTyp = 'E_NOTICE'; break;
case 16: $errTyp = 'E_CORE_ERROR'; break;
case 32: $errTyp = 'E_CORE_WARNING'; break;
case 64: $errTyp = 'E_COMPILE_ERROR'; break;
case 128: $errTyp = 'E_COMPILE_WARNING'; break;
case 256: $errTyp = 'E_USER_ERROR'; break;
case 512: $errTyp = 'E_USER_WARNING'; break;
case 1024: $errTyp = 'E_USER_NOTICE'; break;
case 2048: $errTyp = 'E_STRICT'; break;
case 4096: $errTyp = 'E_RECOVERABLE_ERROR'; break;
case 8192: $errTyp = 'E_DEPRECATED'; break;
case 16384: $errTyp = 'E_USER_DEPRECATED'; break;
} 

$output= "$errTyp [$errno] ($errstr)Please Check File: $errfile on line [$errline] \n";
if(ERROR_SEND == 'LOG'){
error_log("\nError With = PHP\nError Date = ".date("Y-m-d h:i:s a")."\nError Type = $errTyp [$errno] \nError Found = $errstr \nError File = $errfile on line ($errline) \n--------------------------------------------------------------------------------------------------", 3, "logs/phpErrorLog.txt");
}
if(ERROR_SEND == 'MAIL'){
error_log("\nError With = PHP\nError Date = ".date("Y-m-d h:i:s a")."\nError Type = $errTyp [$errno] \nError Found = $errstr \nError File = $errfile on line ($errline) \n--------------------------------------------------------------------------------------------------",1,SITE_ERROR_TO_MAIL,"From: Error Log <error@".DOMAIN.">");
}
$output;
exit;
}

