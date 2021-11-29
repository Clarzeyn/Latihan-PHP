<?php
// gaji per status
$manager = 4500000;
$sekretaris = 3500000;
$karyawan = 2800000;
$staff = 3000000;


$pilih = "2";
$status = "sekretaris";

switch($pilih){
    case 1:
        echo "Menghitung Gaji Budi" . "<br>";

        if($status == "manager"){
            
            $bpjsb = 150000 * 5;
            $pajakb = 4500000 * 0.025;
            $transportb = 50000 * 24;
            $tunjanganb = 4500000 * 0.1;
            $lemburb = 50000 * 45;
            $hasilb = $manager - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;
            $bonus = $transportb + $tunjanganb + $lemburb;
            echo "Gaji Awal Rp. " . number_format ($manager, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        else if($status == "sekretaris"){
            
            $bpjsb = 150000 * 5;
            $pajakb = 3500000 * 0.025;
            $transportb = 50000 * 24;
            $tunjanganb = 3500000 * 0.1;
            $lemburb = 45000 * 45;
            $hasilb = $sekretaris - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;
            $bonus = $transportb + $tunjanganb + $lemburb;

            echo "Gaji Awal Rp. " . number_format ($manager, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        else if($status == "staff"){
            
            $bpjsb = 150000 * 5;
            $pajakb = 3000000 * 0.025;
            $transportb = 50000 * 24;
            $tunjanganb = 3000000 * 0.1;
            $lemburb = 30000 * 45;
            $hasilb = $staff - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;
            $bonus = $transportb + $tunjanganb + $lemburb;

            echo "Gaji Awal Rp. " . number_format ($staff, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        else if($status == "karyawan"){
            
            $bpjsb = 150000 * 5;
            $pajakb = 2800000 * 0.025;
            $transportb = 50000 * 24;
            $tunjanganb = 2800000 * 0.1;
            $lemburb = 25000 * 45;
            $hasilb = $karyawan - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;
            $bonus = $transportb + $tunjanganb + $lemburb;

            echo "Gaji Awal Rp. " . number_format ($karyawan, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>" . "<hr>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        break;
    
    case 2:
        
        echo " Menghitung Gaji Ratna :" . "<br>"  ."<hr>";
        if($status == "sekretaris"){
        $bpjsb = 150000 * 1;
        $pajakb = 3500000 * 0.025;
        $transportb = 35000 * 24;
        $tunjanganb = $sekretaris * 0.1;
        $lemburb = 45000 * 35;
        $hasilb = $sekretaris - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;
        $bonus = $transportb + $tunjanganb + $lemburb;

        echo "Gaji Awal Rp. " . number_format ($sekretaris, 0, '.','.') . "<br>";
        echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
        echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
        echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
        echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
        echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>" . "<hr>";
        echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
        echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        else if($status == "Manager"){
            
            $bpjsb = 150000 * 1;
            $pajakb = 4500000 * 0.025;
            $transportb = 35000 * 24;
            $tunjanganb = 4500000 * 0.1;
            $lemburb = 50000 * 35;
            $hasilb = $manager - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;
            $bonus = $transportb + $tunjanganb + $lemburb;

            echo "Gaji Awal Rp. " . number_format ($manager, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>" . "<hr>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        else if($status == "staff"){
            
            $bpjsb = 150000 * 1;
            $pajakb = 3000000 * 0.025;
            $transportb = 35000 * 24;
            $tunjanganb = 3000000 * 0.1;
            $lemburb = 30000 * 35;
            $hasilb = $staff - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;

            echo "Gaji Awal Rp. " . number_format ($staff, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>" . "<hr>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        else if($status == "karyawan"){
            
            $bpjsb = 150000 * 1;
            $pajakb = 2800000 * 0.025;
            $transportb = 35000 * 24;
            $tunjanganb = 2800000 * 0.1;
            $lemburb = 25000 * 35;
            $hasilb = $karyawan - $bpjsb - $pajakb + $transportb + $tunjanganb + $lemburb;

            echo "Gaji Awal Rp. " . number_format ($karyawan, 0, '.','.') . "<br>";
            echo "Potongan BPJS Rp. " . number_format ($bpjsb, 0, '.','.') . "<br>";
            echo "Mendapat Potongan Pajak Rp. " . number_format ($pajakb, 0, '.','.') . "<br>";
            echo "Uang Transport Rp. " . number_format ($transportb, 0, '.','.') . "<br>";
            echo "Mendapatkan Tunjangan Sebesar Rp. " . number_format ($tunjanganb, 0, '.','.') . "<br>";
            echo "Mendapatkan Uang Lembur Rp. " . number_format ($lemburb, 0, '.','.') . "<br>" . "<hr>";
            echo "Mendapatkan Bonus Sebesar Rp. " . number_format ($bonus, 0, '.','.'). "<br>" . "<hr>";
            echo "Jadi Gaji Budi Adalah Rp. " . number_format ($hasilb, 0, '.','.') . "<br>";
        }
        break;

}