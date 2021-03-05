<?php
// Write a PHP program to compute the sum of the two given integer values. If the two values are the
// same, then returns triple their sum

function check($a,$b){
    $add1=$a+$b;
    if ($a==$b){
        $add2=$add1*3;
        echo $add2.'<br>';
    }
    else{
        echo $add1.'<br>';
    }
}
echo "This is Answer for Question 1".'<br>';
echo check(2,3);
echo check(6,7);
echo check(4,4);

// Write a PHP program to get the absolute difference between n and 45. If n is greater than 45 return
//triple the absolute difference.

function diff($n){
    $diffe=$n-45;
    if($n>45){
        $multy=$diffe*3;
        return $multy.'<br>';
    }
    else{
        $noteq=45-$n;
        return $noteq.'<br>';
    }
}
echo '<br>';
echo "This is the answer for Question 2".'<br>';
echo diff(50);
echo diff(40);
echo diff(53);
echo diff(45);

//Write a PHP program to check two given integers, and return true if one of them is 50 or if their sum is
//50

function checkgiv($given1,$given2){
    $sum=$given1+$given2;
    if($given1==50 or $given2==50 or $sum==50){
        return "True".'<br>';
    }
    else{
        return "False".'<br>';
    }
}
echo '<br>';
echo "This is the Answer for Question 3".'<br>';
echo checkgiv(50,0);
echo checkgiv(25,25);
echo checkgiv(27,12);
echo checkgiv(51,0);

// Php code to check whether the given day is holiday or not

function holiday($day){
    $months=array(
        "jan"=> array(1)
    );
    $holidays=array(
        "jan"=> array("New Years Day")
    );
    if($day==$months["jan"][0]){ 
        echo "The given day is a holiday on January $day, This holiday is ".$holidays["jan"][0].'<br>';
    }
    else{
        echo "The given day is not a holiday in January".'<br>';
    }
}
echo '<br>';
echo "This is the Answer for Question 4".'<br>';
echo holiday(1);
// Function to check whether the given year is leap year or not

function leap($year){
    if($year%4==0 or $year%100==0 or $year%400==0){
        echo "year $year is a leap year".'<br>';
    }
    else{
        echo "year $year year is not a leap year".'<br>';
    }
}
echo '<br>';
echo "This is the Answer for Question 5".'<br>';
echo leap(2024);

// Write php code to print a string “Welcome to Php” without semicolon
?>
<?php if(true): ?>
    <p>This is the Answer for Question 6</p>
    <p>Welcome To PHP</p>
<?php endif ?>
<?php

// Function to swap two values using call-by reference
$exam1=10;
$exam2=29;
function swap1(&$exam3,&$exam4){
    $swapx=$exam3;
    $exam3=$exam4;
    $exam4=$swapx;
    echo $exam3." Was ".$exam4.'<br>';
    echo $exam4." Is now ".$exam3.'<br>';
}
echo "This is the Answer for Question 7".'<br>';
echo swap1($exam1,$exam2);

// Find largest among three numbers using function.

function largest($a,$b,$c){
    if($a>$b && $a>$c){
        return "$a is the largest of the three numbers".'<br>';
    }
    elseif($b>$a && $b>$c){
        return "$b is the largest of the three numbers".'<br>';
    }
    else{
        return "$c is the largest of the three numbers".'<br>';
    }
}
echo '<br>';
echo "This is the Answer for Question 8".'<br>';
echo largest(10,20,3);

// Write a function to print table of numbers for number 5 (i.e., multiplication table for number 5

function multf($ac){
    $coun=1;
    while($coun<13){
        $cung=($coun++);
        $muly= $ac*$cung.'<br>';
    echo "$ac times ".$cung." is ".$muly;
    }
}
echo '<br>';
echo "This is the Answer for Question 9".'<br>';
echo multf(5);

// Create void user-defined function which does not return value to main program.


function none($king,$queen): void {
    $kg=$king+$queen;
    echo $kg.'<br>';
}
echo '<br>';
echo "This is the Answer for Question 10".'<br>';
none(10,20).'<br/>';

// Function to swap two values and print result in function itself.

function swap2($exam1,$exam2){
    $swapx=$exam1;
    $exam1=$exam2;
    $exam2=$swapx;
    echo $exam1." Was ".$exam2.'<br>';
    echo $exam2." Is now ".$exam1.'<br>';
}
echo '<br>';
echo "This is the Answer for Question 11".'<br>';
echo swap2(34,52);

// Print 10 numbers without for loop but using function

function noloop($sa){
    while($sa<11){
        $ca=($sa++);
        echo $ca.'<br>';
    }
}
echo '<br>';
echo "This is the Answer for Question 12".'<br>';
echo noloop(1);
?>