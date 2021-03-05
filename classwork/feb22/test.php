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
    function new_fun($num1,$num2,$num3){
        if($num1 >= $num2 && $num1 >= $num3){
          echo "the highest number is $num1".'<br/>';
        }
        elseif($num2 >= $num1 && $num2 >= $num3){
            echo "the highest number is $num2".'<br/>';
        }
        else{
            echo "the highest number is $num3".'<br/>';
        }
    }
    function title(&$runway){
        $runway=$runway*3;
        return $runway;
    }
    $val=10;
    new_fun(60,300,50078);
    echo title($val).'<br/>';
    $variable = 'Jamaica';
    $literally = "My $variable is a beautiful country";
    print($literally);
    print "<br/>";
    $literally = "My $variable is lovely!";
    print($literally);
    ?>
</body>
</html>