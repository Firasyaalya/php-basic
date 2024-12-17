<?php

class Tas{

    public $merk = "merk"; 
    public $ukuran = "ukuran";  
    public $harga = 0; 
    public $jumlah = 0;

    public function tambahJumlah(){

    }

    public function pilihUkuran(){

    }

    public function pilihMerk(){

    }

    public function sayHello(){
        return "Hello Customer !
        <br>
        You like bags? BAGTIE can get you the best of the bags
        <br>";
    }

    public function getLabel(){
        return "$this->merk, $this->ukuran";
    }


}

$tas_dilah = new Tas();
$tas_dilah->merk = "H&M";
$tas_dilah->ukuran = "Medium";

echo $tas_dilah -> sayHello(); 
echo "<br>";
echo $tas_dilah -> getLabel();




?>