    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    $rows = 9;
    $cols = 9;
    for ($i=0; $i<=$rows; $i++)
    {
        if($i==0)
        {
            echo '&nbsp&nbsp&nbsp';
        }
        else
        {
            echo $i.' ';
        }

        for ($j=1; $j<=$cols; $j++)
        {
            if ($i==0) {
                echo $j.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            } else {
                echo $i*$j.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            }
        }
        echo '<br>';
    }

?>

