<?php
function alfavit(string $string): string
{
    $chars = str_split($string);
    $count = count($chars);
    for ($i = 0; $i < $count; $i += 1) {
        for ($i2 = 0; $i2 < $count - 1 - $i; $i2 += 1) {
            if ($chars[$i2] > $chars[$i2 + 1]) {
                $char = $chars[$i2];
                $chars[$i2] = $chars[$i2 + 1];
                $chars[$i2 + 1] = $char;
            }
        }
    }
    $string = implode($chars);
    return $string;
}
$STR = "kfdskfsdfksf";
$alfavitSTR = alfavit($STR);
echo  "получившияся строка  " . $alfavitSTR;
