<!-- Since it’s hard to keep track of what’s truthy or falsy in PHP, let’s write a function to check for us! Write a function truthyOrFalsy() that takes in any value and returns the string "True" if that value is truthy and the string "False" if that value is falsy.
 -->
<?php
function truthyOrFalsy($value){
  if($value){
    return "True";
  }
  else{
    return "False";
  }
}

function printResult($value){
 echo truthyOrFalsy($value) . "\n";
}

printResult("");
printResult(null);
printResult([]);
printResult("0");
printResult(0);
printResult($hello);
printResult("1");
printResult(14);
printResult([1,2]);
printResult("hello");
