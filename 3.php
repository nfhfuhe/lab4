<?php
function bestString($text): string
{
    $strings = explode(" ",$text);
    $LastCountString = 0;
    foreach ($strings as $string) {
        $NewCountString = 1;
        foreach ($strings as $string2) {
            if ($string = $string2) {
                $NewCountString += 1;
            }
        }
        if ($NewCountString > $LastCountString) {
            $BestString = $string;
            $LastCountString = $NewCountString;
        }
    }
    return $BestString;
}
$text = "privet robot kak tvoi dela? y mena vot kruto y mena ne ochen otvetil robot";
$BestString = bestString($text);
echo "самое распратранённое слово : " . $BestString;
