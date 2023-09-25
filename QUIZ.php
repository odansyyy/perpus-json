<?php
// Matriks pertama (5x5)
$matrix1 = array(
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1)
);

// Matriks kedua (5x3)
$matrix2 = array(
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2)
);

// Periksa apakah jumlah kolom matriks pertama sama dengan jumlah baris matriks kedua
if (count($matrix1[0]) != count($matrix2)) {
    echo "Perkalian matriks tidak mungkin dilakukan karena jumlah kolom matriks pertama tidak sama dengan jumlah baris matriks kedua.";
} else {
    // Inisialisasi matriks hasil (5x3)
    $resultMatrix = array();

    // Ukuran matriks pertama
    $rows1 = count($matrix1);
    $cols1 = count($matrix1[0]);

    // Ukuran matriks kedua
    $rows2 = count($matrix2);
    $cols2 = count($matrix2[0]);

    // Inisialisasi matriks hasil dengan nol
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $resultMatrix[$i][$j] = 0;
        }
    }

    // Menghitung hasil perkalian matriks
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            for ($k = 0; $k < $cols1; $k++) {
                $resultMatrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    // Menampilkan matriks hasil
    echo "Hasil perkalian matriks:<br>";
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            echo $resultMatrix[$i][$j] . " ";
        }
        echo "<br>";
    }
}




$n = 5; // Jumlah baris

for ($i = 1; $i <= $n; $i++) {
    // Menampilkan angka dalam baris ke-i
    for ($j = $i; $j >= 1; $j--) {
        echo $j . " ";
    }
    echo "<br>";
}

// Sebelumnya Mohon Maaf untuk penjelasannya saya pisahkan sendiri dengan nama file PENJELASAN SOAL QUIZ
?>






