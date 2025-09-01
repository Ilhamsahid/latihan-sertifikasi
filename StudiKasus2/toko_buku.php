<?php

echo "Masukkan namamu: ";
$namaPelanggan = trim(fgets(STDIN)); // String

$isMember = null; // null

while($isMember === null){
    echo "\nMohon input (y/t)\nApakah anda seorang member ? ";
    $input = trim(fgets(STDIN)); // String

    if($input == 'y' || $input == 't'){
        $isMember = $isMember === 'y'; // Boolean
    }
}

echo "\nMasukkan judul buku: ";
$judulBuku = trim(string: fgets(STDIN)); // String

echo "\nMasukkan jumlah buku: ";
$jumlahBuku = (int) trim(fgets(STDIN)); // Integer

$hargaBuku = 85000; // Integer

$totalHargaBuku = $hargaBuku * $jumlahBuku; // Integer

echo "\n\n=============== Informasi Pembelian =====================\n";
echo "| ". str_pad("Nama", 20), " | " . str_pad($namaPelanggan, 30).  " | \n";
echo "| ". str_pad("Anggota", 20), " | " . str_pad($isMember ? 'Member' : 'Non-Member', 30).  " | \n";
echo "| ". str_pad("Buku", 20) . " | " .  str_pad($judulBuku, 30) . " | \n";
echo "| ". str_pad("Harga", 20) . " | " . str_pad($hargaBuku, 30) .  " | \n";
echo "| ". str_pad("Jumlah", 20) . " | " . str_pad($jumlahBuku, 30) .  " | \n";
echo "| ". str_pad("Total", 20) . " | " . str_pad($totalHargaBuku, 30) .  " | \n";

echo "=========================================================\n";
