<?php

/*
try{
    kode yang dapat throw exception
} catch (Exception $e){
    kode yang berjalan saat exception tertangkap
} finally {
    kode yang selalu berjalan ' terlepas dari apakah exception ditangkap
}
*/

function divide($dividend, $divisor){
    if($divisor==0){
        throw new Exception("Division by Zero");
    }
    return $dividend / $divisor;
}

// echo divide(5,0);

try{
    echo divide(5,0);
} catch (Exception $ex){
    $code = $ex->getcode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
} 

?>