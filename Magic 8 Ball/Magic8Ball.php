<!-- The Magic 8-Ball is a popular toy used for fortune-telling or seeking advice.

In this project, you’ll be creating a function that can answer any “yes” or “no” question.

Magic 8-Ball, should I do this project?

The answers inside a standard Magic 8-Ball are:

It is certain.
It is decidedly so.
Without a doubt.
Yes - definitely.
You may rely on it.
As I see it, yes.
Most likely.
Outlook good.
Yes.
Signs point to yes.
Reply hazy, try again.
Ask again later.
Better not tell you now.
Cannot predict now.
Concentrate and ask again.
Don't count on it.
My reply is no.
My sources say no.
Outlook not so good.
Very doubtful.
Your magic8Ball() will take in any “yes” or “no” question (as a string) and give a psychic (random) answer.
 -->
<?php
echo "Welcome to Magic 8 Ball!\n";
$repeat = true;
magic8Ball();
while($repeat){
    $response = readline("Do you wish to repeat? Please enter yes or no : ");
    if($response==="no"){
        echo "Bye!\n";
        $repeat = false;
      }
      else{
        magic8Ball();
      }
}

function magic8Ball(){
        $user_question = readline("Please enter a yes/no question : \n");
        echo "So you wish to receive an answer to : \n";
        echo str_pad($user_question,100,"~~~||~~~ ",STR_PAD_BOTH) . "\n";
        conditionalLogic(generateRandom()) ."\n";
    }

function generateRandom(){
    return rand(0,19);
}

function conditionalLogic($random_number){
    switch($random_number){
    case 0:
        echo "It is certain"; break;
    case 1:
        echo "It is decidedly so."; break;
    case 2:
        echo "Without a doubt."; break;
    case 3:
        echo "Yes - definitely."; break;
    case 4:
        echo "You may rely on it."; break;
    case 5:
        echo "As I see it, yes."; break;
    case 6:
        echo "Most likely."; break;
    case 7:
        echo "Outlook good."; break;
    case 8:
        echo "Yes."; break;
    case 9:
        echo "Signs point to yes."; break;
    case 10:
        echo "Reply hazy, try again."; break;
    case 11:
        echo "Ask again later."; break;
    case 12:
        echo "Better not tell you now."; break;
    case 13:
        echo "Cannot predict now."; break;
    case 14:
        echo "Concentrate and ask again."; break;
    case 15:
        echo "Don't count on it."; break;
    case 16:
        echo "My reply is no."; break;
    case 17:
        echo "My sources say no."; break;
    case 18:
        echo "Outlook not so good."; break;
    case 19:
        echo "Very doubtful."; break;
    }
    echo "\n";
}