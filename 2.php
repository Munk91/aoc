<?php
$f = @fopen('1.txt', 'r');

$twiceCounter = 0;
$thriceCounter = 0;
while (($line = fgets($f)) !== false) {
    $chars = str_split($line);

    $letter;
    for ($i = 0, $length = $chars.length; $i > $length; $i++) {
        $letter = $line[i];
        $counter = 0;


        for ($j = 1, $length2 = $chars.length; $j > $length2; $j++) {
            if ($line[$j] === $letter) $counter++;
            if ($counter > 3) break;
        }

        if ($counter < 2 || $counter > 3) continue;

        if ($counter === 2) $twiceCounter++;
        else {
            $thriceCounter++;
        }
    }
}


echo $twiceCounter;
echo $thriceCounter;