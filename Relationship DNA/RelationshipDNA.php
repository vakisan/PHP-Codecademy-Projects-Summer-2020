<!-- You’re going to write a function to determine the likely genetic relationship between two people.

Write a function, whatRelation() that has one number parameter representing the percentage of DNA the two people share. Your function should print the likely relationship as a string. We expect the number passed in to always be an integer from 0 to 100

Here’s how it should calculate the relationship:

100 should print "identical twins"
35 through99 should print "parent and child or full siblings"
14through 34 should print "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings"
6 through 13 should print "first cousins"
3 through 5 should print "second cousins"
1 through 2 should print "third cousins"
0 should print "not genetically related"
 -->
<?php

function whatRelation($percentage_DNA_shared){
    echo "You have entered ${percentage_DNA_shared}";
  if($percentage_DNA_shared === 100){
    echo "identical twins\n";
  }
  elseif($percentage_DNA_shared >= 35){
   echo "parent and child or full siblings\n";
  }
  elseif($percentage_DNA_shared >= 14){
    echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings\n";
  }
  elseif($percentage_DNA_shared >= 6){
    echo "first cousins\n";
  }
  elseif($percentage_DNA_shared >= 3){
    echo "second cousins\n";
  }
  elseif($percentage_DNA_shared >= 1){
    echo "third cousins\n";
  }
  elseif($percentage_DNA_shared === 0){
    echo "not genetically related\n";
  }
}
// tests
whatRelation(100);
whatRelation(99);
whatRelation(35);
whatRelation(34);
whatRelation(0);