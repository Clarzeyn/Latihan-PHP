<?php
$books = [
    "Panduan Belajar PHP Bagi Pemula",
    "Membangun Aplikasi Web Dengan PHP",
    "Tutorial PHP dan MYSQL",
    "Membuat Chat Bot Dengan PHP"
];

echo "<h5>Judul Buku PHP :</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";

}
echo "</ul>";
?>