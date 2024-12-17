<?php

/*
- kelas abstrak yang sama sekali tidak memiliki implementasi
- murni sebagai template
- di interface tidak boleh ada property, deklarasi method saja
- semua method bersifat public
- keyword : interface dan implements
-tidak bisa diinstansiasi menjadi object
*/

interface Car{
    public function setVariant($variant);
    public function getVariant();

    public function setGear(); // masukan gigi

}

class Mercedes implements Car{
    private $variant;

    public function setVariant($variant){
        $this->variant = $variant;
    }

    public function getVariant(){
        return $this->variant;
    }

    public function setGear(){
    
    }

}

class Manual implements Car{
    private $variant;

    public function setVariant($variant){
        $this->variant = $variant;
    }

    public function getVariant(){
        return $this->variant;
    }

    public function setGear(){
        $step1 = "Injak kopling <br>";
        $step2 = "Masukan gigi <br>";
        $step = $step1 . $step2;
        return $step;

    }

}

class Matic implements Car {
    private $variant;

    
    public function setVariant($variant){
        $this->variant = $variant;
    }

    public function getVariant(){
        return $this->variant;
    }

    public function setGear(){
        $step1 = "";
        $step2 = "Masukan gigi <br>";
        $step = $step1 . $step2;
        return $step;
    }


}

$unimog = new Mercedes();
$unimog->setVariant('unimog');
echo $unimog->getVariant();

echo "<hr>";

echo "Manual : <br>";
$avanza = new Manual();
echo $avanza->setGear();

echo "<hr>";

echo "Matic : <br>";
$brio = new Matic();
echo $brio->setGear();




?>