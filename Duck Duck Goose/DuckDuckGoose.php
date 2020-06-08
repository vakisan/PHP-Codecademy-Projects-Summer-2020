<?php

function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "duck\n";
  } else {
    return "goose!\n";
  }
}

echo duckDuckGoose(FALSE);
echo duckDuckGoose(TRUE);
echo duckDuckGoose(FALSE);
