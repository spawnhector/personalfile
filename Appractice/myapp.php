<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myapp</title>
</head>
<body>
    <?php
    $name='sam';
    $state='hi my name is ';
    echo $state,$name;

    $get=10;
    $take=5;
    $give=5;

    function taken($get,$take,$give,$name,$state){
        if($get-$take==$give && $take-$give==$get){
            echo 'this is a test';
        }
        if($name=='sam'){
            echo "i'm getting there";
        }
    }
    
    ?>
    <p></p>
    <?php
    echo 'this is a test';
    ?>
</body>

</html>