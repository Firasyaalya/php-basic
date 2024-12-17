<?php

class Mobil{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipemesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }

    public function belokKiri(){

    }

    public function belokKanan(){

    }

    public function sayHello(){
        return "Hello Driver!";
    }

    public function getLabel(){
        return "$this->nama, $this->merk";
    }

}

$mobil_beby = new Mobil();
$mobil_beby->nama = "Lamborghini Aventador";
$mobil_beby->merk = "Lamborghini";

$mobil_zaskia = new Mobil ();

$mobil_amel = new Mobil ();

//var_dump($mobil_beby);
//echo "Mobil Beby : " . $mobil_beby->nama, $mobil_beby->merk;

echo $mobil_beby -> sayHello(); 
echo $mobil_beby -> getLabel();

?>