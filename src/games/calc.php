<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brainCalc() //Calculation function
{
    run();
    global $count ;
    $count = 1;
    do {
        $input = array("-", "+", "*");
        $rand_keys = array_rand($input, 1);
        $operator = $input[$rand_keys];
        $trueAnswer = 0;
        $arg1 = rand(1, 100);
        $arg2 = rand(1, 100);
        eval('$trueAnswer = ' . $arg1 . $operator . $arg2 . ';');
        $question = $arg1 . $operator . $arg2;
        question($question);
        check($trueAnswer);
    } while ($count <= 3);
    over();
    return 0;
}
