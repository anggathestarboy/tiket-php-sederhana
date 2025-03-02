<?php
if (isset($_POST['jenis_tiket']) && isset($_POST['angka'])) {
    $jenis_tiket = $_POST['jenis_tiket'];
    $angka = $_POST['angka'];
    $harga_tiket = 0;

    if ($jenis_tiket == 'ekonomi') {
        $harga_tiket = 80000;
    } elseif ($jenis_tiket == 'reguler') {
        $harga_tiket = 100000;
    } elseif ($jenis_tiket == 'vip') {
        $harga_tiket = 130000;
    }

    $harga = $angka * $harga_tiket;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Pemesanan Tiket</h2>
        <label for="jenis_tiket">Jenis Tiket:</label>
        <select name="jenis_tiket" >
            <option value="ekonomi">Ekonomi (Rp 80.000)</option>
            <option value="reguler">Reguler (Rp 100.000)</option>
            <option value="vip">VIP (Rp 130.000)</option>
        </select><br><br>
        <label for="angka">Jumlah Tiket:</label>
        <input type="number" name="angka"><br><br>
        <button type="submit" value="hitung">Hitung</button>
    </form><br><br>

    <div id="output">
        <h3>Detail Pemesanan</h3>
        
            <p>Jenis Tiket: <?= ucfirst($jenis_tiket) ?></p>
            <p>Jumlah Tiket: <?= $angka ?></p>
            <p>Harga per Tiket: Rp <?= number_format($harga_tiket) ?></p>
            <p>Total Pembayaran: Rp <?= number_format($harga) ?></p>
        
    </div>
</body>
</html>