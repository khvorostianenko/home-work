<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    function monthes($i){
        $ms = 60*60*24*31;
        return gmdate('M', time()-$ms*$i);
    }

    $arr = array();
    for ($k=1;$k<=12;$k++){
        $arr[] = monthes($k);
    }

    $month = date('M');
    echo '<br>';
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