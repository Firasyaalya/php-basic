<?php

interface Fruit{

    public function setServed($serve);
    public function getServed();

    public function setEat();

}

class Apple implements Fruit{
    private $serve;

    public function setServed($serve){
        $this->serve = $serve;
    }

    public function getServed(){
        return $this->serve;
    }

    public function SetEat(){

    }
}

class Bitten implements Fruit{
    private $serve;

    public function setServed($serve){
        $this->serve = $serve;
    }

    public function getServed(){
        return $this->serve;
    }

    public function setEat(){
        $step1 = "Cuci buah <br>";
        $step2 = "Langsung dimakan <br>";
        $step = $step1 . $step2;
        return $step;

    }
}

class Cut implements Fruit{
    private $serve;

    public function setServed($serve){
        $this->serve = $serve;
    }

    public function getServed(){
        return $this->serve;
    }

    public function setEat(){
        $step1 = "Cuci buah <br>";
        $step2 = "Potong buah <br>";
        $step3 = "Lalu dimakan <br>";
        $step = $step1 . $step2 . $step3;
        return $step;

    }
}

class Juice implements Fruit{
    private $serve;

    public function setServed($serve){
        $this->serve = $serve;
    }

    public function getServed(){
        return $this->serve;
    }

    public function setEat(){
        $step1 = "Cuci buah <br>";
        $step2 = "Potong buah <br>";
        $step3 = "Masukan ke dalam blender <br>";
        $step4 = "Kalau sudah halus {jadi}, saring dengan saringan <br>";
        $step5 = "Tuangkan ke dalam gelas <br>";
        $step6 = "Siap diminum / disajikan <br>";
        $step = $step1 . $step2 . $step3 . $step4 . $step5 . $step6;
        return $step;

    }
}

$eat = new Apple();
$eat->setServed('Cara Makan Apel');
echo $eat->getServed();

echo "<hr>";

echo "Digigit : <br>";
$gigit = new Bitten();
echo $gigit->setEat();

echo "<hr>";

echo "Dipotong : <br>";
$potong = new Cut();
echo $potong->setEat();

echo "<hr>";

echo "Dibuat jus : <br>";
$jus = new Juice();
echo $jus->setEat();


?>

