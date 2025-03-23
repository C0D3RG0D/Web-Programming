<?php
// ------------------------------- Task 10 -------------------------------

function SumDigits($num)
{
    $result = 0;
    while($num > 0)
    {
        $result += $num % 10;
        $num = floor($num / 10);
    }
    return $result;
}

function IsMoreThanTen($a, $b)
{
    return $a + $b > 10;
}

function IsEqual($a, $b)
{
    return $a == $b;
}

$test = 0;
echo $test == 0 ? "верно \n" : "\n";


// ------------------------------- Task 10 -------------------------------

$age = 99;
if ($age < 10) 
{
    echo "Число меньше 10 \n";
}
elseif ($age > 99)
{
    echo "Число больше 99 \n";
}
else
{
    $sum_of_digits = SumDigits($age);
    if($sum_of_digits <= 9)
    {
        echo "Сумма цифр однозначна \n";
    }
    else
    {
        echo "Сумма цифр двузначна \n";
    }
}


// ------------------------------- Task 10 -------------------------------

$arr = [1,2,3];
if(count($arr) == 3)
{
    $s = 0;
    foreach($arr as $k => $v)
    {
        $s += $v;
    }
    echo "Кол-во элементов равно 3 и их сумма равна $s \n";
}