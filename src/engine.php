<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run() //Weclome function
{
    global $name;
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s! \n", $name);
}
function question($question)
{
    global $userAnswer;
    line("Question: %s", $question);
    $userAnswer = \cli\prompt('Your answer');
    return $userAnswer;
}
function check($trueAnswer)
{
    if ($GLOBALS['userAnswer'] == $trueAnswer) {
        line("Correct!");
        $GLOBALS['count']++;
    } else {
        line("'{$GLOBALS['userAnswer']}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
        line("Let's try again, %s!", $GLOBALS['name']);
        exit;
    }
}
function over()
{
    if ($GLOBALS['count'] == 4) {
         line("Congratulations, %s!", $GLOBALS['name']);
    }
}
