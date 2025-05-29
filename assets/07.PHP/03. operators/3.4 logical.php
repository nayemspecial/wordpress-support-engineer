<?php
$t = true;
$f = false;

$and = $t && $f;
var_dump($and);

$or = $t || $f;
var_dump($or);

$not = !$t;
var_dump($not);

var_dump( $t && $f );
var_dump( $t || $f );
var_dump( !$t );