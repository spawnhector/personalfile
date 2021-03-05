<?php
include 'includes/spawn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $person1 = new person();
    $person1->getcommunity("grant hill");
    echo $person1->community.'<br>';
    echo $person1->name.'<br>';
    echo $person1-> gender.'<br>';
    echo $person1->group.'<br>';
    echo $person1->year.'<br>';
    echo "The drinking age is ".person::$drinkage.'<br>';
    echo person::$learn.'<br>';

    if ($person1->name=="spawn"){
        echo "yes";
    }
    else{
        echo "no".'<br>';
    }
    ?>
</body>
</html>