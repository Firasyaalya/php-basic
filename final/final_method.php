<?php

class Induk{
    final public function Test(){
        return "Display Test Pada Induk";
    }
}

class Anak extends induk{
    public function Test(){
        return "Display Test Pada Anak";
    }
}

$object = new Anak();
echo $object->Test();








?>