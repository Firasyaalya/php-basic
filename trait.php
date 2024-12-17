<?php
trait message1 {
    public function msg1(){
        echo "OOP is fun!";
    }
}
trait message2 {
    public function msg2(){
        echo "OOP reduces code duplication!";
    }
}

class Welcome{
    use message1;
}

class Welcome2{
    use message1, message2;
}

$object = new Welcome();
$object->msg1();
echo "<br>";

$object2 = new Welcome2();
$object->msg1();
$object2->msg2();

?>