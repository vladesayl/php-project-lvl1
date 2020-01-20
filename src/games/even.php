<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brainEven() //Even function
{
    $random = 0;
    run();
    global $count;
    $count = 1;
    do {
        $trueAnswer = '';
        $question = rand(1, 100);
        if (($question % 2) == 0) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }
        question($question);
        check($trueAnswer);
    } while ($count <= 3);
    over();
    return 0;
}
