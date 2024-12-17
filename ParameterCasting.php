<?php
declare(string_types=1);
class ParameterCasting {
    public function __contruct(array $arraytype) {

    }
    public function stringCast(string $stringType){

    }
    public function intCast(int $intType){

    }
    public function floatCast(float $floatType){

    }
    public function booleanCast(bool $booleanType){

    }
}

$object = new ParameterCasting (array());
$object->floatCast(1);
$object->intCast(1.0);