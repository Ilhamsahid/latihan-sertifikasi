<?php
require 'data_handler.php';
$data = read_data(__DIR__ . '/data/siswa.json');
$fp = fopen('php://output','w');
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="siswa_export.csv"');
fputcsv($fp, ['id','nama','usia','kelas']);
foreach($data as $d) fputcsv($fp, [$d['id'],$d['nama'],$d['usia'],$d['kelas']]);
fclose($fp);
