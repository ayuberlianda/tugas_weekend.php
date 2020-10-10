<?php

function kel_lingkaran($diameter){
  return 3.14*$diameter;
}

echo "Jari-jari sebuah ban mobil : 21 cm <br>";
echo "Ban mobil berputar sebanyak: 200 kali <br>";
echo "<b> Jarak tempuhnya adalah : ",200*kel_lingkaran(21*2)," cm </b>";

 ?>