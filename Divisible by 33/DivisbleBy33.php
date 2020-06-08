<?php
$count = 1;
while($count<=100){
  if($count<33){
     echo "$count is not divisible by 33\n";
  }
  else{
    if($count%33===0){
      echo "$count is divisible by 33\n";
    }
    else{
      echo "$count is not divisible by 33\n";
    }
  }
  $count++;
}