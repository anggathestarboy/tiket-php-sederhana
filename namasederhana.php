<?php

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nama = $_POST['nama'];

            
        }

        if ($nama == null) {
         $pentunjuk = "anda belum menginputkan nama";
        }
        else {
            $petunjuk = "nama anda adalah $nama";
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
    <form action="index.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama">
        <button type="submit" value="nama">Kirim data</button><br>
        <i><?= $petunjuk ?></i>
        
    </form>
</body>
</html>