<?php

final class Induk{
    public function test(){
        return "Display Test pada Induk";
    }
}

class Anak extends Induk{
    public function Test(){
        return "Display Test Pada Anak";
    }
}

$object = new Induk;
echo $object->Test();