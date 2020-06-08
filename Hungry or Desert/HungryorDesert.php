<?php

function willWeEat($meal_type, $isHungry){
    if($meal_type==="dessert"||$isHungry){
        return "Yum Thanks\n";
    }
    else{
        return "No thanks. We're not hungry.\n";
    }
}


echo willWeEat("dessert", false);
echo willWeEat("dessert", true);
echo willWeEat("fgfdfg", false);