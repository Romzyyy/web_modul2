<?php
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$hasil = $harga * $jumlah;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <h1>Aplikasi Toko</h1>
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><?php   echo "$nama";?></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><?php echo "$nama_barang";?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php
            echo "$harga";
            ?></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><?php
            echo "$jumlah";
            ?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><?php
            echo $hasil;
            ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right"><a href="tugas.php"><input type="submit" value="back"></a></td>
            </tr>
        </table>
    </form>
</body>

</html>