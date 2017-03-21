<?php
/*
Вывести таблицу умножения с помощью двух циклов for.
*/

$rows = 10;
$cols = 10;

echo '<table border="1">';

for ($tr = 1; $tr <= $rows; $tr++)
    {
        echo "<tr>";

        for ($td = 1; $td <= $cols; $td++)
            {
                echo '<td>' , $tr * $td, '</td>';
            }

        echo '</tr>';

    }
echo '</table>';