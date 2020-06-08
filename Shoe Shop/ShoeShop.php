<h1>Only Shoes Shoe Shop</h1>
<?php
for ($i = 0; $i < 5; $i++) :
?>
<p>We sell shoes</p>
<?php
endfor;
?>
<!-- use endfor; to indicate end of loop and  : to start of loop. this improves readability in html -->

<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 5) :
?>
<p>We sell shoes</p>
  <?php
  foreach ($repeats as $value) :
  ?>
  <p>(only shoes)</p>
  <?php
  endforeach;
  ?>
<?php
  $i++;
endwhile;
?>

<!-- the same applies to while and foreach loop execpt the end is endwhile for while and endforeach for foreach loops
 -->

 <h1>Shoe Shop</h1>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
?>
<p>We sell <?= $brands?> brands of <?= $type?></p>
<?php
endforeach;
?>

<!-- when using loops in html we may need to open multiple php tags. -->