<?php

$riel_left = 2103942;
$kyat_left = 19092;
$krones_left = 109;
$lek_left = 9094;

$riel_rate_to_USD = 0.00026;
$kyat_rate_to_USD = 0.00066;
$krones_rate_to_USD = 0.11;
$lek_rate_to_USD = 0.0090;

$flat_conversion_fee = 1;

echo "Riel left = " . $riel_left;
echo "\nKyat left = " . $kyat_left;
echo "\nKrones left = " . $krones_left;
echo "\nLek left = " . $lek_left;

echo "Riel to USD = " . $riel_rate_to_USD;
echo "\nKyat to USD = " . $kyat_rate_to_USD;
echo "\nKrones to USD = " . $krones_rate_to_USD;
echo "\nLek to USD = " . $lek_rate_to_USD;

echo "\nConversion fee is ".$flat_conversion_fee;

$riel_left_in_USD = $riel_rate_to_USD*$riel_left+1;
$kyat_left_in_USD = $kyat_rate_to_USD*$kyat_left+1;
$krones_left_in_USD = $krones_rate_to_USD*$krones_left+1;
$lek_left_in_USD = $lek_rate_to_USD*$lek_left+1;

echo "\nRiel left in USD = " . $riel_left_in_USD;
echo "\nKyat left in USD = " .  $kyat_left_in_USD;
echo "\nKrones left in USD = " . $krones_left_in_USD;
echo "\nLek left in USD = " . $lek_left_in_USD;

$sum_left_in_usd = $riel_left_in_USD+$kyat_left_in_USD+$krones_left_in_USD+$lek_left_in_USD;

echo "\nMoney left after trip is : " . $sum_left_in_usd;