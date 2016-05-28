    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $number = $numb = 46347;
    $number = (string)$number;
    $numb_length = strlen($number);
    $sum_chisel = 0;
    for ($i=1; $i<=$numb_length; $i++)
    {
        $sum_chisel += $number{$i-1};
    }
    echo 'Сумма чисел числа '.$numb.' равна '.$sum_chisel;
?>

