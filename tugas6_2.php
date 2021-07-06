<?php

$harga_jambu = 15000;
$harga_dus = 2000;
$jumlah_jambu = 6 * 5;
$total_penjualan = ($harga_jambu*$jumlah_jambu) + ($harga_dus*2);

echo "=============================================";
echo "<br>";
echo "Harga Jambu = Rp $harga_jambu / Kg <br>";
echo "Harga Kardus = Rp $harga_dus /pcs <br>";
echo "Total Penjualan (Dus dan Jambu) = Rp $total_penjualan <br>";
echo "=============================================";