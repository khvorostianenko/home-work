    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $number = 44215875575;
    $numberStr = (string)$number;
    $isk = 5;
    $count = 0;
    for ($i=0; $i<strlen($numberStr); $i++)
    {
        if ($numberStr{$i} == $isk){
            $count++;
        }

    }
    echo 'Цифра '.$isk.' встретилось в числе '.$number.' '.$count.' раз!';
?>

