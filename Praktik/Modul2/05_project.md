# Pertemuan 5 — Mini Project: Student Grades Manager (120 menit)

Tujuan:
- Mengintegrasikan struktur data dan library untuk membuat aplikasi kecil:
  CRUD nilai siswa, simpan ke JSON, tampilkan statistik.

Fitur minimal:
- List siswa (dari JSON)
- Tambah siswa (via form sederhana jika pakai built-in server)
- Tambah nilai untuk siswa
- Hitung rata-rata per siswa dan rata-rata kelas
- Export ke CSV

File penting:
- `src/app.php` (web UI sederhana untuk demo)
- `src/data_handler.php` (fungsi baca/tulis JSON)
- `src/export_csv.php` (export)

Perintah:
```bash
php -S localhost:8080 -t src
# buka http://localhost:8080/app.php
```

Penilaian:
- Jalankan dan demo fitur CRUD + export CSV.
