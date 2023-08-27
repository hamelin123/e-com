

<?php

$game = 20;
for($i=1; $i <=$game; $i++){
 for ($j=$game; $j>=$i; $j--) {
  print("_");
 }
 for ($x=1; $x<$i ; $x++) {
  print("*");
 }
 for ($z=1; $z <=$i ; $z++) {
  print("*");
 }
 print('<br />');

}

?>