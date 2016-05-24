<meta charset="utf-8">
<?php
    $name = 'Michael';
    $age = 'm';
    if ((18<=$age)&&($age<=59)){
    echo "Вам еще работать и работать.";
    }
    elseif ($age>59){
        echo "Вам пора на пенсию.";
    }
    elseif (($age>0)&&($age<=17)) {
        echo "Вам еще рано работать.";
    }
    else{
        echo "Неизвестный возраст";
    }
?>
