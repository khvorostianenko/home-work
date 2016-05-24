<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
    foreach ($arr as $key=>$value){
        if (($key == 2)||($key == 8))
            echo $value.' ';
        else
            echo $value.', ';
    }
?>