<?php
$ipk = 1;

if($ipk <= 2 && $ipk >=0){
    echo  "Grade E" . "<br>";
    echo  "Maaf Anda Harus Mengulang" . "<br>";
}
else if($ipk <= 2.5 && $ipk >= 2){
    echo  "Grade D". "<br>" ;
    echo "Maaf Anda Harus Memperbaiki Mata Kuliah";
}
else if($ipk > 2.6 && $ipk <=3){
    echo  "Grade C" . "<br>";
    echo "Mau Memperbaiki Boleh Tidak Juga Tidak Apa Apa";
}
else if($ipk > 3 && $ipk <=3.5){
    echo  "Grade B" . "<br>";
    echo "Mata Kuliah Anda Baik";
}
else if($ipk > 3.5 && $ipk <=4){
    echo  "Grade A" . "<br>";
    echo "Mata Kuliah Anda Super";
}
else{
    echo "Sistem eror";
}


