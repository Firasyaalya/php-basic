<?php
trait cindy {
    public function call1(){
        echo "Cindy is calling . . . <br>";
    }
}

trait anto {
    public function call2(){
        echo " Anto | Rejected 30 minutes ago . .";
    }
}

trait ululu {
    public function email1(){
        echo "firasyaaly@gmail.com || got invited from ululu27@gmail.com to Figma";
    }
}

class Notif{
    use cindy;
}

class Notif1{
    use anto;
}

class Notif2{
    use ululu;
}

echo "Notification ";
echo "<br>";

echo "<hr>";

$object = new Notif();
$object->call1();

echo "<hr>";

$object2 = new Notif1();
$object2->call2();

echo "<hr>";

$object3 = new Notif2();
$object3->email1();


?>