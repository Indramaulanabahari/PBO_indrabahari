<?php
$c = 10;

function KeFahrennhit() {
    global $c;
    global $k;
    $k = ($c * 9/5) + 32;
}

function KeReamur() {
    global $c;
    global $k;
    $k = 4/5 * $c;
}

function KeKelvin() {
    global $c;
    global $c;
    $k = $c + 273.15;
}

