<?php
$a=1;
$b=4;
$c=5;
$d=$a+$b==$c;
echo $d.'<br>';
$a1=1;
$b1=5;
$a2=$a1 + ++$b1;
echo $a2.'<br>';

echo "This the answer to question 1".'<br>';
$add=10;
echo ++$add.'<br>';
echo $add++.'<br>';
echo $add.'<br>';
echo ++$add.'<br>';
echo '<br>';
echo "This the answer to question 2".'<br>';
$a1=12;
--$a1;
echo $a1++.'<br>';
echo '<br>';
echo "This the answer to question 3".'<br>';
$a2="test ";
$a3="this ";
$a4="also ";
$a2.=$a3.=$a4;
echo $a2.'<br>';
echo $a3.'<br>';
echo '<br>';
echo "This the answer to question 4".'<br>';
$b1=1;
$b2=2;
if (++$b1==$b2++){
    echo "True ",$b2,$b1.'<br>';
}
echo '<br>';
echo "This the answer to question 5".'<br>';
$c1=2;
$c2=4;
$c1*=$c2/=$c1;
echo $c1,$c2.'<br>';
echo '<br>';
echo "This the answer to question 6".'<br>';
$b3=2;
if($b3-- == ++$b3){
    echo $b3.'<br>';
}
echo '<br>';
echo "This the answer to question 7".'<br>';
$b4=2;
if(2**$b4==4){
    echo $b4.'<br>';
}
echo '<br>';
echo "This the answer to question 8".'<br>';
$y8=2;
if(--$y8==2||$y8 xor --$y8){
    echo $y8.'<br>';
}
echo '<br>';
echo "This the answer to question 9".'<br>';
$y1 = 2;
if ($y1 <> ($y1 != $y1++))
{
echo $y1;
}
echo '<br>';
echo "This the answer to question 10".'<br>';

$auth = 1;
$status = 1;
if ($result = (($auth == 1)&&($status != 0)))
{
print "result is $result<br/>";
}
echo '<br>';
echo "This the answer to question 11".'<br>';
$x = 300;
$y = "300";
var_dump($x === $y);
echo '<br>';
echo "This the answer to question 12".'<br>';
$x = 300;
$y = "300";
var_dump($x == $y);
echo '<br>';
echo "This the answer to question 13".'<br>';
$x = 150;
$y = "150";
var_dump($x != $y);
echo '<br>';
echo "This the answer to question 14".'<br>';
$x = 150;
$y = "150";
var_dump($x !== $y);
echo '<br>';
echo "This the answer to question 15".'<br>';
$x = 300;
$y = 100;
var_dump($x>$y);
echo '<br>';
echo "This the answer to question 16".'<br>';
echo (5 * 9 / 3 + 9).'<br>';
echo '<br>';
echo "This the answer to question 17".'<br>';
$a = 1;
$b = 3;
$d = $a++ + ++$b;
echo $d.'<br>';
echo '<br>';
echo "This the answer to question 18".'<br>';
$a = 5;
$b = -7;
$c =0;
$d = ++$a && ++$b || ++$c;
echo $d.'<br>';
echo $a.'<br>';
echo '<br>';
echo "This the answer to question 19".'<br>';
$b = 1;
$c = 4;
$a = 5;
$d = $b + $c == $a;
echo $d.'<br>';
echo '<br>';
echo "This the answer to question 20".'<br>';
$var2=5;
$var1 = 1 + ++$var2;
echo $var1;
?>