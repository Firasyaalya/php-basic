<?php

class Perhiasan{
    private $harga1 = 1000000;
    private $harga2 = 1500000;
    private $harga3 = 1700000;
    private $harga4 = 1900000;
    private $harga5 = 2000000;

    
    public function harga1(){
        return $this->harga1;
    }
    public function harga2(){
        return $this->harga2;
    }
    public function harga3(){
        return $this->harga3;
    }
    public function harga4(){
        return $this->harga4;
    }
    public function harga5(){
        return $this->harga5;
    }


}

class Cincin extends Perhiasan{
    public $tipe1 = "Rose Gold";
    public $tipe2 = "Gold";
    public $tipe3 = "Silver";
    public $tipe4 = "Ruby";
    public $tipe5 = "Diamond";
}



$Cincin = new Cincin();
echo "Tipe : " . $Cincin->tipe1;
echo "<br>";
echo "Harga : " . $Cincin->harga1();
echo "<br><br>";

echo "Tipe : " . $Cincin->tipe2;
echo "<br>";
echo "Harga : " . $Cincin->harga2();
echo "<br><br>";

echo "Tipe : " . $Cincin->tipe3;
echo "<br>";
echo "Harga : " . $Cincin->harga3();
echo "<br><br>";

echo "Tipe : " . $Cincin->tipe4;
echo "<br>";
echo "Harga : " . $Cincin->harga4();
echo "<br><br>";

echo "Tipe : " . $Cincin->tipe5;
echo "<br>";
echo "Harga : " . $Cincin->harga5();
echo "<br><br>";



?>


