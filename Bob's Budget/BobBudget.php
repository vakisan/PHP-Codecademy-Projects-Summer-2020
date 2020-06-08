<?php

$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

//for loop to iterate over the multi-dimensional array to compute the net salary.
$salaryAfterTax = 0;
for($i = 0; $i<count($incomeSegments);$i++){
    for($j = 0; $j<1;$j++){
        $salaryAfterTax += $incomeSegments[$i][$j]*$incomeSegments[$i][1];
    }
}
echo "Salary after tax : " . $salaryAfterTax . "\n";

//asignment operator
$salaryAfterTax -= $socialSecurity; 

//copy by value
$annualIncome = $salaryAfterTax;

echo "Salary after social security deductions : " . $annualIncome . "\n";

$annualIncome -= ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);

echo "Income left after annual expenses : " . $annualIncome . "\n";

$monthlyIncome = $annualIncome/12;

echo "Monthly income : " . $monthlyIncome . "\n";

$monthlyIncome -= ($monthlyExpenses["rent"]+$monthlyExpenses["utilities"]+$monthlyExpenses["healthInsurance"]);

echo "Monthly salary left after expenses : " . $monthlyIncome . "\n";

$weeklyIncome = $monthlyIncome/4.33;

echo "Weekly income : " . $weeklyIncome . "\n";

$weeklyExpenses = ["gas"=>25, "food"=>90, "entertainment"=>47];

$weeklyExpensesTotal = $weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"];

$weeklyIncome -= $weeklyExpensesTotal;

echo "Spare money per week : " . ($weeklyIncome) . "\n";

echo "Money saved per year : " . ($weeklyIncome*52) . "\n";