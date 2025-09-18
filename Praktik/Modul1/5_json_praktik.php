<?php
// Pertemuan 5: Mini Project Daftar Siswa
$file = "siswa.json";

// baca data lama
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// tambah siswa baru
foreach($data as $d){
    if($d['nama'] == "SiswaBaru"){
        getAllStudents($data);
        return;
    }
}
$data[] = ["nama" => "SiswaBaru", "umur" => 17];

// simpan
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

// tampilkan
getAllStudents($data);


function getAllStudents($students){
    echo "Daftar Siswa:\n";
    foreach ($students as $student) {
        echo "- {$student['nama']} (Umur {$student['umur']})\n";
    }
}