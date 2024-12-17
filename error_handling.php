<?php

// $file=fopen('welcome.txt','r');

// contoh menggunakan die()

// if(!file_exists(('welcome.txt'))){
//     die('File not found');
// } else {
//     $file=fopen('welcome.txt','r');
// }


# pengujian error handler untuk variable tanpa output

// // error handler function
// function customError($errno, $errstr){
//     echo "<br>Error: <br> [$errno] $errstr";
// }

// // set error handler
// set_error_handler(("customError"));

// // trigger error
// echo($test);

// $test=2;
// if($test>1){
//     trigger_error("Value must be 1 or below");
// }

# contoh E_USER_WARNING

// // error handler function
// function customError($errno, $errstr){
//     echo "<br>Error: <br> [$errno] $errstr";
//     echo "Ending Script";
// }

// // set error handler
// set_error_handler("customError", E_USER_WARNING);

// // trigger error
// echo($test);

// $test=2;
// if($test>1){
//     trigger_error("Value must be 1 or below \n", E_USER_WARNING);
// }


# kirim error
// error handler function
function customError($errno, $errstr){
    echo "\n Error: <br> [$errno] $errstr";
    echo "Webmaster hass been notified";
    error_log("Error : [$errno] $errstr", 1, 
    "firasyaaly2gmail.com", 'From :Webmaster@example.com');
}

// set error handler
set_error_handler("customError", E_USER_WARNING);

// trigger error
echo($test);

$test=2;
if($test>1){
    trigger_error("Value must be 1 or below \n", E_USER_WARNING);
}




?>