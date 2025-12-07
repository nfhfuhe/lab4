<?php
function perfectNumber(array $numbers):array
{
    $result = [];
    foreach ($numbers as $number) {
        $sum = 0;
        for ($i = 1; $i < $number; $i += 1) {
            if ($number % $i === 0) {
                $sum += $i;
            }
        }
        if ($sum === $number) {
            $result[] = $number;
        }
    }
    return $result;
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 28];
$PerfectNumbers = perfectNumber($numbers);
echo "Идеальные числа : ";
foreach ($PerfectNumbers as $number) {
    echo  $number . " | ";
}
