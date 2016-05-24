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
        }
        if ($arr[$i]>0)
        {
            $max_i = $i;
        }
        else
        {
            $min_i = $i;
        }
    }
    var_dump($arr);
    $bufer = $arr[$max_i];
    $arr[$max_i] = $arr[$min_i];
    $arr[$min_i] = $bufer;
    echo '<br>';
    var_dump($arr);
?>

