<?php

$input = trim(fgets(STDIN));
$cases = (int)$input;

$winningCombinations = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

for ($i = 0; $i < $cases; $i++) {
    if ($i > 0) {
        fgets(STDIN);
    }

    $boardState = '';

    for ($j = 0; $j < 3; $j++) {
        $boardState .= trim(fgets(STDIN));
    }

    $boardElements = str_split($boardState);
    $countX = substr_count($boardState, 'X');
    $countO = substr_count($boardState, 'O');

    $xWins = 0;
    $oWins = 0;

    foreach ($winningCombinations as $combination) {
        if ($boardElements[$combination[0]] === $boardElements[$combination[1]] &&
            $boardElements[$combination[1]] === $boardElements[$combination[2]] &&
            $boardElements[$combination[0]] !== '.') {
            if ($boardElements[$combination[0]] === 'X') {
                $xWins = 1;
            } elseif ($boardElements[$combination[0]] === 'O') {
                $oWins = 1;
            }
        }
    }

    if ($xWins && $oWins) {
        echo 'no' . "\n";
    } elseif ($xWins && $countX === $countO + 1) {
        echo 'yes' . "\n";
    } elseif ($oWins && $countX === $countO) {
        echo 'yes' . "\n";
    } elseif (!$xWins && !$oWins && ($countX === $countO || $countX === $countO + 1)) {
        echo 'yes' . "\n";
    } else {
        echo 'no' . "\n";
    }
}