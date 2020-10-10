<?php

function luas_lingkaran($jari){
  return 3.14*pow($jari,2);
}

echo "Jari-jari sebuah lingkaran : 14 cm <br>";
echo "<b> Luasnya adalah : ",luas_lingkaran(14)," cm<sup>2</sup> <b> ";

?>