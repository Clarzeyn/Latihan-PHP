<?php
//  Variable untuk menyimpan Gaji Kotor
$gaji = 4500000;

//  Variable untuk menyimpan Potongan BPJS
$bpjs = 200000;

//  Variable untuk menyimpan Infak
$infak = 50000;

// Variable untuk menyimpan Uang Transport
$transport = 240000;

// Perhitungan
// Menghitung Besarnya Pajak
$pajak = $gaji * 2.5 / 100;

// Menghitung Gaji Bersih
$gb = $gaji - $pajak - $infak - $bpjs;

// Menghitung Total Gaji Bersih
$tgb = $gb + $transport;

echo "Gaji Kotor Haddad adalah Rp. " . "$gaji" . "<br>";
echo "Potongan BPJS Haddad adalah Rp. " . "$bpjs" . "<br>";
echo "Potongan Infak Setiap Bulan adalah Rp. " . "$infak" . "<br>";
echo "Potongan Pajak adalah Rp. " . "$pajak" . "<br>";
echo "Biaya Uang Transportasi Yang Di Terima Haddad adalah Rp. " . "$transport" . "<br>";
echo "Gaji Bersih Haddad Setelah Dilakukan Pemotongan Adalah Rp. " . "$gb" . "<br>" . "<hr>";
echo "Jadi, Sisa Gaji Yang Di Terima Haddad Setelah Menerima Uang Transport Adalah Rp. " . "$tgb";
?>

