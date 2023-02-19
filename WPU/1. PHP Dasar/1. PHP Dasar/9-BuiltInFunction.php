<?php

// function date
echo date("l, d-m-Y");
echo "<br>";


// funtion time
// ini adalah UNIX Timestamp / EPOCH time dimulai pada 1 Januari 1970
echo time();
echo "<br>";

echo date("l, d-m-Y", time() + 60 * 60 * 24 * 120);
echo "<br>";

// function mktime
// membuat detik sendiri
// parameter mktime jam , menit , detik , bulan , tanggal , tahun
echo date("l, d-m-Y", mktime(0, 0, 0, 11, 24, 2000));
echo "<br>";

// function strtotime
// membuat format tanggal ke detik
echo strtotime("24 nov 2000");
