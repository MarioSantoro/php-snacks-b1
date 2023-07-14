<?php
include_once __DIR__ . '/Indumento.php';
include_once __DIR__ . '/Scarpa.php';
include_once __DIR__ . '/Cappello.php';
$scarpa = new Scarpa(43, 'plastica');
$cappello = new Cappello('Large', 'plastica');

var_dump($scarpa, $cappello);
