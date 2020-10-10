<?php

function luas_lingkaran($jari){
  return 3.14*pow($jari,2);
}

function kel_lingkaran($diameter){
  return 3.14*$diameter;
}

echo "Diameter sebuah roda sepeda : 14 cm <br>";
echo "<b> Luasnya adalah : ",luas_lingkaran(14/2)," cm<sup>2</sup></b> <br>";
echo "<b> Kelilingnya adalah : ",kel_lingkaran(14)," cm<sup>2</sup></b> ";

?>