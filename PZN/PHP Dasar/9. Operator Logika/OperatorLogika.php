<?php

// Operator logika adalah operator untuk membandingkan
// dua buah nilai boolean
// hasil dari operator logika adalah true dan false

// Operator And $a && $b => true jika $a dan $b keduanya true
// Operator And $a and $b => true jika $a dan $b keduanya true

// Operator Or $a || $b => true jika $a dan $b salah satu atau keduanya true
// Operator Or $a or $b => true jika $a dan $b salah satu atau keduanya true

// Operator Not !$a => true jika $a bernilai false

// Operator Xor $a xor $b => true jika $a dan $b salah satu true, namun bila keduanya sama false

var_dump(10 && 10);
var_dump(10 || 20);

$a = 10;
var_dump(!is_null($a));

var_dump(true xor false);
