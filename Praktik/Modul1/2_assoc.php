<?php

$students = [
    ['name' => 'Ilham', 'age' => 18, 'class' => 'XII RPL 2'],
    ['name' => 'Abdul', 'age' => 19, 'class' => 'XII RPL 2'],
];

echo "Daftar Siswa: \n";
foreach ($students as $student){
    echo ' - nama: ' . $student['name'] . "\n".
        '   kelas: ' . $student['age'] . "\n" .
        '   umur : ' . $student['class'] . "\n";
}

// Challenge
// Buat associative array 3 siswa dengan nama dan nilai.
// Tampilkan rata-rata nilai mereka.

$studentsWithScore = [
    ['name' => 'Ilham', 'score' => 91],
    ['name' => 'Abdul', 'score' => 85],
    ['name' => 'Agus', 'score' => 88],
];
$sumAllScore = 0;

echo "\nDaftar Siswa: \n";
foreach($studentsWithScore as $studentScore){
    echo " - nama: " . $studentScore['name'] . ' nilai: ' . $studentScore['score'] . "\n";
    $sumAllScore += $studentScore['score'];
}

$averageScore = $sumAllScore / count($studentsWithScore);

echo "\nNilai rata-ratanya: $averageScore";