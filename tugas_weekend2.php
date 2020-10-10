<?php

function rusuk_kubus($luas){
  return sqrt($luas/6);
}

echo "Luas permukaan kubus : 3.750 cm<sup>2</sup> <br>";
echo "<b> Jadi panjang sisi kotak kayu tersebut adalah akar dari  ",rusuk_kubus(3750)," cm</b>";

?>
