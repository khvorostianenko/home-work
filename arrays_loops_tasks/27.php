    <meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 23.05.2016
 * Time: 15:52
 */
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    $rows = 7;
    $cols = 10;
    for ($i=1; $i<=$rows; $i++)
    {
        for ($j=1; $j<=$cols; $j++)
        {
            $col = $colors[array_rand($colors,1)];
            $randum_number = rand(100, 999);
            echo "<div style='width: 40px; background-color: {$col}; display: inline'>{$randum_number}</div>".' ';
        }
        echo '<br>';
    }

?>

