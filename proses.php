<?php
if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $kode   = $_POST['kode_pesawat'];
    $kelas  = $_POST['kelas'];
    $jumlah = $_POST['jumlah'];

    // Logika penentuan Nama Pesawat dan Harga Tiket
    if ($kode == "GRD") {
        $pesawat = "Garuda";
        if ($kelas == "Eksekutif") $harga = 1500000;
        elseif ($kelas == "Bisnis") $harga = 900000;
        else $harga = 500000;
    } 
    elseif ($kode == "MPT") {
        $pesawat = "Merpati";
        if ($kelas == "Eksekutif") $harga = 1200000;
        elseif ($kelas == "Bisnis") $harga = 800000;
        else $harga = 400000;
    } 
    else { // BTV
        $pesawat = "Batavia";
        if ($kelas == "Eksekutif") $harga = 1000000;
        elseif ($kelas == "Bisnis") $harga = 700000;
        else $harga = 300000;
    }

    $total = $harga * $jumlah;

    // Menampilkan Output
    echo "<pre>";
    echo "========================================================<br>";
    echo "<b>PEMESANAN TIKET ONLINE JAKARTA - MALAYSIA</b><br>";
    echo "========================================================<br>";
    echo "Nama          : " . $nama . "<br>";
    echo "Nama Pesawat  : " . $pesawat . "<br>";
    echo "Kelas         : " . $kelas . "<br>";
    echo "Harga Tiket   : " . number_format($harga, 0, ',', '.') . "<br>";
    echo "Jumlah Tiket  : " . $jumlah . "<br>";
    echo "Total Bayar   : " . number_format($total, 0, ',', '.') . "<br>";
    echo "========================================================<br>";
    echo "</pre>";
    echo "<a href='index.php'>Kembali</a>";
}
?>