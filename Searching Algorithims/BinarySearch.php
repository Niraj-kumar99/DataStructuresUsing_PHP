<?php

function binarySearch($binarArray , $number) {
    //if array does not has the any element
    if(count($binarArray) === 0) {
        return false;
    }
    $lowerValue = 0;
    $higherValue = count($binarArray)-1;

    while($lowerValue <= $higherValue){
        //computing mid value
        $midValue = floor(($lowerValue + $higherValue)/2);

        //if the searched number is the middle valued number 
        if($number == $binarArray[$midValue]) {
            return true;
        }
        //if serched number is smaller than middle value
        //then search left of the mid value
        if($number < $binarArray[$midValue]) {
            $higherValue = $midValue-1;
        }
        //else searched number is greater than middle value
        //then search right of the mid value
        else {
            $lowerValue = $midValue+1;
        }
    }
    //if number is not in the array
    return false;
}
$binarArray = array(10,20,30,40,50,60);
$numberToFind = 80;

if(binarySearch($binarArray, $numberToFind)) {
    echo $numberToFind, " Present in the list";
}
else {
    echo $numberToFind, " Not Present in the list";
}
?>

