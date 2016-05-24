<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $n = 1000;
    $num = 0;
    while ($n>=50){
        $n/=2;
        $num++;
    }
    echo 'После '.$num.' итераций число n = '.$n;
?>