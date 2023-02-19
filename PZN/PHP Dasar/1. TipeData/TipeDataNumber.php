<?php

// Tipe Data Number terdapat 2 jenis tipe data number
// 1. int = bilangan bulat decimal
// 2. float = bilangan pecahan

// Tipe Data Integer
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111);

echo "Underscore in Number : ";
var_dump(1_000_000);

// Tipe Data Floating Point
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (1.2 x 0.001) : ";
var_dump(1.2e-3);

echo "Underscore in Number : ";
var_dump(1_234.234);

// Integer Overflow
// Kalau datanya melebihi sistem operasi yang 32/64 bit maka akan diconvert ke float
echo "Integer Overflow 32 Bit : ";
var_dump(2147483647);

echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775807);
