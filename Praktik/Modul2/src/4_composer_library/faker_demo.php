<?php
require __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create('id_ID');

$siswa = [];
for ($i=0;$i<20;$i++){
    $siswa[] = [
        'id' => $i+1,
        'nama' => $faker->name(),
        'usia' => $faker->numberBetween(15,19),
        'kelas' => $faker->randomElement(['X RPL 1','X RPL 2','XI RPL 1','XI RPL 2','XII RPL 2'])
    ];
}

$dir = __DIR__ . '/data';
if (!is_dir($dir)) {
    mkdir($dir, 0777, true); // buat folder kalau belum ada
}

file_put_contents(__DIR__ . '/data/siswa.json', json_encode($siswa, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
echo "Generated 20 fake siswa at src/data/siswa.json\n";