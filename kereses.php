<?php
//Egyszerű tömb feltőltése
$tomb=array (8, 2, 5, 3, 7);
print_r($tomb);
echo "<br>";
$indexMax=count($tomb)-1;
$Elemszam=count($tomb);
print($indexMax);
echo "<br>";
print($Elemszam);
$KeresettElem=5;
echo "<br>";
$i=0;
while($i<($Elemszam) && ($tomb[$i] != $KeresettElem)) // Addig lépegetünk, amíg meg nem megtaláljuk
{
    $i++;   
}

if ($i < $Elemszam)  
{
    print("Elem megtalálva \n");
    echo "<br>";
    print("Indexe: ". $i);
}
else
{
    print("Nem található meg a: ". $KeresettElem. "keresett szám");
}


