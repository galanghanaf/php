<?php

// Konversi integer ke string
$valueString = (string)100;
var_dump($valueString);

// konversi string ke integer
$valueInt = (int)"100";
// apabila data tidak sesuai, maka akan menampilkan angka nol
$valueInt2 = (int)"salah";
var_dump($valueInt);
var_dump($valueInt2);

// konversi string ke float
$valueFloat = (float)"1.99";
var_dump($valueFloat);
