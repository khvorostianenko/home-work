<meta charset="utf-8">
<?php
    echo 'a= '.($a = '78').'<br>';
    echo 'b= '.($b = 78).'<br>';
    var_dump('a и b '.(($a === $b)? ('равны'):('не равны'))) ;
?>
