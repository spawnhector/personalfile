<?php 
// factorial
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
echo f1(5);
$array= array("sam", "kim", "monique",);
$coun= count($array);
for($i=0;$i<$coun;$i++){
    echo $array[$i];
    echo '<br>';
}
?>