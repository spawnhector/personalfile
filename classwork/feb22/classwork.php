<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=3; // One side.
    $b=4; // One side.
    $h=sqrt(pow($a,2)+pow($b,2));
    echo "the square root is $h". '<br>';


    #(F - 32) * 5/9 = °C
    $f=20;
    $cen =($f - 32) * 5/9;
    echo $cen.'<br/>';

    $p=4000;
    $t=4;
    $r=6;
    $si=($p*$t*$r)/100;
    echo 'the simple interest is '.$si.'<br/>';

    #echo $add.'<br/>';
    $roun=array("hi","love","you");
    #$roun[3]->append(array("kim"));
    array_push($roun, "kim");
    array_pop($roun);
    print_r($roun); 
    $num=3.14159;
    $num1=49.2;
    $add=$num+$num1;
    #echo $list.'<br/>';
    echo 'The given numbers added is'.$add.'<br/>';
    echo 'rounded to the nearest decimal is '.round($add,3).'<br/>';
    
    $list=array();
    array_push($list, $add);
    print_r($list);
    foreach($list as $i){
        if($i=="."){
            echo 'yes';
        }
        else{
            echo 'no';
        }
    }
    $variable = 'Jamaica';
        $literally = "My $variable is a beautiful country!";
        print($literally);
        print '<br>';
            $literally =  "My $variable is lovely!";
        print($literally).'<br/>'; 

    $add1=10;
    $add2=2.05;
    function multiply($add1,$add2){
        $sum=$add1*$add2;
        $sum=round($sum,1);
        return $sum;
    }
    echo multiply($add1,$add2).'<br/>';

    $numa=18;
    $numb=45;
    function add($numa,$numb){
        $add1=$numa+$numb;
        return $add1;
    }
    echo add($numa,$numb).'<br/>';
    $test='hi there i love coding';
    $test1=strpbrk($test,'c');
    echo $test1;
    ?>
</body>
</html>