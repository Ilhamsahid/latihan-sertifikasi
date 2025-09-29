<?php
// app.php - web demo sederhana (built-in server)
require 'data_handler.php';
$path = __DIR__ . '/data/siswa.json';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = read_data($path);
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $id = count($data) ? end($data)['id'] + 1 : 1;
        $data[] = ['id'=>$id, 'nama'=>$_POST['nama'] ?? '-', 'usia'=>intval($_POST['usia'] ?? 0), 'kelas'=>$_POST['kelas'] ?? '-'];
        write_data($path, $data);
        header('Location: /app.php'); exit;
    }
}
$data = read_data($path);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Student Grades Manager (Demo)</title></head>
<body>
<h2>Daftar Siswa (Demo)</h2>
<table border="1" cellpadding="6" cellspacing="0">
<tr><th>ID</th><th>Nama</th><th>Usia</th><th>Kelas</th></tr>
<?php foreach($data as $d): ?>
<tr><td><?=htmlspecialchars($d['id'])?></td><td><?=htmlspecialchars($d['nama'])?></td><td><?=htmlspecialchars($d['usia'])?></td><td><?=htmlspecialchars($d['kelas'])?></td></tr>
<?php endforeach; ?>
</table>

<h3>Tambah Siswa</h3>
<form method="post">
<input type="hidden" name="action" value="add">
Nama: <input name="nama"> Usia: <input name="usia" size="3"> Kelas: <input name="kelas">
<button type="submit">Tambah</button>
</form>

<p><a href="/export_csv.php">Export CSV</a></p>
</body>
</html>
