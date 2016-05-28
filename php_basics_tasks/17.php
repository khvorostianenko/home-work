<meta charset="utf-8">
<?php
    echo 'a= '.((string)$a = '78').'<br>';
    echo 'b= '.((int)$b = 78).'<br>';
    echo 'a и b '.(($a === $b)? ('равны'):('не равны'));
?>
