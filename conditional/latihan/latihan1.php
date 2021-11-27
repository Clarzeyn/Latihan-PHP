<?php
$helm = "Ada";
$stnk = "Ada";
$sim = "Ada";

if ($helm == "Ada" && $stnk == "Tidak" && $sim == "Tidak" ){
    echo "Kami Cek Perlengkapan Surat STNK dan SIM nya";
}
else if ($helm == "Ada" && $stnk == "Ada" && $sim == "Tidak"){
    echo "Surat nya lengkap boleh kami cek SIM nya?";
}
else if ($helm == "Ada" && $stnk == "Ada" && $sim == "Ada"){
    echo "Selamat Berkendara hati hati di jalan";
}
else {
    echo "Anda Kami Tilang";
}
?>