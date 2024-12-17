<?php

// contoh anonymous function 

function introduce ($fullname, $action){
    $fullname = $action($fullname);
    return "Perkenalkan nama saya adalah $fullname";
}

echo introduce("UDIN", function ($fullname){
    return strtoupper($fullname);
});



?>