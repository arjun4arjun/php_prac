<?php
echo "Which operator do you want to use? \n 1) (+) addition \n 2) (-) Subtract \n 3) (*) Multiply \n 4) (/) Divide \n 5) (%) Remainder \n";

$num=(string)readline('Type the operator: ');
$a=(int)readline('type first value: ');
$b=(int)readline("type second value: ");

switch ($num){
    case '+':
        $c= $a + $b;
        echo "$c";
        break;
    case '%':
        $c= $a % $b;
        echo "$c";
        break;
    case '/':
        $c= $a / $b;
        echo "$c";
        break;
    case '-':
        $c= $a - $b;
        echo "$c";
        break;
    case '*':
        $c= $a * $b;
        echo "$c";
        break;
    default: echo "Error";
}
?>
