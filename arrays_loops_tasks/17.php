<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array ('явварь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь');
    $month = 'май';
    foreach ($arr as $key){
        if ($key == $month){
            echo '<b>'.$key.'</b><br>';
        }
        else
        {
            echo $key.'<br>';
        }
    }
?>