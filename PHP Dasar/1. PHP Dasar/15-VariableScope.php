<?php
// variable scope / lingkup variabel


// variable lokal
function tampilX()
{
    $x = 20;
    echo $x;
};

tampilX();


echo "<br>";


// variable global
$y = 10;
function tampilY()
{
    global $y;
    echo $y;
}
tampilY();


// Variable Superglobals ini, semuanya adalah array asosiatif
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

$_GET["nama"] = "Galang Hanafi";
$_GET["npm"] = "065119164";

// bisa juga melakukan input memakai metode request $_GET menggunakan url
// seperti http://localhost/belajar/16-VariableSuperglobals.php
// menjadi http://localhost/belajar/16-VariableSuperglobals.php?nama=Galang Hanafi&npm=065119164


var_dump($_GET);
