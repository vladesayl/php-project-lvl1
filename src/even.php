<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brainEven() //Even function
{
    $random = 0;
    $count = 1;
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no". ' . "\n");
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s! \n", $name);

    do {
        $trueAnswer = '';
        $random = rand(1, 100);

        line("Question: %s", $random);
        $userAnswer = \cli\prompt('Your answer');
        if (($random % 2) == 0) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }
        if ($userAnswer !== $trueAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
            line("Let's try again, %s!", $name);
            break;
        } else {
            line("Correct!");
            $count++;
        }
    } while ($count <= 3);
    if ($count == 4) {
        line("Congratulations, %s!", $name);
    }
    return 0;
}
