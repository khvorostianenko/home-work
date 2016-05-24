    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $number = $numb = 46347;
    $numb_length = strlen($number);
    $sum_chisel = 0;
    for ($i=1; $i<=$numb_length; $i++)
    {
        echo ($sum_chisel = $sum_chisel + $number%10);
        echo '<br>';
        echo ($number=floor($number/10));
        echo '<br>';
    }
    echo 'Сумма чисел числа '.$numb.' равна '.$sum_chisel;
?>

