<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $numbers = [1,2,3,4,5,6,7,8,9];
    foreach ($numbers as $i){
        foreach ($numbers as $key=>$j){
            echo $i.' * '.$j.' = '.$i*$j.'<br>';
        }
    }

?>