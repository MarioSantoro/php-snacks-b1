<?php

include_once __DIR__ . '/Indumento.php';
class Scarpa extends Indumento
{
    public $numeroScarpa;

    function __construct(int $numeroScarpa, String $materiale)
    {
        $this->numeroScarpa = $numeroScarpa;
        parent::__construct($materiale);
    }
}
