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

//Задание #4

$day=3;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}

//Задание #5

$bmv=[
    'model'=>'X5',
    'speed'=>120,
    'doors'=>5,
    'year'=>'2015',
];
$toyota=[
    'model'=>'chaser',
    'speed'=>320,
    'doors'=>5,
    'year'=>'2000',
];
$opel=[
    'model'=>'vectra',
    'speed'=>100,
    'doors'=>5,
    'year'=>'2012',
];
$cars=[
    'bmv'=>$bmv,
    'toyota'=>$toyota,
    'opel'=>$opel,
];

foreach($cars as $key=>$value) {
    echo $key;
    echo "<br>";
    echo $value['model'] . " ";
    echo $value['speed'] . " ";
    echo $value['doors'] . " ";
    echo $value['year'];
    echo "<br>";
}

echo "<pre>";
var_dump($cars);