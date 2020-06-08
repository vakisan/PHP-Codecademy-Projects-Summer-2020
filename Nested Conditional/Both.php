<?php
function both($param1, $param2){
  if($param1===TRUE){
    if($param2===TRUE){
    return "both\n";
    }
    else{
      return "not both\n";
    }
  }
  else{
      return "not both\n";
    }
}

echo both(true,true);
echo both(false,true);
echo both(true,false);
echo both(false,false);