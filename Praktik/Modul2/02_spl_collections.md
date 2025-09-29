# Pertemuan 2 — SPL Collections (60 menit)

Tujuan:
- Kenal SplDoublyLinkedList, SplFixedArray, ArrayObject.

Materi singkat:
- SplDoublyLinkedList: push, unshift, pop, shift, iterate
- SplFixedArray: menghemat memori untuk large fixed-size arrays
- ArrayObject: objek yang berperilaku seperti array

Latihan:
1. Buat `spl_demo.php` yang:
   - Mengisi SplDoublyLinkedList dengan 5 nilai.
   - Menampilkan nilai dari head ke tail, lalu tail ke head.
   - Tunjukkan perbedaan penggunaan SplFixedArray vs array biasa (contoh reassign).
```
php src/spl_demo.php
```
