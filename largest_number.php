<?php
$num1=4;
$num2=5;
$num3=6;
if($num1>$num2){
    if($num1>$num3){
        printf("The largest value %d",$num1);
    }
    else{
        printf("The largest value %d",$num3);
    }
}
else{
    if($num2>$num3){
        printf("The largest value %d",$num2);
    }
    else{
        printf("The largest value %d",$num3);
    }
}
?>