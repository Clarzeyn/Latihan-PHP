<?php
$siswa =[
    ['nama' => 'Wildan', 'jk' =>'Laki-laki','umur' => 16],
    ['nama' => 'Virgi', 'jk' =>'Laki-laki','umur' => 17],
    ['nama' => 'Surya', 'jk' =>'Laki-laki','umur' => 17],
    ['nama' => 'Rohesa', 'jk' =>'Laki-laki','umur' => 16],
    ['nama' => 'Rizki', 'jk' =>'Laki-laki','umur' => 17],
];

foreach ($siswa as $value){
    echo "Nama :" . $value['nama'] . "<br>";
    echo "Jenis Kelamin : " . $value['jk'] . "<br>";
    echo "Umur : " . $value['umur'];
    echo "<hr>";
}
?>
