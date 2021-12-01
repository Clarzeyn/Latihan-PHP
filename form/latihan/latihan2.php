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
        <legend>Pendaftaran Masuk Perguruan Tinggi</legend>
        <form action="proses2.php" Method="post">
            <table>
                <tr>
                    <th style="text-align:left">Nama Lengkap</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50">
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Nilai Matematika :</th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="Matematika" min="0" max="100" placeholder="Matematika">
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Nilai Bahasa Indonesia :</th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="bindo" min="0" max="100" placeholder="B. Indo">
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Nilai Bahasa Inggris :</th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="binggris" min="0" max="100" placeholder="B. Inggris">
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Nilai Kejuruan :</th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="kejuruan" min="0" max="100" placeholder="kejuruan">
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