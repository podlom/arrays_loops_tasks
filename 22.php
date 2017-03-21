<?php
/*
Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/

for ($i = 1; $i <= 5; $i++)
{
    echo str_repeat('xx', $i), '<br>';
}