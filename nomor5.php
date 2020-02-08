<?php
function fibo($column, $line)
{
  $bilangan_sekarang = 1;
  $bilangan_sebelumnya = 0;
  $bilangan_selanjutnya = 0;
  $jumlah_hitungan = ($column * $line);
  $i = 0;
  for ($i=0; $i < $jumlah_hitungan; $i++) {
    if ($i % $column == 0 && $i > 0) {
      echo "</br>";
    }
    echo $bilangan_sebelumnya.",";
    $bilangan_selanjutnya = $bilangan_sekarang + $bilangan_sebelumnya;
    $bilangan_sebelumnya = $bilangan_sekarang;
    $bilangan_sekarang = $bilangan_selanjutnya;
  }
}
?>
