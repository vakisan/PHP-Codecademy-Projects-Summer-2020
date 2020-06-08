<!-- Your program should handle three situations:

If the user’s name is greater than 8 characters, you should print "Hi, [THEIR NAME]. That's a long name."
If their name is between 4 and 8 characters (inclusive), you should print "Hi, [THEIR NAME].".
And if their name is 3 characters or fewer, you should print "Hi, [THEIR NAME]. That's a short name.".
 -->
<?php

echo "Hello, there. What's your first name?\n";
$name = readline("Please enter your name : ");

if(strlen($name)>8){
  echo "Hi, $name. That's a long name.\n";
}
elseif(strlen($name)>=4){
echo "Hi, $name.\n";
}
else{
  echo "Hi, $name. That's a short name.\n";
}

