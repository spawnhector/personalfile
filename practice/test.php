<?php
$x="this";
$y="also";
echo $x.'<br>';
echo $y.'<br>';
$x.=$y;
echo $x.'<br>';
echo $y.'<br>';

$y=0;

$x= (--$y xor --$y);
echo $x.'<br>';
var_dump ($x);

$ys=10;
echo $ys++;
?>