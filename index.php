<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Tiket Online</title>
</head>
<body>

    <h2>Pemesanan Tiket Online Jakarta - Malaysia</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        
        Pilih Pesawat: 
        <select name="kode" required>
            <option value="GRD">Garuda</option>
            <option value="MPT">Merpati</option>
            <option value="BTV">Batavia</option>
        </select><br><br>

        Pilih Kelas: 
        <select name="kelas" required>
            <option value="Eksekutif">Eksekutif</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Ekonomi">Ekonomi</option>
        </select><br><br>

        Jumlah Tiket: <input type="number" name="jumlah" min="1" required><br><br>
        
        <button type="submit" name="proses">Simpan</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $kode = $_POST['kode'];
        $kelas = $_POST['kelas'];
        $jumlah = $_POST['jumlah'];
        $harga = 0;
        $pesawat = "";

        // Menentukan Nama Pesawat dan Harga berdasarkan Kode & Kelas
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
        elseif ($kode == "BTV") {
            $pesawat = "Batavia";
            if ($kelas == "Eksekutif") $harga = 1000000;
            elseif ($kelas == "Bisnis") $harga = 700000;
            else $harga = 300000;
        }

        $total = $harga * $jumlah;

        // Output Hasil
        echo "<pre>";
        echo "========================================<br>";
        echo "PEMESANAN TIKET ONLINE JAKARTA - MALAYSIA<br>";
        echo "========================================<br>";
        echo "Nama          : $nama<br>";
        echo "Nama Pesawat  : $pesawat<br>";
        echo "Kelas         : $kelas<br>";
        echo "Harga Tiket   : $harga<br>";
        echo "Jumlah Tiket  : $jumlah<br>";
        echo "Total Bayar   : $total<br>";
        echo "========================================<br>";
        echo "</pre>";
    }
    ?>
</body>
</html>
