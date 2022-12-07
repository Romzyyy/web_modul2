<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aplikasi Toko</h1>
    <table>
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukan nama anda"></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>
                <?php
                $nama_barang = array('pancake', 'burger', 'pasta');
                ?>
                <select name="nama_barag">
                    <?php
                            foreach($nama_barang as $item){
                              echo "<option value='$item'>$item</option>";
                         }
                    ?>
                </select>
            </td>
        </tr>
    </table>
</body>

</html>