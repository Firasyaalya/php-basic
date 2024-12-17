<?php


/*
- self tidak bisa melakukan inheritance
- self juga tidak mereference child class

*/

class A {
    public static function who(){
        echo __CLASS__;
    }

    public static function test(){
        static::who(); // penggunaan late static binding // bersifat private walaupun public
    }
}

class B extends A {
    public static function who(){
        echo __CLASS__;
    } 
}

B::test();


?>






























