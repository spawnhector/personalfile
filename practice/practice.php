
<?php 
// Create void user-defined function which does not return value to main program.

$king=5;
$queen=10;
function none($king,$queen): void {
    $kg=$king+$queen;
    echo $kg;
}
none($king,$queen).'<br/>';
// finding cube root 
$x=125;
$x1=$x**(1/3);
echo "Cube root of $x is $x1".'<br/>';

// Function to swap two values and print result in function itself.
$value1=10;
$value2=20;
function swap($value1,$value2){
    $new=$value1;
    $value1=$value2;
    $value2=$new;
    echo $value1.'<br/>';
    echo $value2.'<br/>';
}
swap($value1,$value2);

// Print maximum value among 2 numbers in main program.

$given1=38;
$given2=59;
function getmax($given1,$given2){
    if($given1>$given2){
        echo "$given1 is the greatest of both numbers";
    }
    else{
        echo "$given2 is the greatest of both numbers";
    }
}
getmax($given1,$given2);
?>
