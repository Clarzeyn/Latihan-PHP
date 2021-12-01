<?php
// Penampungan Data
if(isset($_POST['Simpan'])){
    // textfield
    $nama = $_POST['nama'];
    // radio
    $jk = $_POST['jk'];
    // number
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];

    if($jk = "Laki-laki"){
        if($tb <= 170 || $bb <=90){
           $p= "Diterima";
        }
        else{
            $p="Tidak Di Terima";
        }
    }
    else if($jk = "Perempuan"){
        if($tb <= 160 || $bb <=75){
            $p= "Diterima";
        }
        else{
            $p= "Tidak Di Terima";
        }
    }
    else 
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
    <center><h1>Pendaftaran TNI/POLRI</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    Tinggi Badan : <b><?php echo $tb; ?></b>cm<br>
    Berat Badan : <b><?php echo $bb; ?></b>kg<br>
    Hasil : <b><?php echo $p; ?></b><br>

</body>
</html>
<?php } ?>