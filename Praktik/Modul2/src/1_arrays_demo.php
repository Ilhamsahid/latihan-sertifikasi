<?php

$students = [
    ['name' => 'Andi', 'age' => 17, 'class' => 'X RPL 1'],
    ['name' => 'Budi', 'age' => 16, 'class' => 'X RPL 2'],
    ['name' => 'Citra', 'age' => 18, 'class' => 'XI RPL 1'],
    ['name' => 'Dewi', 'age' => 17, 'class' => 'XI RPL 2'],
];

// singkatnya jika kondisi true: element disimpan, kondisi false: element akan dibuang
$filtered = array_filter($students, function ($s) {
    return $s['age'] > 16;
});

// array map berguna untuk mengambil array berdasarkan field atau memodifikasinya
$names = array_map(function ($s) {
    return $s['name'];
}, $students);

// array reduce digunakan untuk mereduksi yaitu mengubah kumpulan array menjadi satu nilai tunggal
// dan satu nilai tunggal itu bisa berupa angka, string, bahkan array baru
$average = array_reduce($students, function ($carry, $s) {
    return $carry + $s['age'];
}, 0) / count($students);

echo "Siswa (semua):\n";
foreach ($students as $student) {
    echo " - {$student['name']}, usia {$student['age']}, kelas {$student['class']}\n";
}

echo "\nSiswa usia > 16:\n";
foreach($filtered as $s){
    echo " - {$s['name']} ({$s['age']})\n";
};

echo "\nDaftar nama: ".implode(', ', $names)."\n";
echo "Rata-rata usia: " . number_format($average,2) ."\n";

function search_by_name($arr, $term){
    $term = mb_strtolower($term);
    return array_filter($arr, function($s) use ($term){
        return mb_strpos(mb_strtolower($s['name']), $term) !== false;
    });
}

echo "\nHasil pencarian 'di':\n";
$found = search_by_name($students, 'di');
foreach($found as $f) echo " - {$f['name']}\n";