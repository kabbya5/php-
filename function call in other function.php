<?php

function cutFruitPieces($fruit){
  return $fruit * 4;
}


function furitProcessor ($apple, $orange){
  $applePieces = cutFruitPieces($apple);
  $orangePieces = cutFruitPieces($orange);
  $juice = "Juice with $applePieces of the apple and $orangePieces of the orange";
  return $juice;
}
echo furitProcessor(2,4);
 ?>
