<?php

/*
- absract = kelas yang tidak dapat di instansiasi
- hanya kelas turunannya yang bisa di instansiasi
- kelas abstract minimal memiliki 1 method 

*/

abstract class Mobil {
    abstract function spec();
}

class Inova extends Mobil{
    function spec(){
        $nama = "Nama Mobil : Inova";
        $kapasitas = "Kapasitas : 5 orang";

        echo $nama;
        echo "<br>";
        echo $kapasitas;
    }
}

$inova = new Inova();
$inova->spec();



?>