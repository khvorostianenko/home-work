<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array (1, 6, 5, 19, 13, 0, 4);
    $Fl = 'Нет!';
    foreach ($arr as $e)
    {
        if (($e == 2)||($e == 3)||($e == 4)){
            $Fl = 'Есть!';
            break;
        }
    }
    echo $Fl;
?>