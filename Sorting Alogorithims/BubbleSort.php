<?php

function bubbleSort($givenArray) {
    //for passes
    for($i=0; $i<count($givenArray)-1; $i++) {
        //for comparing eliments.
        for($j=0; $j<count($givenArray)-1-$i; $j++) {
            //for swapping.
            if($givenArray[$j] > $givenArray[$j+1]) {
                $temp = $givenArray[$j];
                $givenArray[$j] = $givenArray[$j+1];
                $givenArray[$j+1] = $temp;
            }
        }
    }
    return $givenArray;
}
function printArray($givenArray)
{
   $sortedArray = bubbleSort($givenArray); 
   echo "The Sorted Elements are :\n";
   foreach($sortedArray as $value)
   {
       echo "$value\n";
   }
}

$givenArray = array(15,16,6,8,5);
printArray($givenArray);
?>