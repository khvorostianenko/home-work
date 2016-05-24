    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array ('понедельник','вторник','среда','четверг','пятница','суббота','воскресенье');
    $day = 'понедельник';
    foreach ($arr as $key){
        if ($key == $day)
        {
            echo '<i>'.$key.'</i><br>';
        }
        else
        {
            echo $key.'<br>';
        }

    }
?>