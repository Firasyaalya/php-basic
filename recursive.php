<?php

/*
- sebuah function yang memanggil dirinya sendiri
- function biasa, tidak ada keyword khusus untuk nya

function funcName{
    funcName()
}
funcname();
*/

// coba satu
// function sayHelloWorld(){
//     echo 'hello World!';
//     sayHelloWorld();
// }

// sayHelloWorld()

//pengulangan menggunakan for 
// for($i = 1; $i <= 10; $i++){
//     echo "pengulangan  ke-($i)\n";
// }

//pengulangan menggunakan recursive {rekursif}
// function tampilkanAngka(int $jumlah, int $index = 1){
//     echo "Sebelum memanggil diri sendiri [{$index}]\n";

//     if($index < $jumlah){
//         tampilkanAngka($jumlah, $index + 1);
//     } else {
//         echo "Proses Berakhir \n";
//     }

//     echo "Sebelum memanggil diri sendiri [{$index}]\n";

// }


// tampilkanAngka(20);

// bagian faktorial
// n * faktorial (n-1)

// function faktorial ($n){
//     echo "faktorial ({$n}) = faktorial(" . ($n - 1) . ")\n";

//     if ($n > 2){
//         faktorial($n - 1);
//     }
// }

// faktorial(5);

// faktorial dengan hasil
// function faktorial($var){
//     if($var > 2){
//         return $var * faktorial ($var - 1);
//     } else {
//         return $var;
//     }
// }

// # panggil fungsi faktorial 
// $hasil = faktorial(1);
// echo $hasil;

// siapkan 2 angka awal
$angka_sblm = 0;
$angka_skrg = 1;

//tampilkan 2 angka awal
echo "$angka_sblm $angka_skrg";

for ($i = 0; $i < 10; $i++)
{
    //hitung angka yang ditampilkan
    $tampil = $angka_skrg + $angka_sblm;
    echo "$tampil";

    // siapkan angka untuk perhitungan berikutnya
    $angka_sblm = $angka_skrg;
    $angka_skrg = $tampil;

    return $tampil;
}


$hasil = $tampil;
echo $hasil;

function cari_fibonacci($urutan)
{
    // siapkan 2 angka awal
    $angka_sblm = 0;
    $angka_skrg = 1;

    for ($i = 0; $i<$urutan-1; $i++)
    {
        // hitung angka fibonacci
        $tampil = $angka_skrg + $angka_sblm;
        
        // siapkan angka untuk perhitungan berikutnya
        $angka_sblm = $angka_skrg;
        $angka_skrg = $tampil;
    }
    return $tampil;
}

echo cari_fibonacci(11);






?>

