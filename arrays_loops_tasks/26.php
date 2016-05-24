    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $arr = array();
    $Proizvedenie = 1;
    $arr_ne_parn = array ();
    for ($i=0; $i<10; $i++)
    {
        $arr[$i]=rand(1,100);
        if (($arr[$i]>0)&&($i%2==0))
        {
            $Proizvedenie *= $arr[$i];
        }
        if (($arr[$i]>0)&&($i%2!=0))
        {
            $arr_ne_parn[] = $arr[$i];
        }

    }
    var_dump($arr);
    echo '<br>'.$Proizvedenie.'<br>';
    var_dump($arr_ne_parn);

?>

