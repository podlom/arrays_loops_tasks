<?php
/*
Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
*/

$arr = [];

for ($i = 0; $i <= 10; $i++)
    {
        $arr[] = rand(0, 10);
    }


echo '<pre>';
print_r($arr);
echo '<pre>';

$min = min($arr);
$max = max($arr);

$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;

echo '<pre>';
print_r($arr);
echo '<pre>';