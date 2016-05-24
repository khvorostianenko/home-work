<meta charset="utf-8">
<?php
    echo 'a= '.($a = 25).'<br>';
    echo 'b= '.($b = 25).'<br>';
    if ($a>$b)
    {
        echo "Максимальное число из двух а ={$a}";
    }
    elseif ($a<$b)
    {
        echo "Максимальное число из двух b ={$b}";
    }
    else {
        echo "Числа a и b равны";
    }

?>
