<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array();
    $ru = array();
    foreach ($arr as $key=>$value){
        $en[]=$key;
        $ru[]=$value;
    }
    var_dump($en);
    echo '<br>';
    var_dump($ru);
?>