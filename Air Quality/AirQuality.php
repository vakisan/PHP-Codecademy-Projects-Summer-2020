<!-- The U.S. government has multiple classifications of air quality each symbolized by a color:

The color "green" indicates the air quality is "good".
The color "yellow" indicates the air quality is "moderate".
The color "orange" indicates the air quality is "unhealthy for sensitive groups".
The color "red" indicates the air quality is "unhealthy".
The color "purple" indicates the air quality is "very unhealthy".
And the color "maroon" indicates the air quality is "hazardous".
Write a function, airQuality(), that takes in a color as a string, and prints the corresponding air quality.

Your function should use a switch statement. You should provide a default string of "invalid color" for any input aside from the six colors listed.
 -->
 
<?php
function airQuality($color){
  switch($color){
    case "green" : {
      echo "good\n";
    }break;
    case "yellow" : {
      echo "moderate\n";
    }break;
    case "orange" : {
      echo "unhealthy for sensitive groups\n";
    }break;
    case "red" : {
      echo "unhealthy\n";
    }break;
    case "purple" : {
      echo "very unhealthy\n";
    }break;
    case "maroon" : {
      echo "hazardous\n";
    }break;
    default : {
      echo "invalid color\n";
    }break;
  }
}

//tests
airQuality("green");
airQuality("hfesi");
airQuality("maroon");