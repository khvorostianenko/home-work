<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array(2, 5, 9, 15, 0, 4);
    foreach ($arr as $key){
        if (($key>3)&&($key<10)){
            echo $key.'<br>';
        }
    }
?>