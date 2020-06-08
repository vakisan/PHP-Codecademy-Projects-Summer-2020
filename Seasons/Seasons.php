<!-- Write a function, returnSeason(). Your function should take in a string representing a month (e.g. "January"), and it should return which season that month falls in.

"December", "January", and "February" are "winter" months.
"March", "April", and "May" are "spring" months.
"June", "July", and "August" are "summer" months.
And "September", "October", and "November" are "fall" months.
Your function should use a switch statement and fall through to accomplish this task.
 -->
<?php
function returnSeason($month){
  switch($month){
    case "December":
    case "January":
    case "February":
        echo "$month is a Winter month";
        return "winter";
    break;
    case "March":
    case "April":
    case "May":
        echo "$month is a Spring month";
        return "spring";
    break;
    case "June":
    case "July":
    case "August":
        echo "$month is a Summer month";
        return "summer";
    break;
    case "September":
    case "October":
    case "November":
        echo "$month is a Autumn month";
        return "autumn";
  }
}
//test
returnSeason("June");