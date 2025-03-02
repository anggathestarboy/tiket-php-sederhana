<?php
        if(isset($_POST['angka'])) {
            $angka = $_POST['angka'];
            $tiket = 100000;
            $harga = $angka * $tiket;


            
            
        }


        



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="percobaan2.php" method="POST">
        <h2>Harga Tiket adalah Rp 100.000</h2>
        <label for="">Tiket</label>
        <input type="number" name="angka">
        <button type="submit" value="hitung">Hitung</button>
        
    </form><br><br>

    <div id="output">
        <h3>Detail Pemesanan</h3>
        <p>Jumlah Tiket: <?= $angka ?></p>
        <p>Harga Tiket: 100000</p>
        <p>Total Pembayaran: <?= $harga ?></p>
    </div>
</body>
</html>