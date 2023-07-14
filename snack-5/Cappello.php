<?php

include_once __DIR__ . '/Indumento.php';
class Cappello extends Indumento
{
    public $taglia;

    function __construct(String $taglia, String $materiale)
    {
        $this->taglia = $taglia;
        parent::__construct($materiale);
    }
}
