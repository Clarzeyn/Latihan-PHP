<?php
// Penampungan Data
if(isset($_POST['Simpan'])){
    // textfield
    $nama = $_POST['nama'];
    $matematika = $_POST['Matematika'];

    $bindo = $_POST['bindo'];
    $binggris = $_POST['binggris'];
    $kejuruan = $_POST['kejuruan'];
    $jumlah = $matematika + $bindo + $binggris + $kejuruan;
    $ratarata = $jumlah / 4;

    if($jumlah >=340){
           $p= "Diterima";
    }else{
            $p="Tidak Di Terima";
     }
    
  if($ratarata >= 80.5){
            $p= "Diterima";
    }else{
            $p= "Tidak Di Terima";
    }
}
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
    <center><h1>Pendaftaran Masuk Perguruan Tinggi</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Nilai Matematika: <b><?php echo $matematika; ?></b><br>
    Nilai Bahasa Indonesia : <b><?php echo $bindo; ?></b><br>
    Nilai Bahasa Inggris : <b><?php echo $binggris; ?></b><br>
    Nilai Kejuruan : <b><?php echo $kejuruan; ?></b><br>
    Jumlah Nilai : <b><?php echo $jumlah; ?></b><br>
    Rata Rata : <b><?php echo $ratarata; ?></b><br>
    Hasil : <b><?php echo $p; ?></b><br>

</body>
</html>
