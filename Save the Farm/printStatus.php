<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "You are in: $location\n";
  
  // Write your code here:
  if ($wearing_glasses){
    echo "You are wearing glasses.\n";
  }
  if ($wearing_contacts){
    echo "You are wearing contacts.\n";
  }
  if ($has_mushrooms){
    echo "You are holding mushrooms.\n";
  }
  if($needs_to_pee){
    echo "You need to pee!\n";
  }
  if($is_hungry){
    echo "You are hungry.\n";
  }
  else{
    echo "You are well-fed and energetic.\n";
  }
  
}
