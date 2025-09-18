<?php

$siswa = ["Andi", "Budi"];

// Tambah siswa
array_push($siswa, "Citra");
echo "Setelah tambah: "; print_r($siswa);

// Hapus terakhir
array_pop($siswa);
echo "Setelah hapus: "; print_r($siswa);

echo "Jumlah siswa: " . count($siswa) . "\n";