<?php

function vol_tabung($jari,$tinggi){
  return 3.14*pow($jari,2)*$tinggi;
}

echo "Jari-jari sebuah tabung : 10 cm <br>";
echo "Tinggi sebuah tabung    : 30 cm <br>";
echo "<b> Volume dari tabung tersebut adalah : ",vol_tabung(10,30)," cm<sup>3</sup> </b>";

?>