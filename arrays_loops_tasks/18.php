    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array ('понедельник','вторник','среда','четверг','пятница','суббота','воскресенье');
    foreach ($arr as $key=>$value){
        if (($key == 5)||($key == 6)){
            echo '<b>'.$value.'</b><br>';
        }
        else
        {
            echo $value.'<br>';
        }
    }
?>