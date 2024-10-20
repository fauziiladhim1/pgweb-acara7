<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$mobil = array("BMW", "Audi", "Mercedes", "Volkswagen", "Volvo"); 
$warna = array("merah", "biru", "hitam", "putih", "silver");
$cc = array(2000, 1800, 2500, 1600, 2400);
$harga = array(50000, 60000, 70000, 40000, 55000);
$kolom = array("mobil", "warna", "cc", "harga");

echo "<table border = '1'>";
echo "<tr><th>Mobil</th><th>Warna</th><th>CC</th><th>Harga</th></tr>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>$mobil[$i]</td><td>$warna[$i]</td>
    <td>$cc[$i]</td><td>\$$harga[$i]</td></tr>";
}
echo "</table>";
?>

</pre>
</body>
</html>