<?php
/*
Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
*/

$arr =
    [
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        'Воскресенье'
    ];

foreach ($arr as $value)
    {
        if ($value == 'Суббота' || $value == 'Воскресенье')
            echo "<b>$value</b><br>";
        else
            echo "$value<br>";
    }