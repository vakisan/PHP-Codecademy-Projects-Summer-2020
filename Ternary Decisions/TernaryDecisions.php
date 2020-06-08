<!-- In a previous exercise, you wrote a function chooseCheckoutLane() using an if/else. Write a version of this function called ternaryCheckout() which accomplishes the same functionality using a ternary operator instead of an if/else.

This function should take in a single number argument representing the number of items a customer has. If the customer has 12 items or fewer, the function should return "express lane". Otherwise, the function should return "regular lane".
 -->
<!-- In a previous exercise, you wrote a function canIVote() using an if/else. Write a version of this function called ternaryVote() which accomplishes the same functionality using a ternary operator instead of an if/else.

Your function should take in a number representing an age, and return the string “yes” if the age is greater than or equal to 18, and the string “no” it’s not. -->

<?php
function ternaryCheckout($number_of_items){
  $result = ($number_of_items<=12)?"express lane":"regular lane";
  return $result;
}

function ternaryVote($age){
  $result = ($age>=18)?"yes":"no";
  return $result;
}

//tests
echo ternaryCheckout(12);
echo ternaryCheckout(15);

echo ternaryVote(18);
echo ternaryVote(17);
echo ternaryVote(21);
