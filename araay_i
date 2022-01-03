<?php
$numbers = [1,3,4,52,3,2,5];
$count = count($numbers);
$first_index = $numbers[0];
echo $count;
echo "<br>";
echo $first_index;
echo "<br>";
var_dump($numbers);
echo "<br>";
// longtoip
for($i = 0; $i<$count; $i++){
  echo $numbers[$i];
}
echo "<br>";
for($i = $count -1; $i >= 0; $i--  ){
  echo $numbers[$i] . "<br>";
}
echo "
      <h2> Array Update Using </h2>
      <ul>
        <li> Array_shift() </li>
        <li> array_unsift() </li>
        <li> array_pop() </li>
        <li> array_push() </li>
      <ul>
";
$flowers = array(
  'lotus', 'Oleander', "tube rose", 'night queen','water lilly'
);
 $count = count($flowers);
 echo " <h2> Original Array </h2>";
for($i = 0; $i<$count; $i++){
  echo $flowers[$i] . "<br>";
}
$flowers1 = array_pop($flowers);
echo " <h2> Array_pop()</h2>";
$count = count($flowers );
for($i = 0; $i<$count; $i++){
  echo $flowers[$i] . "<br>";
}

$flowers1 = array_shift($flowers);

echo " <h2> Array_shift()</h2>";
$count = count($flowers );
for($i = 0; $i<$count; $i++){
  echo $flowers[$i] . "<br>";
}

echo " <h2> Add items in array array_push </h2>";
$flowers[] = "Bastard teak";
array_push($flowers, 'tulip');
$count = count($flowers );
for($i = 0; $i<$count; $i++){
  echo $flowers[$i] . "<br>";
}
echo " <h2> Add items in array array_unshift() </h2>";

array_unshift($flowers, 'gardenia');
$count = count($flowers );
for($i = 0; $i<$count; $i++){
  echo $flowers[$i] . "<br>";
}
?>
