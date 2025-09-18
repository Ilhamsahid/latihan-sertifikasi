<?php

// Mendefinisikan students yaitu array yang berisi siswa
$students = ['Andi', 'Budi', 'Citra', 'Dewi'];

echo "Daftar Siswa: \n";
// Menampilkan students yang berisi siswa yang ada di students
foreach($students as $student){
    echo " - $student\n";
}

// Challenge
// Tambahkan 3 nama baru ke array dan tampilkan jumlah total siswa.

$students = ['Ilham', 'Andiana', 'Budiono'];

echo "\nDaftar Siswa\n";
foreach($students as $student){
    echo " - $student\n";
}

echo "Jumlah Siswa: " . count($students);