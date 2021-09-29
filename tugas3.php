<?php
  // Nomor 1
  // Jarak antara kota A – Z 360 km. Jika ditempuh dengan sepeda motor berkecepatan 90 km/jam maka lama perjalanan…

  $jarak_kota = 360;
  $kecepatan = 90;
  $waktu_tempuh = ($jarak_kota / $kecepatan) * 60;

  echo "Jarak kota A - Z = $jarak_kota Km<br>";
  echo "Keceptan motor = 90<br>";
  echo "Waktu tempuh = ?<br>";
  echo "Jawaban : $waktu_tempuh Menit<br>";

  // Nomor 2
  // Defan menabung di Bank Rp. 150.000. Bunga 1 tahunnya adalah 12,5 %. Maka jumlah tabungan Defan setelah 1 tahun adalah…

  $saldo = 150000;
  $bunga_setahun = 0.125;
  echo "<br>Tabungan Awal = Rp $saldo<br>";

  $saldo = ($saldo * $bunga_setahun) + $saldo;

  echo "Bunga Setahun = $bunga_setahun%<br>";
  echo "Total Tabungan Setahun = ?<br>";
  echo "Jawaban : Rp $saldo<br>";
?>