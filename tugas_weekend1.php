<?php
function luas_kubus($rusuk){
  return 6*pow($rusuk,2);
}


echo "<b> Luas permukaan kubus dengan panjang rusuk 4 cm  : ",luas_kubus(4)," cm<sup>2</sup></b> <br>";
echo "<b> Luas permukaan kubus dengan panjang rusuk 7 cm  : ",luas_kubus(7)," cm<sup>2</sup></b> <br>";
echo "<b> Luas permukaan kubus dengan panjang rusuk 10 cm : ",luas_kubus(10)," cm<sup>2</sup></b> <br>";
echo "<b> Luas permukaan kubus dengan panjang rusuk 12 cm : ",luas_kubus(12)," cm<sup>2</sup></b>";


?>