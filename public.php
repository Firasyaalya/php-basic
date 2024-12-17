<?php
class Mobil {
    public $namaMobil, $merkMobil, $warnaMobil, $jenisMobil;

    public function setCat ($warna = "warna"){

        $this->warnaMobil = $warna;
    }

    public function tambahKecepatan (){

    }

    public function kurangiKecepatan (){

    }

    public function __construct ($nama = "nama", $merk = "merk", $jenis = "jenis"){
        
        $this->namaMobil = $nama;
        $this->merkMobil = $merk;
        $this->jenisMobil = $jenis;

    }

    public function getLabel (){
        return "$this->namaMobil, $this->merkMobil, $this->warnaMobil, $this->jenisMobil";
    }

}

class MobilSport extends Mobil{
}

$mobil1 = new Mobil("Fortuner", "Toyota", "Manual");
$mobil1->setCat("Merah");

$mobil2 = new MobilSport("Accord", "Honda", "Auto");
$mobil2->setCat("Hitam");

echo "Mobil 1 : " . $mobil1->getLabel();
echo "\n";
echo "Mobil 2 : " . $mobil2->getLabel();
?>