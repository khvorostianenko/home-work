    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    function days($i){
        $ms = 60*60*24;
        return gmdate('D', time()+$ms*($i));
    }

    $arr = array();
    for ($k=1;$k<=7;$k++){
        $arr[] = days($k);
    }

    $day = date('D');
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