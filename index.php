<?php

//Задание #1

$name='Илья';
$age='29';

echo "Меня зовут: " . $name . ".";
echo "<br>";
echo "Мне: " . $age . " лет.";
echo "<br>";
echo "- “!|/’”\\";
echo "<br>";

//Задание #2

CONST pictures=80;
CONST flomaster=23;
CONST pencil=40;
CONST paint=pictures-flomaster-pencil;

//Задание #3

$age=29;

if ($age>=18 && $age<=65){
    echo "Вам еще работать и работать";
}
elseif ($age>65){
    echo "Вам пора на пенсию";
}
elseif ($age>=1 && $age<=17){
    echo "Вам ещё рано работать";
}
else{
    echo "Неизвестный возраст";
}