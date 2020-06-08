<!-- In this project, you’ll create a number guessing game. 
Your program will generate a random number between 1 and 10.
You’ll run the game 10 times and tell the user some information 
about their guessing abilities. -->
<?php 
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

play();

function play(){
    $repeat = true;
    while($repeat){
        game();
        $repeat = isRepeat();
    }
    computerScore();
    tendency();
}

function tendency(){
    global $guess_high,$guess_low;
    if($guess_high>$guess_low){
       echo "\nWhen you guessed wrong, you tended to guess high.";
    }
    elseif ($guess_high<$guess_low){
       echo "\nWhen you guessed wrong, you tended to guess low.";
    }
    else{
        echo "\nWhen you guessed wrong, you tended to guess lower and higher equally.";
    }
    echo "\n";
}

function computerScore(){
    global $correct_guesses,$play_count;
    $percentage_correct = ($correct_guesses/$play_count) * 100;
    echo "\nYou have got " . round($percentage_correct,2,PHP_ROUND_HALF_UP).  "% of the guesses correct";
}

function isRepeat(){
    $response = readline("\nWould you like to play again? Please enter yes or no : ");
    while(($response !== "yes") || ($response!=="no")){
        if($response === "yes"){
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

}

function game(){
    global $correct_guesses,$guess_high,$guess_low,$play_count;
    $play_count++;
    $generated_number = generateRandom();
    $guess = guessNumber();
    if($generated_number===$guess){
        $correct_guesses++;
    }
    elseif($generated_number<$guess){
        $guess_high++;
    }
    elseif($generated_number>$guess){
        $guess_low++;
    }
    else{
        echo "Error Occurred";
    }
    echo "***********************************************";
    echo "\nThe correct answer was : " . $generated_number;
    echo "\nCorrect guesses " . $correct_guesses;
    echo "\nHigh guesses ". $guess_high;
    echo "\nLow guesses " . $guess_low;
    echo "\n***********************************************";
}

function printInstruction(){
    echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";
}

function generateRandom(){
    return rand(0,10);
}

function guessNumber(){
    echo "Make your guess...";
    $guess = intval(readline("\nPlease enter a number between 0 and 10 : "));
    while (!($guess<=10)){
        $guess = intval(readline("\nPlease enter a number between 0 and 10 : "));
    }
    return $guess;
}
?>