<?php
$tombBe=array("S", "Z", "I", "G", "M", "A");
$tombKi=array("", "", "", "", "", "");

$Betu="A";
$indexMax=count($tombBe)-1; //Elemszám -1
for ($i=0; $i <= $indexMax; $i++)
{
    $tombKi[$i]=$tombBe[$i].$Betu;
    $tombKi[$i]=$tombKi[$i].$tombKi[$i];
}
    
print_r($tombBe);
echo "<br>";
print_r($tombKi);
echo "<br>";
