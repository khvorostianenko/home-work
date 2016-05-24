<meta charset="utf-8">
<?php
    $name = 'Michael';
    $age = 16;
    if ((18<=$age)&&($age<=59)){
    echo "Вам еще работать и работать.";
    }
    elseif ($age>59){
        echo "Вам пора на пенсию.";
    }
    else {
        echo "Вам еще рано работать.";
    }
?>