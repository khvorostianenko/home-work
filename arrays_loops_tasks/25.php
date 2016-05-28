    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array();
    for ($i=0; $i<10; $i++)
    {
        $arr[$i]=rand(1,100);
        if ($i==0)
        {
            $min_i = $i;
            $max_i = $i;
            continue;
        }
        if ($arr[$i]>$arr[$max_i])
        {
            $max_i = $i;
        }
        elseif ($arr[$i]<$arr[$min_i])
        {
            $min_i = $i;
        }
    }
    echo '<pre>';
    var_dump($arr);
    echo '<pre>';
    $bufer = $arr[$max_i];
    $arr[$max_i] = $arr[$min_i];
    $arr[$min_i] = $bufer;
    echo '<br>';
    var_dump($arr);
?>

