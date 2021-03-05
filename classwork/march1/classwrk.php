<?php
// echo php version
echo "This is the answer to question 1".'<br>';
echo 'curren version '.phpversion().'<br>';
// multiple of number
function multiple($num){
    if($num%3==0 or $num%7==0){
        echo "True".'<br>';
    }
    else{
        echo "False".'<br>';
    }
}
echo '<br>';
echo "This is the answer to question 2".'<br>';
echo multiple(6).'<br>';
echo multiple(28).'<br>';
echo multiple(18).'<br>';
echo multiple(16).'<br>';
// Write a PHP program to check the largest number among three given integers

function largest($a,$b,$c){
    if($a>$b and $a>$c){
        echo $a;
    }
    elseif($b>$a and $b>$c){
        echo $b;
    }
    else{
        echo $c;
    }
}

echo "This is the answer to question 3".'<br>';
echo largest(1,2,3).'<br>';
echo largest(4,6,2).'<br>';
echo largest(9,3,5).'<br>';
echo '<br>';

// PHP code to check if a given temperature (t) should be in the range t<0 and t>100.

function temp($temp1,$temp2){
    if($temp1<0 && $temp2<100 || $temp2<0 && $temp1>100){
        echo "True";
    }
    else{
        echo "False";
    }
}
echo "This is the answer to question 4".'<br>';
echo temp(120,-1).'<br>';
echo temp(108,-1).'<br>';
echo temp(98,-1).'<br>';
echo temp(120,2).'<br>';
echo '<br>';

// PHP code to check two given integers whether either of them is in the range 100..200 inclusive.


function check($c,$d){
    $a=range(100,201);
    if(in_array($c,$a) and in_array($d,$a)){
        echo "True";
    }
    else{
        echo "False";
    }
}
echo "This is the answer to question 5".'<br>';
echo check(120,200).'<br>';
echo check(108,196).'<br>';
echo check(98,200).'<br>';
echo check(120,225).'<br>';
echo '<br>';

// PHP code to check whether three given integer values are in the range 20..50 inclusive. Return true if 1 or more of them are in the said range otherwise false

function check1($a,$b,$c){
    $d=range(20,50);
    if(in_array($a,$d) or in_array($b,$d) or in_array($c,$d)){
        echo "True";
    }
    else{
        echo "False";
    }
}
echo "This is the answer to question 6".'<br>';
echo check1(11,20,12).'<br>';
echo check1(30,30,17).'<br>';
echo check1(25,35,50).'<br>';
echo check1(15,12,8).'<br>';
echo '<br>';

// PHP code to create a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.
function f1($a)
{
    if($a<=0)
        return(1);
    elseif($a==0){
        return (-1);
    }
    else{
        return($a*f1($a-1));
    }
}
echo "This is the answer to question 7".'<br>';
echo f1(6).'<br>';
echo '<br>';
echo "This is the answer for question 1 Section 2".'<br>';
// 
$ad=array(
    2,3,-5,2.4,0,"AB"
);
foreach($ad as $i){
    if(is_numeric($i)){
        echo $i." is numeric".'<br>';
    }
    else{
        echo $i." is not numeric".'<br>';
    }
}
// 
echo "<br>";
function jackpot($funds){
    $luckynumber1= rand(20,30);
    $luckynumber2= rand(0,25);
    echo "Starting Balance".$funds.'<br>';
    echo "<br>";
    if($luckynumber1==25){
        $newbalance=$funds*2;
        echo " Ms. Nano and Mr.Kary".'<br>';
        echo "YOU WON!!! LuckNumber is ".$luckynumber1.'<br>';
        echo "New Balance is ".$newbalance.'<br>';
    }
    else{
        $newbalance1=$funds/2;
        echo " Ms. Nano and Mr.Kary".'<br>';
        echo " YOU LOSE!!! LuckyNumber is ".$luckynumber1.'<br>';
        echo "New Balance is ".$newbalance1.'<br>';
    }
    if($luckynumber2==15){
        $newbalance=$funds*2;
        echo "<br>";
        echo " Ms. Benito and Mr.Benny".'<br>';
        echo "YOU WON!!! LuckNumber is ".$luckynumber2.'<br>';
        echo "New Balance is ".$newbalance.'<br>';
    }
    else{
        $newbalance1=$funds/2;
        echo "<br>";
        echo " Ms. Benito and Mr.Benny".'<br>';
        echo " YOU LOSE!!! LuckyNumber is ".$luckynumber2.'<br>';
        echo "New Balance is ".$newbalance1.'<br>';
    }
}
echo "This is the answer for question 2 Section 2".'<br>';
echo '<br>';
echo "LuckyGame".'<br>';
echo jackpot(100);
echo '<br>';
// Analyze the following inputs and corresponding output , use a suitable function to write a PHP program:

// 
echo "This is the answer for question 4 Section 2".'<br>';
echo sqrt(0);
echo round(sqrt(abs(0.01+1)));
echo round(sqrt(9.85));
echo sqrt(abs(-64));
echo round(sqrt(abs(9.21))).'<br>';
echo '<br>';

// Write PHP code to find the area of a circle (Use a function to find the value pi) 
       
function findArea( $r){  
    return pi() * pow($r, 2); 
}  
echo "This is the answer for question 5 Section 2".'<br>';
echo("Area is "); 
echo(findArea(32)).'<br>';
echo '<br>'; 

// Write PHP code for the following scenario (Use appropriate function):
// A system is developed in the city of Mumbai that allows people to enter the city only when they
// give input as three words. If not they are not permitted.
function permit($words){
    if(str_word_count($words)==3){
        echo "Welcome To Mumbai";
        echo '<br>';
    }
    else{
        echo "Wrong! you are not permitted";
        echo '<br>';
    }
}
echo "This is the answer for question 6 Section 2".'<br>';
echo permit("world of LOVE TIME");
echo '<br>';

// Debug the following code:
echo "This is the answer for question 7 Section 2".'<br>';
$strExample="Hi Jamaica!";
echo str_replace("Hi","Hello",$strExample).'<br>';
echo '<br>';

// Predict the output for the following code:
    echo "This is the answer for question 8 Section 2".'<br>';
echo strlen("").'<br>';
echo strlen(" ").'<br>';
echo strlen("  ").'<br>';

// 

function fullcap($wrd){
    echo strtoupper($wrd);
}
echo fullcap("I THERE ").'<br>';

$ia="I ";
$ib="Love ";
$ic="Coding ";
$id="Alot ";
$ie="What about ";
$if="You";

echo $ia.$ib.$ic.$id.$ie.$if;
