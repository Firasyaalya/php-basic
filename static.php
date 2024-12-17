<?php

 class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "Halo" . self::$angka++ . "kali ." ;
     }
 }

echo ContohStatic :: $angka;
echo "<br>";
echo ContohStatic :: halo();
echo "<hr>";
echo ContohStatic :: halo();




// contoh static yang nilainya tetap meskipun di instansiasi berulang kali


class Contoh{
    public static $angka = 1;

    public static function halo(){
        return "Halo" . self::$angka++ . "kali. <br>";
    }
}

$object = new Contoh;
echo $object->halo();
echo $object->halo();
echo $object->halo();

echo "<hr>";

$object2 = new Contoh();

echo $object2->halo();
echo $object2->halo();
echo $object2->halo();





?>