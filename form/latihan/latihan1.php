<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Pendaftaran Masuk TNI/POLRI</legend>
        <form action="proses1.php" Method="post">
            <table>
                <tr>
                    <th style="text-align:left">Nama Lengkap</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50">
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">L
                        <input type="radio" name="jk" value="Perempuan">P
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Tinggi Badan & Berat Badan</th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="tb" min="170" max="250" placeholder="Tinggi Badan">
                        <input type="Number" name="bb" min="90" max="150" placeholder="Berat Badan">
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="Simpan"> Daftar</button>
                        <button type="reset">Bersihkan Formulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>