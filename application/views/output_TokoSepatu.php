<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Toko Sepatu</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                <marquee>
                <h1>TOKO SEPATU "FORYOU"</h1>
                </marquee>
                Form Output Transaksi Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>No Hp</th>
                <th>:</th>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk</th>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>

            <tr>
                <th>Ukuran</th>
                <th>:</th>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>

            <tr>
                <th>Harga</th>
                <th>:</th>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('TokoSepatu'); ?>">Kembali</a>
                    <h3>Terima Kasih</h3>
                </td>
            </tr>
        </table>
    </center>  
</body>
</html>