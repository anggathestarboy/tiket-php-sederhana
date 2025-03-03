<?php
$tiket = "";
$nomor = 0;
$output = 0;
$total = 0;
$tipe = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['tiket']) && !empty($_POST['nomor'])) {
        $tiket = $_POST['tiket'];
        $nomor = (int) $_POST['nomor'];

        if ($tiket == "ekonomi") {
            $output = 80000;
            $tipe = "(Ekonomi)";
        } elseif ($tiket == "reguler") {
            $output = 100000;
            $tipe = "(Reguler)";
        } elseif ($tiket == "vip") {
            $output = 135000;
            $tipe = "(VIP)";
        }

        $total = $nomor * $output;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Pemesanan Tiket</h2>
    <table>
        <tr>
            <td class="form-container">
                <form action="index.php" method="POST">
                    <table class="inner-table">
                        <tr>
                            <td><label for="tiket">Jenis Tiket:</label></td>
                            <td>
                                <select name="tiket" id="tiket" required>
                                    <option value="" selected disabled>Pilih Jenis Tiket</option>
                                    <option value="ekonomi">Ekonomi - 80.000</option>
                                    <option value="reguler">Reguler - 100.000</option>
                                    <option value="vip">VIP - 135.000</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nomor">Jumlah Tiket:</label></td>
                            <td><input type="number" name="nomor" id="nomor" required min="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="button-container">
                                <button type="submit" name="kirim">Pesan Tiket</button>
                                <a href="index.php"><button type="button" onclick="location.reload();">Reset</button></a>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
            <td class="output-container">
                <table class="inner-table">
                    <tr>
                        <th colspan="2">Detail Pemesanan</th>
                    </tr>
                    <tr>
                        <td>Harga Tiket</td>
                        <td><?= number_format($output, 0, ',', '.') ?> <?= $tipe ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Tiket</td>
                        <td><?= $nomor ?></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><b><?= number_format($total, 0, ',', '.') ?></b></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

   
</body>
</html>
