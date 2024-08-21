<?php
function hitungHargaTotal($jumlah_buku) {
    $harga_per_buku = 50000;
    $jumlah_eksemplar = $jumlah_buku * 10; // Konversi jumlah buku ke eksemplar
    $total_diskon = 0;

    if ($jumlah_eksemplar <= 100) {
        $total_harga = $jumlah_buku * $harga_per_buku;
    } elseif ($jumlah_eksemplar <= 200) {
        $diskon_pertama = 100 * ($harga_per_buku / 10) * 0.05; // 25.000
        $diskon_kedua = ($jumlah_eksemplar - 100) * ($harga_per_buku / 10) * 0.15; // 7.5000
        $total_diskon = $diskon_pertama + $diskon_kedua;
        $total_harga = ($jumlah_buku * $harga_per_buku) - $total_diskon;
                        //550.000 - 32.500
    } else {
        $diskon_pertama = 100 * ($harga_per_buku / 10) * 0.07;
        $diskon_kedua = 100 * ($harga_per_buku / 10) * 0.17;
        $diskon_ketiga = ($jumlah_eksemplar - 200) * ($harga_per_buku / 10) * 0.27;
        $total_diskon = $diskon_pertama + $diskon_kedua + $diskon_ketiga;
        $total_harga = ($jumlah_buku * $harga_per_buku) - $total_diskon;
    }

    return  [$total_harga, $total_diskon];
}

// Meminta input dari pengguna
$jumlah_buku = intval(readline("Masukkan jumlah buku yang dibeli: "));
list($total_harga, $total_diskon) = hitungHargaTotal($jumlah_buku);

echo "Total harga yang harus dibayar: Rp. " . number_format($total_harga, 0, ',', '.') . "\n";
echo "Total diskon yang didapat: Rp. " . number_format($total_diskon, 0, ',', '.') . "\n";
?>
