<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $types = array(1, 20, 15, 17, 24, 35);
    $result = 0;
    foreach ($types as $key){
        $result += $key;
    }
    echo $result;

?>