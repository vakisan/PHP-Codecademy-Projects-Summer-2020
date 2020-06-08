<?php

function clapYourHands($is_happy, $know_it){
  if ($is_happy && $know_it){
    return "CLAP!\n";
  } else {
    return ":(\n";
  }
}


echo clapYourHands(FALSE, FALSE); 
echo clapYourHands(FALSE, TRUE); 
echo clapYourHands(TRUE, FALSE); 
echo clapYourHands(TRUE, TRUE);
