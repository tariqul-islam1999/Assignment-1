<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if ( $num1 > $num2 && $num1 > $num3 ) {
    echo "num1 is maximum" . $num1;
}

else if ( $num2 > $num1 && $num2 > $num3 ) {
    echo "num2 is maximum" . $num2;
}

else {
    echo "num3 is maximum". $num3;
}