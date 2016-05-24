<meta charset="utf-8">
<?php
    echo 'a= '.($a = 5).'<br>';
    echo 'b= '.($b = 0).'<br>';
    echo 'operator '.($operator = '%').'<br>';
    switch ($operator){
        case '+':
            echo 'a+b='.($a+$b);
            break;
        case '-':
            echo 'a-b='.($a-$b);
            break;
        case '/':
            if ($b == 0){
                echo "Warning: на 0 делить нельзя!!!";
            }
            else {
                echo 'a/b='.$a/$b;
            }
            break;
        case '*':
            echo 'a*b='.$a*$b;
            break;
        case '%':
            echo (($b == 0)?('На 0 делить нельзя'):('остаток от деления '.$a.' на '.$b.' = '.$a%$b));
            break;
        default:
            echo 'Некорректный оператор';
    }
?>
