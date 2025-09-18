<?php
// Pertemuan 4: JSON + Library PHP
$siswa = [
    ["nama" => "Andi", "umur" => 17],
    ["nama" => "Budi", "umur" => 16]
];

// Simpan ke file JSON
file_put_contents("siswa.json", json_encode($siswa, JSON_PRETTY_PRINT));

// Baca dari JSON
$data = json_decode(file_get_contents("siswa.json"), true);

echo "Data dari JSON:\n";
print_r($data);

// Tanggal hari ini
echo "Hari ini: " . date("d-m-Y") . "\n";