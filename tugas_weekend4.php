<?php

function luas_tabung($jari,$tinggi){
  return 2*3.14*$jari*($jari+$tinggi);
}

echo "Jari-jari sebuah tabung : 14 cm <br>";
echo "Tinggi sebuah tabung    : 10 cm <br>";
echo "<b> Jadi luasnya adalah : ",luas_tabung(14,10)," cm<sup>2</sup> </b>";

?>