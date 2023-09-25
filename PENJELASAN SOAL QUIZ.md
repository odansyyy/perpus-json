### PENJELASAN PENYELESAIAN SOAL 2C PERULANGAN ###
![output segitiga ](https://github.com/odansyyy/perpus-json/assets/145110140/c7b76b7c-ea86-4ab1-a88f-164b2cc5d61f)

- $n = 5;: Ini adalah inisialisasi variabel $n dengan nilai 5, yang akan menentukan jumlah baris dalam pola segitiga terbalik.

- for ($i = 1; $i <= $n; $i++) {: Ini adalah perulangan luar yang berjalan dari 1 hingga nilai $n. Ini mengontrol berapa banyak baris yang akan ditampilkan dalam pola segitiga.

- Di dalam perulangan luar, ada perulangan dalam (for ($j = $i; $j >= 1; $j--) {) yang menghasilkan angka dalam baris ke-$i. Ini dimulai dari nilai $i dan berkurang hingga mencapai 1.

- echo $j . " ";: Setiap angka dalam baris ke-$i dicetak dengan spasi diikuti oleh angka berikutnya.


### PENJELASAN PENYELESAIAN SOAL MATRIK DENGAN PERULANGAN ###
![output matrik](https://github.com/odansyyy/perpus-json/assets/145110140/863efb1e-4a57-4dc6-a3c8-76dfa7853ddc)

1. Deklarasi Matriks Pertama dan Matriks Kedua:
Dua matriks pertama ($matrix1) dan kedua ($matrix2) dideklarasikan dengan ukuran 5x5 dan 5x3, dan setiap elemen matriks diinisialisasi dengan angka 1 dan 2.

2. Periksa Kesesuaian Matriks:
Program memeriksa apakah jumlah kolom matriks pertama sama dengan jumlah baris matriks kedua. Jika tidak sama, program akan mencetak pesan bahwa perkalian matriks tidak bisa dilakukan karena kedua matriks tidak sesuai.

3. Inisialisasi Matriks Hasil:
Jika jumlah kolom matriks pertama sama dengan jumlah baris matriks kedua, maka matriks hasil ($resultMatrix) diinisialisasi dengan ukuran 5x3, dan semua elemen diatur ke 0.

4. Ukuran Matriks Pertama dan Kedua:
Variabel $rows1 dan $cols1 digunakan untuk menyimpan jumlah baris dan kolom matriks pertama, sedangkan $rows2 dan $cols2 digunakan untuk matriks kedua.

5. Inisialisasi Matriks Hasil dengan Nol:
Matriks hasil diisi dengan angka 0 sebagai nilai awal untuk semua elemen.

6. Menghitung Hasil Perkalian Matriks:
Dalam bagian ini, program melakukan perhitungan perkalian matriks. Terdapat tiga perulangan bersarang (nested loops) yang digunakan:
- Loop pertama ($i) berjalan melalui baris matriks pertama.
- Loop kedua ($j) berjalan melalui kolom matriks kedua.
- Loop ketiga ($k) digunakan untuk mengalikan dan menjumlahkan elemen-elemen matriks pertama dan kedua untuk menghasilkan elemen matriks hasil.


7. Menampilkan Matriks Hasil:
Setelah perkalian matriks selesai, program menampilkan matriks hasil ke layar dengan baris dan kolom yang sesuai. Hasil perkalian matriks ini adalah hasil dari mengalikan matriks pertama ($matrix1) dan matriks kedua ($matrix2).

Jadi, secara keseluruhan, kode ini mengambil dua matriks, memeriksa apakah mereka bisa dikalikan, melakukan perkalian matriks jika memungkinkan, dan menampilkan hasilnya ke layar.
