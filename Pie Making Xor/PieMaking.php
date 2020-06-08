<!-- We’ll tolerate many ingredients in a pie, but having both bananas and chicken is something we simply can’t condone. And… yet… I must have either bananas or chicken in any pie I eat.

Write a function, eatPie(). Your function should have a single parameter, an array of ingredients. If the array includes either "chicken" or "bananas" (but not both), your function should return "Delicious pie!". Otherwise, it should return "Disgusting!". -->

<?php
$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks", "butter", "vanilla extract", "bananas", "heavy cream", "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];

// Write your code below:

function eatPie($ingredient_array){
    if(in_array("chicken",$ingredient_array) xor in_array("banana", $ingredient_array)){
        return "Delicious pie\n";
    }
    else{
        return "disgusting\n";
    }
}

echo eatPie($banana_cream);
echo eatPie($experimental_pie);