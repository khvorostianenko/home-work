<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $types = array(26, 17, 136, 12, 79, 15);
    $result = 0;
    foreach ($types as $key){
        $result += pow($key, 2);
    }
    echo $result;

?>