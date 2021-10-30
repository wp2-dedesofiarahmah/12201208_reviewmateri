<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Toko Sepatu</title>
</head>
<body>
    <center>
        <form action="<?php echo base_url(). 'index.php/TokoSepatu/cetak'; ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    <marquee>
                    <h1>TOKO SEPATU "FORYOU"</h1>
                    </marquee>
                    Form Input Transaksi Toko Sepatu
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
                    <input type="text" name="nama" id="nama">
                    <?= form_error('nama', '<br> <span style="color:red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Nomor Hp</th>
                <th>:</th>
                <td>
                    <input type="text" name="nohp" id="nohp">
                    <?= form_error('nohp', '<br> <span style="color:red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td> :</td>
                <td>
                    <select name="merk" id="merk">
                    <option>--- Pilih ---</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Kickers">Kickers</option>
                    <option value="Eiger">Eiger</option>
                    <option value="Bucherri">Bucherri</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Ukuran Sepatu</th>
                <th>:</th>
                <td>
                <select name="ukuran" id="ukuran">
                    <option>--- Pilih ---</option>
                    <?php for($i = 32; $i <= 44; $i++) : ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php endfor; ?>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </center>  
</body>
</html>