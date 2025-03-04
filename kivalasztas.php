<?php
$tomb=array(8, 2, 5, 3, 7);
echo "<br>";
//Kiválasztás abban különbözik a keresés tételtől, hogy biztos, hogy benne van a (keresett <- kiválasztandó) elem
$KivalasztottElem=5;
print_r($tomb);
$i=0;
while($tomb[$i] != $KivalasztottElem)
{
    echo "<br>";
    $i++;
}
print("A kiválasztott elem: ". $KivalasztottElem. " a következő indexben van: ". $i. "  vagyis a(z): ". ($i+1). ". elem");



