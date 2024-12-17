<?php

/*
constant = sebuah identifier untuk menyimpan nilai, beda dengan variable
constant = nilai yang sudah disimpan tidak dapat diubah (permanen)
*/

// tulis nama constant dengan huruf besar
// define tidak bisa disimpan dalam kelas, harus diluar (const global)
define('NAMA', 'Firasya Alya');
echo NAMA;

echo "<br>";

const UMUR = 15;
echo UMUR;

echo "<br>";

class Coba{
    const NAMA = 'Firasya Alya';
}

echo Coba::NAMA;

echo "<br>";

class Cobalagi{
    public $kelas = __CLASS__;
}

$object = new Cobalagi;
echo $object->kelas;

//magic method
// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo __FUNCTION__;
// echo "<br>";
// echo __CLASS__;
echo __METHOD__;


?>